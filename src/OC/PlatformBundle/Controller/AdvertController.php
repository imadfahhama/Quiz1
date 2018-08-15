<?php

namespace OC\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{

    public function indexAction()
    {
        return $this->render('CoreBundle:default:index.html.twig');
    }
}