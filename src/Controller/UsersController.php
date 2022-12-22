<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\DessertListUserRepository;
use App\Repository\DessertUserRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class UsersController extends AbstractController
{

    /**
     * @Route("/register", name="user_registration")
     */

    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder, ValidatorInterface $validator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();

        $plaintextPassword = $request->request->get('password');
        $encode = $passwordEncoder->encodePassword(
            $user,
            $plaintextPassword
        );
        $tokenRandom = bin2hex(random_bytes(60));

        $user->setEmail($request->request->get('email'));
        $user->setPassword($encode);
        $user->setRoles(['ROLE_USER']);
        $user->setApiToken($tokenRandom);

        $errors = $validator->validate($user, null, ['registration']);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
    
            return new Response($errorsString . Response::$statusTexts);
        }

        $em->persist($user);
        $em->flush();
        return $this->json('Created new project successfully with id ' . $user->getId());
    }


    
    /**
     * @Route("/information", name="information", methods={"GET"})
     * 
     * * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function information(Request $request, DessertUserRepository $dessertUserRepository, DessertListUserRepository $dessertListUserRepository, UserRepository $userRepository): JsonResponse
    {
        $token = $request->headers->get('X-AUTH-TOKEN');
        $user = $userRepository->findByApiToken($token);
        $lists= $dessertListUserRepository->findByIdUser($user); 
        $dessertsUser = $dessertUserRepository->findByIdUser($this->getUser());
        
        $email = $this->getUser()->getUsername();
        $nList = count($lists);
        $nDessert = count($dessertsUser);
        $listsAsArray = [];

        foreach($lists as $list){
            $listsAsArray[] = [
                'name' => $list->getName()
            ];
        }

        $informationArray=[];
        $informationArray[] = [
            'email' => $email,
            'nlist' => $nList,
            'ndessert' => $nDessert,
            'list' => $listsAsArray
        ];

        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => $informationArray
        ]);
        return $response;
    }
}
