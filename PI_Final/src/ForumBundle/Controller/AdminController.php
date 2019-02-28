<?php

namespace ForumBundle\Controller;

use AppBundle\Entity\User;
use ForumBundle\Entity\article;
use ForumBundle\Entity\commant;
use ForumBundle\Entity\question;
use ForumBundle\Entity\signaler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function signaladminAction()
    {$userS = $this->getUser();
        if($userS->getRoles()[0] == "ROLE_ADMIN") {
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $commant = $this->getDoctrine()->getRepository(commant::class)->findAll();
            $signal = $this->getDoctrine()->getRepository(signaler::class)->findAll();
            $question = $this->getDoctrine()->getRepository(question::class)->findAll();


            return $this->render("@Forum/admin/signal.html.twig", array('commant' => $commant, 'users' => $users, 'signal' => $signal, 'question' => $question));
        }
        else  return $this->redirectToRoute('fos_user_security_login');
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
