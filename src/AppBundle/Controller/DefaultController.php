<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{

    public function __construct()
    {
    }
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('fabien/home.html.twig');
        //return $this->render('gcode/homepage.html.twig');
    }

    /**
     * @Route("/contact", name="contactPage")
     */
    public function contact(Request $request)
    {
        return $this->render('gcode/contactPage.html.twig');
    }

    /**
     * @Route("/accueil", name="accueilpage")
     */
    public function accueil(Request $request)
    {
        return $this->render('gcode/accueil.html.twig');
    }

    /**
     * @Route("/sendmail", name="sendmail")
     */
    public function mailAction(Request $request)
    {
        $data=$request->request->all();
        $name=$data['name'];
        $sender=$data['email'];
        $mailer = $this->get('mailer');
        if($sender!=""){
        $message = (new \Swift_Message('GCODE MAIL'))
            ->setFrom('etech.berthon@gmail.com')
            ->setTo($sender)
        ;

        $logo = $message->embed(\Swift_Image::fromPath('assets/logos/logo.png'));
        $message->setBody(
            $this->renderView(
                'Emails/registration.html.twig',
                ['name' => $name, 'logo'=>$logo]
            ),
            'text/html'
        );
        
        $mailer->send($message);
        }

        return $this->render('gcode/accueil.html.twig');
    }
}
