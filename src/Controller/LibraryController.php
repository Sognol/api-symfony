<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library/list", name="library_list")
     */
    public function list(Request $request, LoggerInterface $logger) {

        $logger->info('List action called');
        $response = new JsonResponse();
        $response->setData([
             [
                 'id' => 1,
                 'title' => 'Batman'
             ],
             [
                 'id' => 2,
                 'title' => 'El señor de los anillos'
             ],
             [
                 'id' => 3,
                 'title' => 'Los Vengadores'
             ]
        ]);
        return $response;
    }
}
