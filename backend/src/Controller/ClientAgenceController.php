<?php

namespace App\Controller;

use App\Repository\ClientAgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientAgenceController extends AbstractController
{


     /**
     * @Route(
     * name="get_client_by_agence",
     * path="api/client-agence/user/{id}",
     * methods={"GET"},
     * defaults={
     *          "__controller"="App\Controller\ClientAgenceController::get_clients",
     *          "__api_resource_class"=ClientAgence::class,
     *          "__api_collection_operation_name"="get_client_by_agence",
     *     }  
     * )
     * 
     */

    public function get_clients(Request $request, ClientAgenceRepository $repo, $id)
    {
        // dd("Voila ça marche legui");
        //  dd($id);
        $groupe = $repo->findByUser($id);
        //  dd($groupe[0]);
        return $this->json($groupe, Response::HTTP_OK);
    }


    // #[Route('/client/agence', name: 'client_agence')]
    // public function index(): Response
    // {
    //     return $this->render('client_agence/index.html.twig', [
    //         'controller_name' => 'ClientAgenceController',
    //     ]);
    // }
}
