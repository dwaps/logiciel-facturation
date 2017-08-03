<?php

namespace FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="facture_home")
     */
    public function indexAction()
    {
        return $this->render('components/body-component.html.twig');
    }
}
