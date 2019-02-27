<?php

namespace ForumBundle\Controller;

use AppBundle\Entity\User;
use ForumBundle\Entity\article;
use ForumBundle\Entity\commant;
use ForumBundle\Entity\signaler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function signaladminAction()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $commant = $this->getDoctrine()->getRepository(commant::class)->findAll();
        $signal = $this->getDoctrine()->getRepository(signaler::class)->findAll();
        $article = $this->getDoctrine()->getRepository(article::class)->findAll();




        return $this->render("@Forum/admin/signal.html.twig", array('commant' => $commant, 'users' => $users, 'signal' => $signal, 'article' => $article));

    }
    public function deletelistcomAction($id)
    {
        $e = $this->getDoctrine()->getManager();
        $commant = $this->getDoctrine()->getRepository(commant::class)->find($id);

        $e->remove($commant);
        $e->flush();
        return $this->redirectToRoute("signaladmin");


    }
}
