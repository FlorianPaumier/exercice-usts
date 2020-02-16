<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\CountAuthenticator;
use App\Security\LoginCandidatAuthenticator;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\NamedAddress;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{

    /**
     * @Route("/login", name="user_login")
     */
    public function login(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $userRepo = $em->getRepository(User::class);
        $user = $userRepo->findOneBy(['email' => $request->get('username')]);
        $isPasswordOk = $passwordEncoder->isPasswordValid(
            $user,
            $request->get('password')
        );
        if ($isPasswordOk) {
            $status = 200;
        } else {
            $status= 404;
        }
        return $this->json($user, $status, [], [
            'groups' => ['main'],
        ]);
    }


    /**
     * @Route("/signup", name="user_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, CountAuthenticator $authenticator): Response
    {
        $user = new User();
        $user->setEmail($request->get('username'));
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $request->get('password')
            )
        );
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json($user, 201, [], [
            'groups' => ['main'],
        ]);
    }


    /**
     * @Route("/logout", name="user_logout")
     * @throws \Exception
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}