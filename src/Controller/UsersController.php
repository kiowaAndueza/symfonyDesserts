<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{

    /**
     * @Route("/register", name="user_registration", methods={"POST"})
     */

    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setEmail($request->request->get('email'));
        $plaintextPassword = $request->request->get('password');
        $encode = $passwordEncoder->encodePassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($encode);
        $user->setRoles(['ROLE_USER']);
        $em->persist($user);
        $em->flush();
        return $this->json('Created new project successfully with id ' . $user->getId());
    }


}
