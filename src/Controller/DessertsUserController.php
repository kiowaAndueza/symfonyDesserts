<?php

namespace App\Controller;

use App\Entity\DessertUser;
use App\Repository\DessertListUserRepository;
use App\Repository\DessertUserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DessertsUserController extends AbstractController
{
    /**
     * @Route("/dessertsUser", name="dessertUser_create", methods={"POST"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function create(Request $request, DessertListUserRepository $dessertListUserRepository, ValidatorInterface $validator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dessertUser = new DessertUser();
        $dessertUser->setName($request->request->get('name'));
        $dessertUser->setIdUser($this->getUser());

        $list = $dessertListUserRepository->find($request->request->get('idList'));

        $dessertUser->setIdDessertListUser($list);
        $dessertUser->setPrice($request->request->get('price'));
        $dessertUser->setDescription($request->request->get('description'));
        $dessertUser->setImg($request->request->get('img'));
        $dessertUser->setQuantity($request->request->get('quantity'));

        $errors = $validator->validate($dessertUser, null, ['newDessertUser']);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
    
            return new Response($errorsString . Response::$statusTexts);
        }

        $entityManager->persist($dessertUser);
        $entityManager->flush();
        return $this->json('Created new dessertUser successfully with id ' . $dessertUser->getId());

    }


    /**
     * @Route("/remove/{id}", name="dessertUser_delete", methods={"DELETE"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dessertUser = $entityManager->getRepository(DessertUser::class)->find($id);
        if (!$dessertUser) {
            return $this->json('No project found for id' . $id, 404);
        }
        $entityManager->remove($dessertUser);
        $entityManager->flush();

        return $this->json('Deleted a project successfully with id ' . $id);
    }


    /**
     * @Route("/dessertsUser/{idList}", name="dessertsUser_get", methods={"GET"})
     * 
     * * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function list(Request $request, DessertUserRepository $dessertUserRepository): JsonResponse
    {
        $idList = $request->get('idList');
        $dessertsUser = $dessertUserRepository->findByIdDessertListUser($idList);
        $dessertsAsArray = [];
        foreach ($dessertsUser as $dessertUser) {
            $dessertsAsArray[] = [
                'id' => $dessertUser->getId(),
                'name' => $dessertUser->getName(),
                'price' => $dessertUser->getPrice(),
                'description' => $dessertUser->getDescription(),
                'img' => $dessertUser->getImg(),
                'quantity' => $dessertUser->getQuantity()
            ];
        }
        $response = new JsonResponse();
        $response->setData([
            'data' => $dessertsAsArray
        ]);
        return $response;
    }
    


}