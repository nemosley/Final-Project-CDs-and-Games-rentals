<?php
/**
 * Author: Benjamin Egger-Torke
 * Date: 11/20/25
 * File: games.class.php
 * Description:
 **/

class games {
    private GameModel $gamemodel;

    public function __construct() {
        $this->gamemodel = new GameModel();
    }

    //retrieve and create view of all games in array
    public function index() {
        $itemArray= $this->gamemodel->listAll();
        $view = new GamesIndex();
        $view->display($itemArray);
    }

    //get details for a specific game
    public function detail($gameId) {
        $game= $this->gamemodel->GameDetails($gameId);
        $view= new GameDetail();
        $view->display($game);
    }

}