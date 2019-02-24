<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\article;
use ForumBundle\Form\articleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ForumBundle:Default:index.html.twig');
    }
    public function updateAction(Request $request){
        $article= new article();
        $form=$this->createForm(articleType::class,$article);
        $form->handleRequest($request);
        if ($form->isValid()){
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $article->setUser($user);
            $article->setDate(new \DateTime());
            $em=$this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

        }
        return $this->render("@Forum/article/add_article.html.twig",array('form'=>$form->createView()));
    }
}
