<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{


    /**
     * @Route("/user", name="user_create", methods={"POST"})
     */
    public function create(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $dessert = new User();
        $dessert->setEmail($request->request->get('name'));
        $dessert->setPassword($request->request->get('price'));
        $entityManager->persist($dessert);
        $entityManager->flush();

        return $this->json('Created new project successfully with id ' . $dessert->getId());
    }


    /**
     * @Route("/register", name="user_registration")
     */

    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $plaintextPassword = $form->get('password')->getData();

            $encode = $passwordEncoder->encodePassword(
                $user,
                $plaintextPassword
            );

            $user->setPassword($encode);
            $user->setRoles(['ROLE_USER']);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_registration');
        }
        return $this->render('form/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
