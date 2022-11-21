<?php

namespace App\Controller;

use App\Repository\DessertRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Dessert;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;

class LibraryController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/desserts", name="desserts_get", methods={"GET"})
     */
    public function list(DessertRepository $dessertRepository): JsonResponse
    {
        $desserts = $dessertRepository->findAll();
        $dessertsAsArray = [];
        foreach ($desserts as $dessert) {
            $dessertsAsArray[] = [
                'id' => $dessert->getId(),
                'name' => $dessert->getName(),
                'price' => $dessert->getPrice(),
                'description' => $dessert->getDescription(),
                'img' => $dessert->getImg(),
                'quantity' => $dessert->getQuantity()
            ];
        }
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => $dessertsAsArray
        ]);
        return $response;
    }

    /**
     * @Route("/desserts/{id}", name="dessert_delete", methods={"DELETE"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dessert = $entityManager->getRepository(Dessert::class)->find($id);
        if (!$dessert) {
            return $this->json('No project found for id' . $id, 404);
        }
        $entityManager->remove($dessert);
        $entityManager->flush();

        return $this->json('Deleted a project successfully with id ' . $id);
    }

    /**
     * @Route("/dessert", name="create_dessert", methods={"POST"})
     * 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * 
     */
    public function create(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
  
        $dessert = new Dessert();
        $dessert->setName($request->request->get('name'));
        $dessert->setPrice($request->request->get('price'));
        $dessert->setDescription($request->request->get('description'));
        $dessert->setImg($request->request->get('img'));
        $dessert->setQuantity($request->request->get('quantity'));
  
        $entityManager->persist($dessert);
        $entityManager->flush();
  
        return $this->json('Created new project successfully with id ' . $dessert->getId());
    }
}
