<?php

namespace App\Controller;

use App\Repository\TransactionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionController extends AbstractController
{


    /**
     * @Route(
     * name="get_transaction",
     * path="api/transaction/{code}",
     * methods={"GET"},
     * defaults={
     *          "__controller"="App\Controller\TransactionController::get_transaction",
     *          "__api_resource_class"=Transaction::class,
     *          "__api_collection_operation_name"="get_transaction"
     *     }  
     * )
     * 
     */

    public function get_transaction(Request $request,TransactionRepository $repotransaction, $code){
        // dd("Voila ça marche legui");
        //  dd($id);
         $groupe= $repotransaction->findByCode($code);
        //  dd($groupe[0]);
        return $this->json($groupe,Response::HTTP_OK);
     }


    // #[Route('/transaction', name: 'transaction')]
    // public function index(): Response
    // {
    //     return $this->render('transaction/index.html.twig', [
    //         'controller_name' => 'TransactionController',
    //     ]);
    // }
}
