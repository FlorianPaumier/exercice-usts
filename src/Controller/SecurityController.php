<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\Serializer\SerializerInterface;

class SecurityController extends AbstractController
{

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/login", name="login", methods={"POST"})
     */

    public function login(UserPasswordEncoderInterface $passwordEncoder, Request $request, UserRepository $userRepo)
    {

        $user = $userRepo->findOneBy(["email"=> $request->request->get("email")]);

        if(!$user)
            return new JsonResponse("User not exist", 400);

        if($request->request->get("email") && empty($request->request->get("password")))
            return new JsonResponse("Password is empty", 400);

        if(!$passwordEncoder->isPasswordValid($user, $request->request->get("password")))
            return new JsonResponse("Password is false", 400);

        
        return new JsonResponse(["email" => $user->getEmail()], 200);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
