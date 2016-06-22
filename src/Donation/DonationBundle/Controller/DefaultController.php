<?php

namespace Donation\DonationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DonationBundle:Default:index.html.twig');
    }
}
