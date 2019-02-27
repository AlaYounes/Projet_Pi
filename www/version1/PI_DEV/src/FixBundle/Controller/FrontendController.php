<?php

namespace FixBundle\Controller;
use DateTime;
use FixBundle\Entity\Applay;
use FixBundle\Entity\Offre;
use FixBundle\Entity\Service;
use FixBundle\Form\Applaytype;
use FixBundle\Form\OffreType;
use FixBundle\Form\ServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('FixBundle:Frontend:index.html.twig');
    }

        public function AddJobAction()
        {
            return $this->render('@Fix/Frontend/Default/PostAjob.html.twig');
        }
        public function DashboardAction()
        {
            return $this->render('@Fix/Frontend/Default/Dashboard.html.twig');
        }
        public function ProfileAction()
        {
            return $this->render('@Fix/Frontend/Default/Profile.html.twig');
        }
        public function EditProfileAction()
        {
            return $this->render('@Fix/Frontend/Default/EditProfile.html.twig');
        }
        public function LoginAction()
        {
            return $this->render('@Fix/Frontend/Default/Login.html.twig');
        }
        public function RegisterAction()
        {
            return $this->render('@Fix/Frontend/Default/Register.html.twig');
        }
        public function HomeAction()
        {
            return $this->render('@Fix/Frontend/Default/Home.html.twig');
        }
        public function HireAction()
        {
            return $this->render('@Fix/Frontend/Default/Hire.html.twig');
        }
        public function WorkAction()
        {
            return $this->render('@Fix/Frontend/Default/Work.html.twig');
        }
        public function PricingAction()
        {
            return $this->render('@Fix/Frontend/Default/Pricing.html.twig');
        }
        public function HowAction()
        {
            return $this->render('@Fix/Frontend/Default/How.html.twig');
        }
        public function ContractAction()
        {
            return $this->render('@Fix/Frontend/Default/contract.html.twig');
        }
        public function JobPastedAction()
        {
            return $this->render('@Fix/Frontend/Default/jobpasted.html.twig');
        }
        public function YourPorposalsAction()
        {
            return $this->render('@Fix/Frontend/Default/your-proposals.html.twig');
        }
        public function OtherPorposalsAction()
        {
            return $this->render('@Fix/Frontend/Default/other-proposals.html.twig');
        }
        public function OffersAction()
        {
            return $this->render('@Fix/Frontend/Default/offers.html.twig');
        }
        public function CompanyListAction()
        {
            return $this->render('@Fix/Frontend/Default/companyList.html.twig');
        }
        public function AddCompanyAction()
        {
            return $this->render('@Fix/Frontend/Default/add_company.html.twig');
        }
        public function MessageAction()
        {
            return $this->render('@Fix/Frontend/Default/messages.html.twig');
        }
        public function DepositsAction()
        {
            return $this->render('@Fix/Frontend/Default/deposits.html.twig');
        }
        public function WithdrawalsAction()
        {
            return $this->render('@Fix/Frontend/Default/withdrawals.html.twig');
        }
        public function PayementMethodAction()
        {
            return $this->render('@Fix/Frontend/Default/payment-method.html.twig');
        }
        public function NumbershipAction()
        {
            return $this->render('@Fix/Frontend/Default/nembership.html.twig');
        }
        public function Featured_Job_ListAction()
        {
            return $this->render('@Fix/Frontend/Default/featured_job_list.html.twig');
        }
        public function Featured_A_JobAction()
        {
            return $this->render('@Fix/Frontend/Default/featured-a-job.html.twig');
        }
        public function Featured_ProfilesAction()
        {
            return $this->render('@Fix/Frontend/Default/featured-profiles.html.twig');
        }
        public function Featured_Your_ProfileAction()
        {
            return $this->render('@Fix/Frontend/Default/featured-your-profile.html.twig');
        }
        public function Profile_ImageAction()
        {
            return $this->render('@Fix/Frontend/Default/profile_image.html.twig');
        }
        public function PasswordAction()
        {
            return $this->render('@Fix/Frontend/Default/password.html.twig');
        }
        public function Featured_CompaniesAction()
        {
            return $this->render('@Fix/Frontend/Default/featured-companies.html.twig');
        }
        public function Featured_Your_CompanyAction()
        {
            return $this->render('@Fix/Frontend/Default/featured-your-company.html.twig');
        }
        public function CompanyAction()
        {
            return $this->render('@Fix/Frontend/Default/comapny.html.twig');
        }
        public function WorkroomAction()
        {
            return $this->render('@Fix/Frontend/Default/workroom.html.twig');
        }
        public function JobpostAction()
        {
            return $this->render('@Fix/Frontend/Default/Jobpost.html.twig');
        }
        public function ViewofferAction()
        {
            return $this->render('@Fix/Frontend/Default/Viewoffer.html.twig');
        }
        public function ViewporposalAction()
        {
            return $this->render('@Fix/Frontend/Default/Viewproposal.html.twig');
        }
        public function MilestoneAction()
        {
            return $this->render('@Fix/Frontend/Default/milestone.html.twig');
        }
        public function TaskAction()
        {
            return $this->render('@Fix/Frontend/Default/Task.html.twig');
        }
        public function TimesheetAction()
        {
            return $this->render('@Fix/Frontend/Default/Timesheet.html.twig');
        }
        public function FileAction()
        {
            return $this->render('@Fix/Frontend/Default/File.html.twig');
        }
        public function LinkAction()
        {
            return $this->render('@Fix/Frontend/Default/Link.html.twig');
        }
        public function BugAction()
        {
            return $this->render('@Fix/Frontend/Default/Bug.html.twig');
        }
        public function PayementAction()
        {
            return $this->render('@Fix/Frontend/Default/Payement.html.twig');
        }
        public function RateAction()
        {
            return $this->render('@Fix/Frontend/Default/Rate.html.twig');
        }


    public function Ajout_ServiceAction( Request $request)
    {
        $service = new Service();

        $form = $this->createForm(ServiceType::class, $service);
        $form = $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($service);
            $em->flush();
            return $this->redirectToRoute("frontend_homepage");
        }
        return $this->render('@Fix/Crud/Ajout_Service.html.twig' , array('form' => $form->createView()) );
    }
    public function Ajout_OffreAction( Request $request)
    {
        $offre = new Offre();

        $form = $this->createForm(OffreType::class, $offre);
        $form = $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute("frontend_homepage");
        }
        return $this->render('@Fix/Crud/Ajout_Offre.html.twig' , array('form' => $form->createView()) );
    }


    public function Suprimer_OffreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre= $em->getRepository(Offre::class)->find($id);

        $em->remove($offre);
        $em->flush();

        return $this->redirectToRoute("frontend_homepage");
    }
    public function Suprimer_ServiceAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $service= $em->getRepository(Service::class)->find($id);

        $em->remove($service);
        $em->flush();

        return $this->redirectToRoute("frontend_homepage");
    }

    public function modifier_ServiceAction($id ,  Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $service = $em->getRepository(Service::class)->find($id);

        $form = $this->createForm(ServiceType::class, $service);
        $form->setData( $service);
        $form = $form->handleRequest($request);

        if ($form->isValid()){
            $em->persist($service);
            $em->flush();
            return $this->redirectToRoute("frontend_homepage");
        }
        return $this->render('@Fix/Crud/Modifier_Service.html.twig' , array('form' => $form->createView()) );

    }
    public function Modifier_OffreAction($id ,  Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offre = $em->getRepository(Offre::class)->find($id);

        $form = $this->createForm(OffreType::class, $offre);
        $form->setData( $offre);
        $form = $form->handleRequest($request);

        if ($form->isValid()){
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute("frontend_homepage");
        }
        return $this->render('@Fix/Crud/Modifier_Offre.html.twig' , array('form' => $form->createView()) );

    }

    public function Afficher_ServiceAction()
    {
        $service = $this->getDoctrine()->getRepository(Service::class)->findAll();
        return $this->render('@Fix/Crud/Afficher_Service.html.twig' , array('a'=>$service ) );
    }
    public function Afficher_OffreAction()
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        return $this->render('@Fix/Crud/Afficher_Offre.html.twig' , array('a'=>$offre ) );
    }



    public function eventAction()
    {
        $em = $this->getDoctrine()->getRepository(Applay::class);
        $events = $em->findAll();
        return $this->render('@Fix/Crud/Applays.html.twig', array(
            'events'=>$events  // ...
        ));
    }
    public function ApplayAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $applay = new Applay();
        $date = new DateTime($request->get('date'));
        if ($request->isMethod('Post')) {


            $applay->setNom($request->get('name'));
            $applay->setPrenom($request->get('prenom'));
            $applay->setMail($request->get('mail'));
            $applay->setDate($date);
            $applay->setLieu($request->get('lieu'));
            $applay->setEtat($request->get('etat'));
            $applay->setDescription($request->get('description'));
            $applay->setEtat(0);



            $em->persist($applay);
            $em->flush();
        }

        return $this->render('@Fix/Crud/Applay.html.twig');

    }
    public function ApplaybackAction(Request $request)
    {



        $id= $request->get('btn-id');
        if ($request->isMethod('Post')) {

            $this->getDoctrine()->getRepository(Applay::class)->updateEtat($id);

        }
        $em = $this->getDoctrine()->getRepository(Applay::class);
        $applay = $em->findAll();
        return $this->render('@Fix/Crud/backapplay.twig', array(
            'applays'=>$applay  // ...
            // ...
        ));

    }
    public function AppliAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $applay = new Applay();
        $date = new DateTime($request->get('date'));
        if ($request->isMethod('Post')) {


            $applay->setNom($request->get('name'));
            $applay->setPrenom($request->get('prenom'));
            $applay->setMail($request->get('mail'));
            $applay->setDate($date);
            $applay->setLieu($request->get('lieu'));
            $applay->setEtat($request->get('etat'));
            $applay->setDescription($request->get('description'));
            $applay->setEtat(0);



            $em->persist($applay);
            $em->flush();
        }

        return $this->render('@Fix/Crud/Applay.html.twig');

    }


    public function AddapplayAction( Request $request)
    {
        $applay = new Applay();

        $form = $this->createForm(Applaytype::class, $applay);
        $form = $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($applay);
            $em->flush();
            return $this->redirectToRoute("frontend_homepage");
        }
        return $this->render('@Fix/Crud/Applay.html.twig') ;
    }


}
