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