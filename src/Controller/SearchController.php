<?php

namespace App\Controller;
use App\Services\MyService;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\History;
use App\Entity\Joueur;
use App\Repository\HistoryRepository;
use App\Repository\JoueurRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request, MyService $myService ): Response
    {
        if($request->isMethod('post')){  
            
            $nbPlayers= count($request->request->All());
            $allGames = $myService->getAllGames();
            $joueurs = []; 
            $history = new History();
            $manager = $this->getDoctrine()->getManager();
            for($i=0; $i < $nbPlayers; $i++){
                $id = $request->request->get('joueur'.$i);
                $getJoueur = $myService->getJoueurById($id);
               
                $joueur = new Joueur($getJoueur->getFirstName(),$getJoueur->getLastName(), $getJoueur->getTeam() );
                $joueur = $myService->getNbGameJoueur($joueur, $allGames);
                $manager->persist($joueur);
                $history->addJoueur($joueur);
                
            }
            $history->setDateHistory(new \DateTime('now'));
            $manager->persist($history);
            $manager->flush();
            
            $AllHistrory = $manager->getRepository(History::class)->findAll();
            return $this->render('search/history.html.twig', [
                'contents' => $AllHistrory,
            ]);
        }else{
        
        $contents = $myService->getAllPlayers();
        //dump($contents);
        //die();
        return $this->render('search/index.html.twig', [
            'contents' => $contents,
        ]);
        }
        
    }

    /**
     * @Route("/history", name="history")
     */
    public function history(HistoryRepository $repo): Response
    {
            $AllHistrory = $repo->findAll();            
            
            return $this->render('search/history.html.twig', [
                'contents' => $AllHistrory,
            ]);
        
    }

    
    
}
