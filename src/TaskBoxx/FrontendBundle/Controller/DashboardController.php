<?php

namespace TaskBoxx\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="taskboxx_dashboard_index")
     * @Template("TaskBoxxFrontendBundle:Dashboard:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
