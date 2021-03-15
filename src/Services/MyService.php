<?php

namespace App\Services;
use App\Entity\Joueur;
use Symfony\Component\HttpClient\HttpClient;

class MyService
{
    public function getAllGames()
    {
            $client = HttpClient::create();
            $games = $client->request('GET', 'https://www.balldontlie.io/api/v1/games');
            $contentTypeGame = $games->getHeaders()['content-type'][0];
            $contentsGame = $games->getContent();
            $contentsGame = $games->toArray();
            $allGames = $contentsGame['data'];

            return $allGames;
    }

    public function getAllPlayers()
    {
            $client = HttpClient::create();
            $players = $client->request('GET', 'https://www.balldontlie.io/api/v1/players');
            $contentTypePlayers = $players->getHeaders()['content-type'][0];
            $contentsPlayers = $players->getContent();
            $contentsPlayers = $players->toArray();
            
            return $contentsPlayers;
    }

    public function getJoueurById($id){
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.balldontlie.io/api/v1/players/'.$id);
        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $contents = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $contents = $response->toArray();
        
        $joueur = new Joueur($contents['first_name'], $contents['last_name'],$contents['team']['name']);
        return $joueur;              
    }

    

    public function getNbGameJoueur($joueur , $allGames){
           
        $cpt = 0;
        foreach( $allGames as $g ){
            if($g['home_team']['name'] == $joueur->getTeam() || $g['visitor_team']['name']== $joueur->getTeam()){
                $cpt++;
            }
        }
        $joueur->setNbgame($cpt);
        return $joueur;
    }

}
