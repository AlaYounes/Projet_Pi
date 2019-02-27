<?php

namespace JobpostsBundle\Controller;

use JobpostsBundle\Form\AnnoncesPostsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JobpostsBundle\Entity\AnnoncesPosts;

use JobpostsBundle\Entity\Demande;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
//use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JobpostsBundle:Default:index.html.twig');
    }



    public function AjouterAnnonceAction(Request $request)
{

    $Annonces = new AnnoncesPosts();

$form = $this->createFormBuilder($Annonces)
->add('titre', TextType::class, array('attr' => array('placeholder' => 'Titre', 'class' => 'form-control border-color-1')))
->add('salaire', IntegerType::class, array('attr' => array('placeholder' => 'salaire en DT', 'class' => 'form-control border-color-5')))
->add('description', TextareaType::class, array(
'attr' => array('placeholder' => 'Description', 'class' => 'form-control border-color-4')))
->add('speciality', TextareaType::class, array('attr' => array('placeholder' => 'speciality', 'class' => 'form-control border-color-4')))
->add('save', SubmitType::class, array('attr' => array('class' => 'btn btn-primary')))->getForm();
$form->handleRequest($request);


if ($form->isSubmitted() && $form->isValid()) {
    $datef= $request->get('datefin');
    $Annonces->setDatefin($datef);
    $dated= $request->get('datedebut');
    $Annonces->setDatedebut($dated);
    $Annonces->setEtatannonce(0);
    $Annonces->setIduserA(1);
$em = $this->getDoctrine()->getManager();
$em->persist($Annonces);
$em->flush();
return $this->redirectToRoute('AjouterAnnonce');
}
        $data = array(
            'form' => $form->createView(),
        );
        return $this->render('@Jobposts/Default/AjouterAnnonce.html.twig', $data);

}





    public function ListeannoncesAction(Request $request)
    {

        $demande = new Demande();


        if (isset($_POST["motivation"]) && !empty($_POST["motivation"])) {
            $motivation=$_POST["motivation"];
            $ida=$_POST["ida"];

            $annonce=new AnnoncesPosts();
            $annonce= $this->getDoctrine()->getManager()->getRepository(AnnoncesPosts::class)->find($ida);
            $dated=$annonce->getDatedebut();
           $datef= $annonce->getDatefin();
            $Demande= $this->getDoctrine()->getManager()->getRepository(Demande::class)->findbestd($dated,$datef);

            if(sizeof($Demande)>0){

                return $this->redirectToRoute('Reponse');

            }
            else{
            $this->AjouterDemande($motivation,$ida);}
        }




        $listeannonce = $this->getDoctrine()->getManager()->getRepository(AnnoncesPosts::class)->findByEtatannonce(0);


        $data = array(
            'listeannonce' => $listeannonce,


        );


        return $this->render('@Jobposts/Default/Work.html.twig', $data);
    }

    function AjouterDemande($motivation,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $Annonces=$em->getRepository('JobpostsBundle:AnnoncesPosts')->find($id);

        $Demande=new Demande();

        $Demande->setIduserD(2);
        $Demande->setIda($Annonces->getId());
        $Demande->setIduserA($Annonces->getIduserA());
        $Demande->setTitre($Annonces->getTitre());
        $Demande->setDatedebutD($Annonces->getDatedebut());
        $Demande->setDatefinD($Annonces->getDatefin());
        $Demande->setEtatd(0);
        $Demande->setMotivation($motivation);

        $em->persist($Demande);
        $em->flush();
        return $this->redirectToRoute('Listeannonces');
    }







    public function ListedemandesAction(Request $request)
    {




        $listeDemande = $this->getDoctrine()->getManager()->getRepository(Demande::class)->findDemandeDQL(1);


        $data = array(
            'listeDemande' => $listeDemande,


        );


        return $this->render('@Jobposts/Default/Hire.html.twig', $data);
    }


    public function JsonDemandesAction(){
        $em=$this->getDoctrine()->getManager();
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $product=$em->getRepository(Demande::class)->findbestdd();

        $response = new Response($serializer->serialize($product, 'json'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }



    public function calendarAction(){



        return $this->render('@Jobposts/Default/calendar.html.twig');


    }


    public function SupprimerAnnonceAction($id)
    {

        $m = $this->getDoctrine()->getManager();
        $annonces = $m->getRepository('JobpostsBundle:AnnoncesPosts')->find($id);
        $m->remove($annonces);
        $m->flush();
        return $this->redirectToRoute('ListeAnnoncesdatatable');
    }

    public function modifierAnnonceAction(Request $request,$id)
    {



        $em=$this->getDoctrine()->getManager();
        $AnnoncesPosts=$em->getRepository('JobpostsBundle:AnnoncesPosts')->find($id);
        $form=$this->createForm(AnnoncesPostsType::class,$AnnoncesPosts);
        if($form->handleRequest($request)->isValid()) {

            $datef= $request->get('datefin');
            $AnnoncesPosts->setDatefin($datef);
            $dated= $request->get('datedebut');
            $AnnoncesPosts->setDatedebut($dated);
            $em->persist($AnnoncesPosts);
            $em->flush();
            return $this->redirectToRoute('ListeAnnoncesdatatable');
        }
        $data=array(
            'form'=>$form->createView()
        );



        return $this->render('@Jobposts/Default/modfier_demande.html.twig',$data);

    }





    public function ListeAnnoncesdatatableAction(Request $request)
    {

        $listeAnnonce = $this->getDoctrine()->getManager()->getRepository(AnnoncesPosts::class)->findByIduserA(1);


        $data = array(
            'listeAnnonce' => $listeAnnonce,


        );


        return $this->render('@Jobposts/Default/datatableannonces.html.twig', $data);
    }


    public function ListeDemandedatatableAction(Request $request)
    {

        $listeDemande = $this->getDoctrine()->getManager()->getRepository(Demande::class)->findByIduserA(1);


        $data = array(
            'listeDemande' => $listeDemande,


        );


        return $this->render('@Jobposts/Default/datatabledemande.html.twig', $data);
    }


    public function ApprouverdemandeAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $Demande = $this->getDoctrine()->getManager()->getRepository(Demande::class)->find($id);


        $ida=$Demande->getIda();

        $Annonces = $this->getDoctrine()->getManager()->getRepository(AnnoncesPosts::class)->find($ida);

        $Annonces->setEtatannonce(1);
        $em->persist($Annonces);
        $em->flush();


        $Demande->setEtatd(1);

        $em->persist($Demande);
        $em->flush();




        $Demande = $this->getDoctrine()->getManager()->getRepository(Demande::class)->findalldemande($ida=$Demande->getIda());


        return $this->redirectToRoute('Listedemandes');

        }


        public function TerminerdemandeAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $Demande = $this->getDoctrine()->getManager()->getRepository(Demande::class)->find($id);


        $Demande->setEtatd(2);

        $em->persist($Demande);
        $em->flush();



        return $this->redirectToRoute('ListeDemandedatatable');

    }


    public function ReponseAction()
    {



        return $this->render('@Jobposts/Default/reponse.html.twig');
    }









}
