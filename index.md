<style>
/* class to create the calculator's container; uses CSS grid dsiplay to partition off buttons */
.calculator-container { 
    width: 90vw; /* this width and height is specified for mobile devices by default */
    height: 80vh;
    margin: 0 auto;

    display: grid;
    grid-template-columns: repeat(4, 1fr); /* fr is a special unit; learn more here: https://css-tricks.com/introduction-fr-css-unit/  */
    grid-template-rows: 0.5fr repeat(4, 1fr);
    gap: 10px 10px;
}

/* 
    CSS allows programmers to use media queries to change the size of classes based on the size of the device.
    This allows us to make it so that our website looks good on both mobile and desktop. If the width of the
    device is big enough, then the calculator will take up more of the screen.
*/
@media (min-width: 600px) { 
    .calculator-container {
        width: 40vw;
        height: 80vh;
    }
}

/* styling for the calculator buttons themselves */
.calculator-button {
    width: auto;
    height: auto;
    border-radius: 10px;
    background-color: #665B45;
    border: 3px solid black;
    font-size: 1.5em;

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
.calculator-button:hover {
    background-color: #373737;
}

/* styling for the top bar which shows the results of the calculator */
.calculator-output {
    /* note how the output instead takes up 4 columns and 1 row; essentially takes up the entirety of the first row */
    grid-column: span 4;
    grid-row: span 1;

    border-radius: 10px;
    padding: 1em;
    font-size: auto;
    border: 5px solid black;

    display: flex;
    align-items: center;
}
</style>

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
    console.log(mat);
  }

  matchmake(m1, 1);
  matchmake(m2, 2);
  matchmake(m3, 3);
  matchmake(m4, 4);
}

randomize();
</script>