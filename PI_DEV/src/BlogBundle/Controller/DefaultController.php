<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request,$id)
    {
        $repo = $this ->getDoctrine()->getRepository('BlogBundle:Article');
        $article = $repo->find($id);

        return $this->render('BlogBundle:Default:Blog_index.html.twig',['articles'=>$article]);
    }
}
