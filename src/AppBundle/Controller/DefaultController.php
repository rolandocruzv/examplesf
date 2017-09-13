<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
           
        ]);
    }
	
	/**
     * @Route("/why-us", name="why-us")
     */
    public function whyusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('why-us/why-us.html.twig', [
            
        ]);
    }
	
	/**
     * @Route("/contact-us", name="contact-us")
     */
    public function contactusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact-us/contact-us.html.twig', [
           
        ]);
    }
	
	/**
     * @Route("/get-started", name="get-started")
     */
    public function getstartedAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('get-started/getstarted.html.twig', [
            
        ]);
    }
	
	/**
     * @Route("/power-ups", name="power-ups")
     */
    public function powerupsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('power-ups/power-ups.html.twig', [
            
        ]);
    }
	
	/**
     * @Route("/warm-leads", name="warm-leads")
     */
    public function warmleadsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('warm-leads/warm-leads.html.twig', [
            
        ]);
    }
	
	
}
