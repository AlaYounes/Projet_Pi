<?php

namespace BlogBundle\Controller;

use AppBundle\Entity\User;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Commentaire_Blog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogCommentaireController extends Controller
{
    public function ListCommentairesAction()
    {
        $commentaire = new  Commentaire_Blog();
        $commentaires = $this->getDoctrine()->getRepository('BlogBundle:Commentaire_Blog')->findAll();
        $user = $this->getUser();
        $commentaire->setAuteurCommentaire($user);

        return $this->render('BlogBundle:BlogCommentaire:list_commentaires.html.twig', array(
            'commentaires' => $commentaires

            // ...
        ));
    }

    public function CreateCommentaireAction(Request $request,$id)
    {
        if ($this->getUser() != null) {
            $liste = $this->getDoctrine()->getRepository(Article::class)->findby(array("id" => $id));
//            $comments = $this->getDoctrine()->getRepository('BlogBundle:Commentaire_Blog')->findByArticle($article);


            $commentaires = new Commentaire_Blog();
            $form = $this->createForm('BlogBundle\Form\Commentaire_BlogType', $commentaires);
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
//            return $this->redirectToRoute('');
            }
            return $this->render('BlogBundle:BlogCommentaire:create_commentaire.html.twig', array(
                'form' => $form->createView()
                // ...
            ));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }

    public function ViewCommentaireByAuteurAction(Article $article)
    {
        $commentaires = $this->getDoctrine()->getRepository('BlogBundle:Commentaire_Blog')
            ->findByAuteurCommentaire($article);

        return $this->render('BlogBundle:BlogCommentaire:view_commentaire.html.twig', array(// ...
            'commentaires'=>$commentaires
        ));
    }
}
