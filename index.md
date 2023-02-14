---
title: minesweeper
layout: default
description: 
---
<style>
.home-container { 
    width: 1000px; 
    height: 500px;
    right: 50px;

    display: grid;
    grid-template-columns: repeat(4, 1fr); 
    grid-template-rows: repeat(4, 1fr);
    gap: 1px 1px;
}

.home-gamebutton {
    width: 40px;
    height: 40px;
    border-radius: 0px;
    background-color: #90EE90;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;

    grid-column: span 1;
    grid-row: span 1;

    transition: all 0s; 
}
</style>

Welcome to Cooler Math Games! Click on a game below to play!
<div class="home-container">
    <div class="home-gamebutton" id="minesweeper"> Minesweeper</div>
    <div class="home-gamebutton" id="tictactoe"> Tic Tac Toe</div>
    <div class="home-gamebutton" id="pong">Pong</div>
    <div class="home-gamebutton" id="fablefrontier">Fable Frontier</div>