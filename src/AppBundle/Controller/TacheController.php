<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
class TacheController extends Controller
{
    /**
     * @Route("/accueila", name="tache_list")
     */
    public function listAction(Request $request)
    {
      $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

	    $dataFromBase="{\"1\":\"55223\",\"2\":\"2\"}";
		$arrayData=json_decode($dataFromBase, true);
		dump($arrayData);//affichage simple avec symfony
		var_dump($arrayData); //affichage avec php
		dump($_SERVER['SERVER_NAME']);
		
		$response = new Response();
      
        return new Response($dataFromBase);
    }
    
 
}
