<?php

namespace CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('CoreBundle:default:index.html.twig');
    }

    /**
     * @Route("/contact", name="cantact")
     */
    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('info', 'La page de contact n\'est pas encore disponible, merci de revenir plus tard.');
        return $this->redirectToRoute('core_homepage');
    }
}