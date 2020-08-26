<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/dns/deploy", name="deploy")
     */
    public function deploy()
    {
        return new JsonResponse([
            'message'  => 'task accepted'],
            Response::HTTP_ACCEPTED);
    }

    /**
     * @Route("/dns/deploy/tasks", name="status")
     */
    public function status()
    {
        return new JsonResponse([
            'taskStatus'  => 'failed'],
//            'taskStatus'  => 'pending'],
//            'taskStatus'  => 'done'],
//            'taskStatus'  => 'running'],
            Response::HTTP_OK);
//            Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
