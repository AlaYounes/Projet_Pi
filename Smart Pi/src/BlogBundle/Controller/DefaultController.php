<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Article');
        $article = $repo->find($id);
        $article01 = $repo->findAll();
        return $this->render('BlogBundle:Default:Blog_index.html.twig', [
            'articles' => $article,
            'allarticles' => $article01,
        ]);
    }

}
