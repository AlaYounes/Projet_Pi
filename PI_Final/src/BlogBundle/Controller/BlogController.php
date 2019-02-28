<?php

namespace BlogBundle\Controller;

//use BlogBundle\Entity\Categorie;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Categorie;
use BlogBundle\Entity\Commentaire_Blog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function afficherBlogAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findAll();
        $categoriess = $em->getRepository('BlogBundle:Categorie')->findAll();

        return $this->render('BlogBundle:Blog:afficher_blog.html.twig', array(
            'articles' => $articles,
            'categories' => $categoriess,

            // ...
        ));
    }

    public function blogCategorieAction(Request $request, Categorie $categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BlogBundle:Article')->findBy(array('categorie' => $categorie));
        $categoriess = $em->getRepository('BlogBundle:Categorie')->findAll();
        return $this->render('@Blog/Blog/blog_categorie.html.twig', array(
            'articles' => $articles,
            'categories' => $categoriess,
        ));

    }

    public function OrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = new Article();
        $articles = $em->getRepository('BlogBundle:Article')->findBy(array(),
            array('dateEdition' => 'DESC'));

        $categorie = $this->getDoctrine()->getRepository('BlogBundle:Categorie')->findAll();
        return $this->render('@Blog/Blog/blog_categorie.html.twig', array(
            'articles' => $articles,
            'categories' => $categorie
        ));
    }

    public function afficherContenuAction(Request $request, $id ,Article $article)
    {
        $commentairess = $this->getDoctrine()->getRepository(Commentaire_Blog::class)->findby(array("id" => $id));

        $commentaires = new Commentaire_Blog();
        $form = $this->createForm('BlogBundle\Form\Commentaire_BlogType',$commentaires);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $commentaires->setAuteurCommentaire($user);
            $commentaires->setDateCommentaire(new \DateTime());
//                $commentaires->setArticle($article);
//            $commentaires->setArticle($user.id);
            $em->persist($commentaires);
            $em->flush();
            return $this->redirectToRoute('blog_Show_homePage',array('id' => $article->getId()));
        }else{
            $repo = $this->getDoctrine()->getRepository('BlogBundle:Article');
            $article = $repo->find($id);
            $article01 = $repo->findAll();
            return $this->render('@Blog/Blog/blog_show.html.twig', [
                'articles' => $article,
                'allarticles' => $article01,
                'form'=>$form->createView(),
                'commentaires'=>$commentairess,
                ]);
        }


    }

    public function afficherBlogParAuteurAction(Request $request, $auteur)
    {

        $articles = $this->getDoctrine()->getRepository('BlogBundle:Article')
            ->findByAuteur($auteur);
        $categorie = $this->getDoctrine()->getRepository('BlogBundle:Categorie')->findAll();

        return $this->render('BlogBundle:Blog:afficher_Par_Auteur_blog.html.twig', array(
            'articles' => $articles,
            'categories' => $categorie
        ));
    }

    public function searchAction(Request $request,$blog)
    {
        $searchForm = $this->createForm('BlogBundle\Form\BlogRechercheType',$blog);
        $searchForm->handleRequest($request);
        if($searchForm->isSubmitted() && $searchForm->isValid()){
            $searchQuery = $this->getDoctrine()->getRepository('BlogBundle:Article')->createQueryBuilder('b')
                ->where('b.title LIKE :word')->setParameter('word', '%'.$blog->getTitle().'%')->getQuery();
            $blogs = $searchQuery->getResult();
            return $this->render('@Blog/Blog/blog_show.html.twig',array('search_Form'=>$searchForm->createView(),
                'blogs'=>$blogs,
            ));
        }
    }


}
