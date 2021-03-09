<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\AgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{


    /**
     * @Route(
     * name="get_agence",
     * path="api/users/{id}/agence",
     * methods={"GET"},
     * defaults={
     *          "__controller"="App\Controller\UserController::get_agence",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="get_agence"
     *     }  
     * )
     * 
     */


    public function get_agence(Request $request,AgenceRepository $repoagence, $id){
        // dd("VOila ça marche legui");
        //  dd($id);
         $groupe= $repoagence->findByAgent($id);
        //  dd($groupe[0]);
        return $this->json($groupe,Response::HTTP_OK);

     }

    


    // private$userhandler;
    // public function __construct(User $userhandler)
    // {   
    //     $this->userhandler= $userhandler;        
    // }

    // public function __invoke(User $data)  
    // {
    //     // $this->userhandler->handle($data);
    //     dd($data);

    //     // return $data;
    // }
    // /**
    //  * @Route("/user", name="user")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('user/index.html.twig', [
    //         'controller_name' => 'UserController',
    //     ]);
    // }
}
