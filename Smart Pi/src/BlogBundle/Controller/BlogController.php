<?php

namespace BlogBundle\Controller;

//use BlogBundle\Entity\Categorie;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Categorie;
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

    public function afficherContenuAction(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Article');
        $article = $repo->find($id);
        $article01 = $repo->findAll();
        return $this->render('@Blog/Blog/blog_show.html.twig', [
            'articles' => $article,
            'allarticles' => $article01,
        ]);

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


}
