<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;

class RegistrationController extends AbstractController
{

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/register", name="app_register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, UserRepository $userRepo): Response
    {
        $user = $userRepo->findOneBy(["email"=> $request->request->get("email")]);
        if($user) {
            $serializer = $this->serializer->serialize("Email exist", "json");
            return new Response($serializer, 400);  
        }

        $data = $request->request->all();
        $user = new User();
        $user->setEmail($data["email"]);
        $user->setRoles(["user"]);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                    $user,
                    $data["password"]
                )
            );

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        $serializer = $this->serializer->serialize("User created !", "json");

        return new JsonResponse("User created !", 200);
    }
}
