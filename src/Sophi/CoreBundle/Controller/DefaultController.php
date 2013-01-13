<?php

namespace Sophi\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SophiCoreBundle:Default:index.html.twig', array());
    }
}
