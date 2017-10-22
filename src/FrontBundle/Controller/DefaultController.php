<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="users")
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository('FrontBundle:Users')->findAllUsersAsArray();
        dump($users);
        return $this->render('FrontBundle:Default:index.html.twig');
    }
}
