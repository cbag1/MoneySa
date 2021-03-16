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
     * path="api/transaction/code/{code}",
     * methods={"GET"},
     * defaults={
     *          "__controller"="App\Controller\TransactionController::get_transaction",
     *          "__api_resource_class"=Transaction::class,
     *          "__api_collection_operation_name"="get_transaction"
     *     }  
     * )
     * 
     */

    public function get_transaction(Request $request, TransactionRepository $repotransaction, $code)
    {
        // dd("Voila ça marche legui");
        //  dd($id);
        $groupe = $repotransaction->findByCode($code);
        //  dd($groupe[0]);
        return $this->json($groupe, Response::HTTP_OK);
    }

    /**
     * @Route(
     * name="get_transaction_by_user",
     * path="api/transaction/agent/{id}",
     * methods={"GET"},
     * defaults={
     *          "__controller"="App\Controller\TransactionController::get_transaction_by_user",
     *          "__api_resource_class"=Transaction::class,
     *          "__api_collection_operation_name"="get_transaction_by_user"
     *     }  
     * )
     * 
     */

    public function get_transaction_by_user(Request $request, TransactionRepository $repotransaction, $id)
    {
        // dd("Voila ça marche legui");
        //  dd($id);
        $groupe1 = $repotransaction->findBy(['agentDepot' => $id]);
        $groupe2 = $repotransaction->findBy(['agentRetrait' => $id]);
        $groupe = array_merge($groupe1, $groupe2);
        //  dd($groupe);
        return $this->json($groupe, Response::HTTP_OK);
    }


   
}
