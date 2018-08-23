<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */
    public function accountAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/account.html.twig');
    }

    /**
     * @Route("/missing", name="missing")
     */
    public function missingAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/missing.html.twig');
    }

    /**
     * @Route("/present", name="present")
     */
    public function presentAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/present.html.twig');
    }

    /**
     * @Route("/timetable", name="timetable")
     */
    public function timetableAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/timetable.html.twig');
    }
}