<?php


namespace App\Controller;
use App\Services\MyService;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


class ListeController extends AbstractController
{
    /**
     * @Route("/liste", name="liste")
     */
    public function liste( MyService $myService): Response
    {
        $contents = $myService->getAllPlayers();
        dump($contents);
        return $this->render('liste/index.html.twig', [
            'contents' => $contents,
        ]);
    }

    
}
