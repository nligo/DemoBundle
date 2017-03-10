<?php

namespace Nligo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NligoDemoBundle:Default:index.html.twig');
    }
}
