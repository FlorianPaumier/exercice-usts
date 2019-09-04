<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmailController extends AbstractController
{
    /** 
     * @var \Swift_Mailer
     */

     private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mail = $mailer;
    }

    public function indexAction($email)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('testDevMail92@gmail.com')
            ->setTo($email)
            ->setBody("Article updated !");
        ;
        $this->mail->send($message);
    }
}
