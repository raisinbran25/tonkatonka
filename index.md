<style>
/* class to create the tournament's container; uses CSS grid dsiplay to partition off buttons */
.tournament-container { 
    width: 90vw; /* this width and height is specified for mobile devices by default */
    height: 80vh;
    margin: 0 auto;

    display: grid;
    grid-template-columns: repeat(5, 1fr); /* fr is a special unit; learn more here: https://css-tricks.com/introduction-fr-css-unit/  */
    grid-template-rows: 0.5fr repeat(4, 1fr);
    gap: 10px 10px;
}

/* 
    CSS allows programmers to use media queries to change the size of classes based on the size of the device.
    This allows us to make it so that our website looks good on both mobile and desktop. If the width of the
    device is big enough, then the tournament will take up more of the screen.
*/
@media (min-width: 600px) { 
    .tournament-container {
        width: 40vw;
        height: 80vh;
    }
}

/* styling for the tournament buttons themselves */
.tournament-reset {
    width: auto;
    height: auto;
    border-radius: 10px;
    background-color: #665B45;
    border: 3px solid black;
    font-size: auto;

    display: flex;
    justify-content: center;
    align-items: center;

    /* grid display allows programmer to specify how much of the grid an element should take up; these buttons will take up 1 row and 1 column */
    grid-column: span 5;
    grid-row: span 1;

    /* allows for smooth transition of properties and the "animation" effect to appear on hover */
    transition: all 0.5s; 
}

.tournament-empty {
    width: auto;
    height: 40px;
    border-radius: 10px;
    background-color: #282424;
    font-size: 0em;

    display: flex;
    justify-content: center;
    align-items: center;

    /* grid display allows programmer to specify how much of the grid an element should take up; these buttons will take up 1 row and 1 column */
    grid-column: span 1;
    grid-row: span 1;

    /* allows for smooth transition of properties and the "animation" effect to appear on hover */
    transition: all 0.5s; 
}

/* darkens the background color on hover to create a selecting effect */
.tournament-reset:hover {
    background-color: #373737;
}

/* styling for the top bar which shows the results of the tournament */
.tournament-output {
    /* note how the output instead takes up 4 columns and 1 row; essentially takes up the entirety of the first row */
    grid-column: span 1;
    grid-row: span 1;

    border-radius: 10px;
    background-color: #665B45;
    padding: 1em;
    font-size: auto;
    border: 5px solid black;

    display: flex;
    align-items: center;
}
</style>


<!-- HTML implementation of the tournament. 
    CSS sets 4 buttons (tournament-button) to a row
    All buttons have onclick JavaScript action
    All actions result in tournament-output.innerHTML change
-->
<div class="tournament-container">
    <!--result-->
    <div class="tournament-reset" onclick="randomize()">create new bracket</div>
    <!--row 1-->
    <div class="tournament-output" id="team1">team1</div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="team3">team3</div>
    <!--row 2-->
    <div class="tournament-output" id="team2">team2</div>
    <div class="tournament-output" id="win12">win12</div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="win34">win34</div>
    <div class="tournament-output" id="team4">team4</div>
    <!--row 3-->
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="win1234">win1234</div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <!--row 4-->
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="win5678">win5678</div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <!--row 5-->
    <div class="tournament-output" id="team5">team5</div>
    <div class="tournament-output" id="win56">win56</div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="win78">win78</div>
    <div class="tournament-output" id="team7">team7</div>
    <!--row 6-->
    <div class="tournament-output" id="team6">team6</div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-empty"></div>
    <div class="tournament-output" id="team8">team8</div>
</div>

<script>
function randomize() {
  teams = ["Greece", "Mexico", "Italy", "Murica", "Spain", "Croatia", "Serbia", "Australia"];
  used = [];
  m1 = [];
  m2 = [];
  m3 = [];
  m4 = [];

  function matchmake(mat, number) {
    ri = Math.floor(Math.random() * (7 - 2 * (number - 1)))
    mat.push(teams[ri]);
    teams.splice(ri,1);
    ri = Math.floor(Math.random() * (6 - 2 * (number - 1)))
    mat.push(teams[ri]);
    teams.splice(ri,1);
    return mat;
  }

  matchmake(m1, 1);
  team1.innerHTML = m1[0];
  team2.innerHTML = m1[1];
  matchmake(m2, 2);
  team3.innerHTML = m2[0];
  team4.innerHTML = m2[1];
  matchmake(m3, 3);
  team5.innerHTML = m3[0];
  team6.innerHTML = m3[1];
  matchmake(m4, 4);
  team7.innerHTML = m4[0];
  team8.innerHTML = m4[1];
}
</script>