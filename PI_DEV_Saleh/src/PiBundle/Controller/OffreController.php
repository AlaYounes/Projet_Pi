<?php

namespace PiBundle\Controller;

use UserBundle\Entity\User;
use PiBundle\Entity\Offre;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Offre controller.
 *
 * @Route("offre")
 */
class OffreController extends Controller
{
    /**
     * Lists all offre entities.
     *
     * @Route("/", name="offre_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('PiBundle:Offre')->findBy(array(), array('travailfait' => 'DESC'));

        $offres  = $this->get('knp_paginator')->paginate(
            $offres,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            3/*nbre d'éléments par page*/
        );
        return $this->render('offre/index.html.twig', array(
            'offres' => $offres,
        ));

    }



    /**
     * Creates a new offre entity.
     *
     * @Route("/new", name="offre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $offre = new Offre();
        $form = $this->createForm('PiBundle\Form\OffreType', $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();

            return $this->redirectToRoute('offre_show', array('id' => $offre->getId()));
        }

        return $this->render('offre/new.html.twig', array(
            'offre' => $offre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a offre entity.
     *
     * @Route("/{id}", name="offre_show")
     * @Method("GET")
     */
    public function showAction(Offre $offre)
    {
        $deleteForm = $this->createDeleteForm($offre);

        return $this->render('offre/show.html.twig', array(
            'offre' => $offre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing offre entity.
     *
     * @Route("/{id}/edit", name="offre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Offre $offre)
    {
        $deleteForm = $this->createDeleteForm($offre);
        $editForm = $this->createForm('PiBundle\Form\OffreType', $offre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offre_edit', array('id' => $offre->getId()));
        }

        return $this->render('offre/edit.html.twig', array(
            'offre' => $offre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a offre entity.
     *
     * @Route("/{id}", name="offre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Offre $offre)
    {
        $form = $this->createDeleteForm($offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offre);
            $em->flush();
        }

        return $this->redirectToRoute('offre_index');
    }

    /**
     * Creates a form to delete a offre entity.
     *
     * @param Offre $offre The offre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Offre $offre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offre_delete', array('id' => $offre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function rechercheOffreAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $offres=$em->getRepository(Offre::class)->findAll();
        if($request->getMethod('POST'))
        {
            $nom=$request->get('nom');
            $travailfait=$request->get('travailfait');

            $offres=$this->getDoctrine()->getRepository(Offre::class)->findByName($nom,$travailfait);
            $offres  = $this->get('knp_paginator')->paginate(
                $offres,
                $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                2/*nbre d'éléments par page*/
            );
        }
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));


    }


    /**
     * Creates a new ActionItem entity.
     *
     * @Route("/search", name="ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('PiBundle:Offre')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "keine Einträge gefunden";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = [$entity->getNom(),$entity->getLieu(),$entity->getRating(),$entity->getDiplome(),$entity->getType(),$entity->getDescription(),$entity->getTravailfait(),$entity->getHeurest()];
            $realEntities[$entity->getId()] = [$entity->getNom(),$entity->getLieu(),$entity->getRating(),$entity->getDiplome(),$entity->getType(),$entity->getDescription(),$entity->getTravailfait(),$entity->getHeurest()];
        }
        return $realEntities;
    }



    public function findByCategorie1Action(){
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findCategorie1();
        //var_dump($modeles).die;
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));
    }
    public function findByCategorie2Action(){
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findCategorie2();
        //var_dump($modeles).die;
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));
    }
    public function findByCategorie3Action(){
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findCategorie3();
        //var_dump($modeles).die;
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));
    }
    public function findByCategorie4Action(){
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findCategorie4();
        //var_dump($modeles).die;
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));
    }
    public function findByCategorie5Action(){
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findCategorie5();
        //var_dump($modeles).die;
        return $this->render("Offre/recherche.html.twig",array('offres'=>$offres));
    }


    /**
     * @param $name
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mailAction($name=null, \Swift_Mailer $mailer=null)
    {
        $message = (new Swift_Message('Hello Email'))
            ->setFrom('saleh.benabdessalem@esprit.tn')
            ->setTo('salih.abdessalem@gmail.com')
            ->setContentType('text/html')
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/registration.html.twig',
                    array('nom' => $name)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        //$mailer->send($message);

        // or, you can also fetch the mailer service this way
         $this->get('mailer')->send($message);

        return $this->render("Offre/show.html.twig");
    }

}
