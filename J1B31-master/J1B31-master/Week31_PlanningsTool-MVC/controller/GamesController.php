<?php
require(ROOT . "model/GamesModel.php");

function index()
{
    $games = getAllGames();
    render('game/index', $games);
}

function gameviewer($id)
{
    $data = getGame($id);
    render('game/game', $data);
}
?>