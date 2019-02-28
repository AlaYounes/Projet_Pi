<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use BlogBundle\Entity\Categorie;
use BlogBundle\Form\BlogRechercheType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all article entities.
     *
     */
    public function indexAction(Request $request)
    {
        if ($this->getUser() !== null) {

            $article = new Article();
            $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
            $categories = $em->getRepository('BlogBundle:Categorie')->findAll();
//        if (!$form->isSubmitted()) {
//            throw $this->createNotFoundException("La page n'existe pas");
//        }

            if ($form->isSubmitted() && $form->isValid()) {

                $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findBy(array('titre'
                => $article->getTitre()));
            } else {
                $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findAll();
            }


            return $this->render('article/index.html.twig', array('form' => $form->createView(),
                'articles' => $articles,
                'categories' => $categories,

            ));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }

//    Zayda :/
    public function OrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
//Affichage ordonné par la dateEdition (du nouveau vers ancien)
        $article = new Article();
        $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findBy(array('titre'
            => $article->getTitre()));
        } else {
            $articles = $em->getRepository('BlogBundle:Article')->findBy(array(),
                array('dateEdition' => 'DESC'));

        }
        $categorie = $this->getDoctrine()->getRepository('BlogBundle:Categorie')->findAll();
        return $this->render('article/index.html.twig', array('form' => $form->createView(),
            'articles' => $articles,
            'categories' => $categorie
        ));
    }

    /**
     * Creates a new article entity.
     *
     */
    public function newAction(Request $request)
    {
        if ($this->getUser() !== null) {
            $article = new Article();
            $form = $this->createForm('BlogBundle\Form\ArticleType', $article);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $article->setAuteur($this->getUser());
                $article->setDateCreation(new \DateTime());
                $article->setDateEdition(new \DateTime());

                $em->persist($article);
                $em->flush();

                return $this->redirectToRoute('article_show', array('id' => $article->getId()));
            }

            return $this->render('article/new.html.twig', array(
                'article' => $article,
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    /**
     * Finds and displays a article entity.
     * @param Article $article
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function showAction(Article $article)
    {
        if ($this->getUser() !== null) {

            $deleteForm = $this->createDeleteForm($article);

            return $this->render('article/show.html.twig', array(
                'article' => $article,
                'delete_form' => $deleteForm->createView(),
            ));
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        if ($this->getUser() !== null) {

            $user = $this->getUser();
            $nomUser = $user->getName();
            $AuteurUser = $article->getAuteur();
//Je veux pas que tous les admins peuvent editer les artciles
            $deleteForm = $this->createDeleteForm($article);
            $editForm = $this->createForm('BlogBundle\Form\ArticleType', $article);
            $editForm->handleRequest($request);
//        if ($AuteurUser == $nomUser && $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            if ($editForm->isSubmitted() && $editForm->isValid()) {
                if (!$article->getId()) {
                    $article->setDateEdition(new \DateTime());
                    $article->setDateCreation(new \DateTime());
                }
//            la date d'edition change seulement :p
                $article->setDateEdition(new \DateTime());
                $article->setAuteur($this->getUser());
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('article_edit', array('id' => $article->getId()));
            }

            $count = $this->getDoctrine()->getRepository('BlogBundle:Article')->countByAccount();

            return $this->render('article/edit.html.twig', array(
                'article' => $article,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
                'count' => $count,
            ));
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * Deletes a article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        if ($this->getUser() !== null) {
            $form = $this->createDeleteForm($article);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($article);
                $em->flush();
            }

            return $this->redirectToRoute('article_index');
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @ParamConverter("Categorie", options={"mapping":{"id":"id"}})
     * @param Request $request
     * @param Categorie $categorie
     * @return Response
     */
    public function findByCategorieAction(Request $request, Categorie $categorie)
    {
////        $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findBy(array('categorie' =>
////            '1'));
//        $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findByCategorie('3');
//        return $this->render('article/Blog_index.html.twig',array('articles'=>$articles));

//        $article = new Article();
//        $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
//        $form->handleRequest($request);
//        if ($form->isValid() && $form->isSubmitted()) {
//            $article = $this->getDoctrine()->getRepository('BlogBundle:Article')->findBy(array('titre'
//            => $article->getTitre()));
//        } else {
//            $article = $this->getDoctrine()->getRepository('BlogBundle:Article')
//                ->findByCategorie('1');
//        }
////        $em = $this ->getDoctrine()->getManager();
//        $articles = $em ->getRepository('BlogBundle:Article')->findBycategorie($categorie);

//        $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')
//           ->search($id);
//
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BlogBundle:Article')->findBy(array('categorie' => $categorie));
        $categories = $em->getRepository('BlogBundle:Categorie')->findAll();
        return $this->render('article/index.html.twig', array(
//            'form' => $form->createView(),
            'articles' => $articles,
            'categories' => $categories,
        ));

    }

    public function findAuteurAction(Request $request, $auteur)
    {
        $article = new Article();
        $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')->findBy(array('titre'
            => $article->getTitre()));
        } else {
            $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')
                ->findByAuteur($auteur);
        }
        $categorie = $this->getDoctrine()->getRepository('BlogBundle:Categorie')->findAll();

        return $this->render('article/index.html.twig', array('form' => $form->createView(),
            'articles' => $articles,
            'categories' => $categorie
        ));
    }

    public function SearchArticleAction(Request $request)
    {
        $article = new Article();
        $motcle = $request->get('motcle');
        $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $article = $this->getDoctrine()->getRepository('BlogBundle:Article')->exempleFindByAuteurav($motcle);
        } else {
            $article = $this->getDoctrine()->getRepository('BlogBundle:Article')->findAll();

        }
        return $this->render(':article/Search:Simple_Search.html.twig', array('form' => $form->createView(),
            'articles01' => $article,
        ));
    }

    public function rechercheIdDQLAction(Request $request)
    {
        $article = new Article();
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BlogBundle:Article')->findAll();
        $form = $this->createForm('BlogBundle\Form\ArticleRechercheType', $article);
        $form->handleRequest($request);
        if ($request->isXmlHttpRequest()) {
            $serializer = new Serializer(array(new ObjectNormalizer()));
            $articles = $em->getRepository('BlogBundle:Article')
                ->findIdDQL($request->get('id'));
            $data = $serializer->normalize($articles);

            return new JsonResponse($data);
        }
        return $this->render(':article/Search:Simple_Search01.html.twig',
            array('articles' => $articles, 'form' => $form->createView()));
    }

