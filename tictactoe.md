---
title: Tic Tac Toe
layout: default
description: 
---

<style>
    table {
      border-collapse: collapse;
    }
    
    td {
      width: 50px;
      height: 50px;
      text-align: center;
      vertical-align: middle;
      border: 1px solid black;
      font-size: 36px;
    }
</style>
    
<table id="board">
        <tr>
          <td id="cell-0"></td>
          <td id="cell-1"></td>
          <td id="cell-2"></td>
        </tr>
        <tr>
          <td id="cell-3"></td>
          <td id="cell-4"></td>
          <td id="cell-5"></td>
        </tr>
        <tr>
          <td id="cell-6"></td>
          <td id="cell-7"></td>
          <td id="cell-8"></td>
        </tr>
</table>

<button onclick="location.reload()">Reload</button>

<script>
    
    Xscore = 0 
    Oscore = 0
        var cells = document.querySelectorAll("td");
    var currentPlayer = "X";
    
    for (var i = 0; i < cells.length; i++) {
      cells[i].addEventListener("click", function() {
        if (this.textContent === "") {
          this.textContent = currentPlayer;
          checkForWinner();
          switchPlayer();
        }
      });
    }
    
    function switchPlayer() {
      if (currentPlayer === "X") {
        currentPlayer = "O";
      } else {
        currentPlayer = "X";
      }
    }
    
    function checkForWinner() {
      var combinations = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
      ];
    
      for (var i = 0; i < combinations.length; i++) {
        var combination = combinations[i];
        var cell1 = cells[combination[0]];
        var cell2 = cells[combination[1]];
        var cell3 = cells[combination[2]];
        if (cell1.textContent === currentPlayer && cell2.textContent === currentPlayer && cell3.textContent === currentPlayer) {
          if (currentPlayer == "X") {
            Xscore+=1
            alert(currentPlayer + " wins! (" + Xscore + " wins)");
          } else {
            Oscore+=1
            alert(currentPlayer + " wins! (" + Oscore + " wins)");
          }
          return;
        }
      }
    
      var draw = true;
      for (var i = 0; i < cells.length; i++) {
        if (cells[i].textContent === "") {
          draw = false;
          break;
        }
      }
    
      if (draw) {
        alert("Draw!");
      }
    }
</script>