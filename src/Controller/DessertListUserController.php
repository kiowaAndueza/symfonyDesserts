<?php

namespace App\Controller;

use App\Entity\DessertListUser;
use App\Repository\UserRepository;
use App\Repository\DessertListUserRepository;
use App\Repository\DessertUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DessertListUserController extends AbstractController
{
    /**
     * @Route("/list", name="list_create", methods={"POST"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function create(Request $request, ValidatorInterface $validator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $list = new DessertListUser();
        $list->setName($request->request->get('name'));
        $list->setIdUser($this->getUser());

        $errors = $validator->validate($list);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
    
            return new Response($errorsString . Response::$statusTexts);
        }

        $entityManager->persist($list);
        $entityManager->flush();
        return $this->json('Created new list successfully with id ' . $list->getId());
    }


    /**
     * @Route("/lists/{id}", name="list_delete", methods={"DELETE"})
     * 
     *  @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function delete(int $id, DessertUserRepository $dessertUserRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $list = $entityManager->getRepository(DessertListUser::class)->find($id);
        $dessertsUser = $dessertUserRepository->findByIdDessertListUser($list);

        if (!$list) {
            return $this->json('No project found for id' . $id, 404);
        }

        if($dessertsUser){
            foreach($dessertsUser as $dessert){
                $dessertUserRepository->remove($dessert);
            }
        }

        $entityManager->remove($list);
        $entityManager->flush();

        return $this->json('Deleted a project successfully with id ' . $id);
    }


    /**
     * @Route("/lists", name="list_get", methods={"GET"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function getDessertList(Request $request, DessertListUserRepository $dessertListUserRepository, UserRepository $userRepository): JsonResponse
    {
        $token = $request->headers->get('X-AUTH-TOKEN');
        $user = $userRepository->findByApiToken($token);
        $lists= $dessertListUserRepository->findByIdUser($user); 

        $listAsArray = [];
        foreach ($lists as $list) {
            $listAsArray[] = [
                'id' => $list->getId(),
                'name' => $list->getName(),
            ];
        }
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => $listAsArray
        ]);
        return $response;
    }

}