//    :o :o  Ajax search Trop important :o :o
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities = $em->getRepository('BlogBundle:Article')->findEntitiesByString($requestString);
        if (!$entities) {
            $result['entities']['error'] = "not found";
        } else {
            $result['entities'] = $this->getRealEntities($entities);

        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($entities)
    {
        foreach ($entities as $entity) {
//            $realEntities[$entity->getId()] = [$entity->getTitre(), $entity->getImage()];
            $realEntities[$entity->getId()] = [$entity->getAuteur(), $entity->getTitre(), $entity->getImage()
                , $entity->getDescription(), $entity->getCategorie(), $entity->getDateCreation(), $entity->getDateEdition(),
//
            ];
        }
        return $realEntities;
    }

    public function rechercheAction(Request $request, Article $article)
    {
        $searchForm = $this->createForm(BlogRechercheType::class, $article);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $searchQuery = $this->getDoctrine()->getRepository('BlogBundle:Article')->createQueryBuilder('b')
                ->where('b.title LIKE :word')->setParameter('word', '%' . $article->getTitle() . '%')
                ->getQuery();
            $blogs = $searchQuery->getResult();
            return $this->render('blog/searchBlog.html.twig', array('searchForm' => $searchForm->createView()
            , 'blogs' => $blogs));
        }
        return $this->render('blog/searchBlog.html.twig', array('searchForm' => $searchForm->createView()
        , 'articles' => $article));
    }
}