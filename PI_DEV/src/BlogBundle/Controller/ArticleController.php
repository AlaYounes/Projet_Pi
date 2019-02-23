<?php

namespace BlogBundle\Controller;

use AppBundle\Entity\User;
use BlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
//Affichage ordonné par la dateEdition (du nouveau vers ancien)
        $articles = $em->getRepository('BlogBundle:Article')->findBy(array(),
            array('dateEdition' => 'desc'));

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new article entity.
     *
     */
    public function newAction(Request $request)
    {
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
    }

    /**
     * Finds and displays a article entity.
     *
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

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

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('article_index');
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

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //Affichage ordonné par la dateEdition (du nouveau vers ancien)
        $motcle = $request->get('motcle');
        $repository= $em ->getRepository('BlogBundle:Article');
        $query = $repository->createQueryBuilder('p')
            ->where('p.id > :id')
            ->setParameter('id', '$motcle')
//            ->orderBy('p.id', 'ASC')
            ->getQuery();
        $articles = $query ->getResult();

        return $this->render('article/index.html.twig',array('articles'=>$articles));

    }
}
