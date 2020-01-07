<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{

	public function __construct(){

	}
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
	 return $this->render('gcode/homepage.html.twig');
    }
    
    /**
     * @Route("/contact", name="contactPage")
     */
	public function contact(Request $request){
        return $this->render('gcode/contactPage.html.twig');
    }
}