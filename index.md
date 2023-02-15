---
title: Home
layout: default
description: 
---
<style>
.home-container { 
    width: 600px; 
    height: 300px;
    right: 0px;

    display: grid;
    grid-template-columns: repeat(4, 1fr); 
    grid-template-rows: repeat(4, 1fr);
    gap: 0px 0px;
}

.home-gamebutton {
    width: 150px;
    height: 150px;
    border-radius: 0px;
    background-color: #000000;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;

    grid-column: span 1;
    grid-row: span 1;

    transition: all 0s; 
}

.home-gamebutton:hover {
    background-color: #373737;
}
</style>

Welcome to Cooler Math Games! Click on a game below to play!
<div class="home-container">
    <div class="home-gamebutton" id="minesweeper" onclick="window.location='minesweeper'"> Minesweeper</div>
    <div class="home-gamebutton" id="tictactoe" onclick="window.location='tictactoe'"> Tic Tac Toe</div>
    <div class="home-gamebutton" id="pong" onclick="window.location='pong'">Pong</div>
    <div class="home-gamebutton" id="fablefrontier" onclick="window.location='minesweeper'">Fable Frontier</div>