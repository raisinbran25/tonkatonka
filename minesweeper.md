---
title: Minesweeper
layout: default
description: 
---

<style>
.map-container { 
    width: 500px;
    height: 500px;
    position: absolute;
    right: 0px;

    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 1fr);
    gap: 1px 1px;
}

@media (min-width: 100px) { 
    .map-container {
        width: 50px;
        height: 50px;
        left: 20px
    }
}

.map-blankbutton {
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

.map-zerobutton {
    width: 40px;
    height: 40px;
    border-radius: 0px;
    background-color: #D2B48C;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;
    grid-column: span 1;
    grid-row: span 1;
    transition: all 0s; 
}

.map-minebutton {
    width: 40px;
    height: 40px;
    border-radius: 0px;
    background-color: #AA4A44;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;
    grid-column: span 1;
    grid-row: span 1;
    transition: all 0s; 
}

.map-numberbutton {
    width: 40px;
    height: 40px;
    border-radius: 0px;
    background-color: #D2B48C;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;
    grid-column: span 1;
    grid-row: span 1;
    transition: all 0s; 
}

.map-longbutton {
    width: 328px;
    height: 80px;
    border-radius: 0px;
    background-color: #808080;
    border: 0px solid black;
    font-size: 1.5fem;

    display: flex;
    justify-content: center;
    align-items: center;
    grid-column: span 8;
    grid-row: span 2;
    transition: all 0s; 
}

.map-blankbutton:hover {
    background-color: #373737;
}
.map-longbutton:hover {
    background-color: #373737;
}
</style>
<!--top html-->
[Click here to view the leaderboards for this game](https://raisinbran25.github.io/tonkatonka/minesweeperlb)
<div>
    enter a username:<input type="text" id="username" value="">
    <button type="button" onclick="checkuser()">Check Username</button>
</div>

<div>
    choose your number of mines:<input type="text" id="button" value="1-20">
    <button type="button" onclick="enter()">Enter</button>
</div>

<div class="map-container">
    <div class="map-longbutton" id="reset" onclick="initialize()">click here to play!</div>
    <!--row 1-->
    <div class="map-blankbutton" id="b18"></div>
    <div class="map-blankbutton" id="b28"></div>
    <div class="map-blankbutton" id="b38"></div>
    <div class="map-blankbutton" id="b48"></div>
    <div class="map-blankbutton" id="b58"></div>
    <div class="map-blankbutton" id="b68"></div>
    <div class="map-blankbutton" id="b78"></div>
    <div class="map-blankbutton" id="b88"></div>
    <!--row 2-->
    <div class="map-blankbutton" id="b17"></div>
    <div class="map-blankbutton" id="b27"></div>
    <div class="map-blankbutton" id="b37"></div>
    <div class="map-blankbutton" id="b47"></div>
    <div class="map-blankbutton" id="b57"></div>
    <div class="map-blankbutton" id="b67"></div>
    <div class="map-blankbutton" id="b77"></div>
    <div class="map-blankbutton" id="b87"></div>
    <!--row 3-->
    <div class="map-blankbutton" id="b16"></div>
    <div class="map-blankbutton" id="b26"></div>
    <div class="map-blankbutton" id="b36"></div>
    <div class="map-blankbutton" id="b46"></div>
    <div class="map-blankbutton" id="b56"></div>
    <div class="map-blankbutton" id="b66"></div>
    <div class="map-blankbutton" id="b76"></div>
    <div class="map-blankbutton" id="b86"></div>
    <!--row 4-->
    <div class="map-blankbutton" id="b15"></div>
    <div class="map-blankbutton" id="b25"></div>
    <div class="map-blankbutton" id="b35"></div>
    <div class="map-blankbutton" id="b45"></div>
    <div class="map-blankbutton" id="b55"></div>
    <div class="map-blankbutton" id="b65"></div>
    <div class="map-blankbutton" id="b75"></div>
    <div class="map-blankbutton" id="b85"></div>
    <!--row 5-->
    <div class="map-blankbutton" id="b14"></div>
    <div class="map-blankbutton" id="b24"></div>
    <div class="map-blankbutton" id="b34"></div>
    <div class="map-blankbutton" id="b44"></div>
    <div class="map-blankbutton" id="b54"></div>
    <div class="map-blankbutton" id="b64"></div>
    <div class="map-blankbutton" id="b74"></div>
    <div class="map-blankbutton" id="b84"></div>
    <!--row 6-->
    <div class="map-blankbutton" id="b13"></div>
    <div class="map-blankbutton" id="b23"></div>
    <div class="map-blankbutton" id="b33"></div>
    <div class="map-blankbutton" id="b43"></div>
    <div class="map-blankbutton" id="b53"></div>
    <div class="map-blankbutton" id="b63"></div>
    <div class="map-blankbutton" id="b73"></div>
    <div class="map-blankbutton" id="b83"></div>
    <!--row 7-->
    <div class="map-blankbutton" id="b12"></div>
    <div class="map-blankbutton" id="b22"></div>
    <div class="map-blankbutton" id="b32"></div>
    <div class="map-blankbutton" id="b42"></div>
    <div class="map-blankbutton" id="b52"></div>
    <div class="map-blankbutton" id="b62"></div>
    <div class="map-blankbutton" id="b72"></div>
    <div class="map-blankbutton" id="b82"></div>
    <!--row 8-->
    <div class="map-blankbutton" id="b11"></div>
    <div class="map-blankbutton" id="b21"></div>
    <div class="map-blankbutton" id="b31"></div>
    <div class="map-blankbutton" id="b41"></div>
    <div class="map-blankbutton" id="b51"></div>
    <div class="map-blankbutton" id="b61"></div>
    <div class="map-blankbutton" id="b71"></div>
    <div class="map-blankbutton" id="b81"></div>
</div>

<script>
//user input for mines
numines = null
function enter() {
    input = document.getElementById("button").value
    if (input > 1 && input < 21) {
        numines = input
    }
    else {
        document.getElementById("reset").innerHTML = "please pick a number from 2-20"
    }
}
// score calculator
function score() {
    return String(Math.floor((numines ** 3) / (initialtime / 1000)))
}
// timer code
starttime = null
finaltime = null
min = 00
sec = 00
hsec = 00
function updatetime() {
    time = Math.floor((finaltime - starttime) / 10)
    initialtime = time
    min = Math.floor(time / 6000)
    if (min < 10) {
        min = "0" + String(min)
    }
    else {
        min = String(min)
    }
    time = time % 6000
    sec = Math.floor(time / 100)
    if (sec < 10) {
        sec = "0" + String(sec)
    }
    else {
        sec = String(sec)
    }
    time = time % 100
    hsec = time
    if (hsec < 10) {
        hsec = "0" + String(hsec)
    }
    else {
        hsec = String(hsec)
    }
    
    document.getElementById("reset").innerHTML = "congratulations! you won with a time of " + min + ":" + sec + "." + hsec + " and a score of " + score() + "! click here to reset." 
}

// minesweeper code
winstatus = null
mines = { // object storing ids and number of surrounding mines
    cord: {

    }
}
nums = [] // all possible ids
mids = [] // ids of mines

// calculate all possible coordinates/ids
function addcords() {
    for (let i = 11; i < 90; i++) {
        if (String(i)[0] != "9" && String(i)[0] != "0") {
            if (String(i)[1] != "9" && String(i)[1] != "0") {
                mines.cord[i] = {"ms" : 0}
                nums.push(i)
            }
        }
    }
}
//randomly places mines using list of ids
function placemines() { // adds ms value "9" in object
    while (mids.length < numines) { // place 10 mines
        r = Math.floor(Math.random() * 64)
        if (mines.cord[nums[r]]["ms"] == 0) { //avoid repeat mines
            mines.cord[nums[r]]["ms"] = 9
            mids.push(nums[r])
        }
    }
}
// updates all other ms values in object
function calcmines() { 
    dvals = [-11, -10, -9, -1, 1, 9, 10, 11]
    for (let i = 0; i < mids.length; i++) { //each mine
        for (let j = 0; j < dvals.length; j++) { //each difference value
            try { //in case coordinate does not exist
                mines.cord[mids[i] + dvals[j]]["ms"] += 1
                if (mines.cord[mids[i] + dvals[j]]["ms"] > 9){
                    mines.cord[mids[i] + dvals[j]]["ms"] -= 1
                }
            }
            catch(err) {
            }
        }
    }
}
// button functions and class
function play() { 
    if (numines == null) {
        return
    }
    for (let i = 0; i < nums.length; i++) {
        cord = String(nums[i])
        bname = document.getElementById("b" + cord)
        bname.className = "map-blankbutton"
        if (mines.cord[nums[i]]["ms"] == 0) {
            bname.className = "map-zerobutton"
        }
        else if (mines.cord[nums[i]]["ms"] == 9) {
            bname.addEventListener("click", mine.bind(null, cord))
        }
        else {
            bname.addEventListener("click", number.bind(null, cord)) //null is for specific button, cord is parameter in "number" function
        }
    }
    document.getElementById("reset").innerHTML = "" 
    document.getElementById("reset").onclick = null
    inprogress = true
    starttime = Date.now()
}
function number(cord) { // reveal number
    if (winstatus != null) {
        return
    }
    bname = document.getElementById("b" + String(cord))
    bname.className = "map-numberbutton"
    bname.innerHTML = String(mines.cord[String(cord)]["ms"])
    checkwin()
}
function mine() { // game over
    if (winstatus == true) {
        return
    }
    inprogress = false
    winstatus = false
    for (let i = 0; i < nums.length; i++) {
        cord = String(nums[i])
        bname = document.getElementById("b" + cord)
        if (mines.cord[nums[i]]["ms"] == 0) {
            bname.className = "map-zerobutton"
        }
        else if (mines.cord[nums[i]]["ms"] == 9) {
            bname.className = "map-minebutton"
        }
        else {
            bname.className = "map-numberbutton"
            bname.innerHTML = String(mines.cord[String(cord)]["ms"])
        }
    }
    bname = document.getElementById("reset")
    bname.innerHTML = "you lost! click here to reset."
    bname.addEventListener("click", function () {
        window.location.reload()
    })
}
//check if user has cleared all nonmine squares
function checkwin() {
    if (winstatus == false) {
        return
    }
    for (let i = 0; i < nums.length; i++) {
        cord = String(nums[i])
        bname = document.getElementById("b" + cord)
        if (mines.cord[nums[i]]["ms"] > 0 && mines.cord[nums[i]]["ms"] < 9) {
            if (bname.className == "map-blankbutton") {
                return
            }
        }
    }
    winstatus = true
    win()
}
//update board and message for win
function win() {
    for (let i = 0; i < nums.length; i++) {
        cord = String(nums[i])
        bname = document.getElementById("b" + cord)
        if (mines.cord[nums[i]]["ms"] == 9) {
            bname.className = "map-minebutton"
        }
        else {
            bname.className = "map-blankbutton"
            bname.addEventListener("click", null)
            bname.innerHTML = "🌸"
        }
    }
    bname = document.getElementById("reset")
    bname.addEventListener("click", function () {
        window.location.reload()
    })
    finaltime = Date.now()
    updatetime()
    create_sewer()
}
//call all other functions for inital game
function initialize() {
    addcords()
    placemines()
    calcmines()
    play()
}


// prepare URL's to allow easy switch from deployment and localhost
//const url = "http://localhost:8086/api/users"
const url = "https://bestgroup.duckdns.org/api/sewer"
const create_fetch = url + '/create';
const read_fetch = url + '/';

//check if username is taken by iterating through database/has spaces
function checkuser() {
    testuser = document.getElementById("username").value
    for (let i = 0; i < testuser.length; i++) {
        if (testuser[i] == ' ') {
            document.getElementById("reset").innerHTML = "that has a space, try another"
            return
        }
    }
    // prepare fetch options
    const read_options = {
        method: 'GET', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'default', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'omit', // include, *same-origin, omit
        headers: {
        'Content-Type': 'application/json'
        },
    };

    // fetch the data from API
    fetch(read_fetch, read_options)
    
        // response is a RESTful "promise" on any successful fetch
        .then(response => {
        // check for response errors
        if (response.status !== 200) {
            const errorMsg = 'Database read error: ' + response.status;
            console.log(errorMsg);
            const tr = document.createElement("tr");
            const td = document.createElement("td");
            td.innerHTML = errorMsg;
            tr.appendChild(td);
            resultContainer.appendChild(tr);
            return;
        }
        // valid response will have json data
        response.json().then(data => {
            console.log(data);
            for (let row in data) {
                datarow = data[row]
                if (datarow.name == document.getElementById("username").value) {
                    document.getElementById("reset").innerHTML = "username taken, try another"
                    return
                }
            }
            document.getElementById("reset").innerHTML = "username valid, enter mines and click here to play!"
        })
    })
    // catch fetch errors (ie ACCESS to server blocked)
    .catch(err => {
        console.error(err);
        const tr = document.createElement("tr");
        const td = document.createElement("td");
        td.innerHTML = err;
        tr.appendChild(td);
        resultContainer.appendChild(tr);
    });
}

// "post" function to database
function create_sewer() {
    if (document.getElementById("username").value.length == 0) {
        return
    }
    const body = {
        name: document.getElementById("username").value,
        score: String(score()),
    };
    const requestOptions = {
        method: 'POST',
        body: JSON.stringify(body),
        headers: {
            "content-type": "application/json",
            'Authorization': 'Bearer my-token',
        },
    };

    // URL for Create API
    // Fetch API call to the database to create a new user
    fetch(create_fetch, requestOptions)
        .then(response => {
        // trap error response from Web API
        if (response.status !== 200) {
            const errorMsg = 'Database create error: ' + response.status;
            document.getElementById("reset") = errorMsg
            return;
        }
        // response contains valid result
        response.json().then(data => {
            console.log(data);
        })
    })
}
</script>