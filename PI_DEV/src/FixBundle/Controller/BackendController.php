<?php

namespace FixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function AdminAction()
    {
        return $this->render('@Fix/Backend/Admin.html.twig');
    }

}
