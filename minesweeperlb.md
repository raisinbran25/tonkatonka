---
title: Minesweeper Leaderboards
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

<h1>
    Welcome to the Minesweeper Leaderboards!
</h1>
Scores are calculated using number of mines and time to complete.
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Score</th>
    </tr>
    </thead>
    <tbody id="result">
        <!-- javascript generated data -->
    </tbody>
</table>

<script>
// prepare HTML result container for new output
const resultContainer = document.getElementById("result");
// prepare URL's to allow easy switch from deployment and localhost
//const url = "http://localhost:8086/api/users"
const url = "https://bestgroup.duckdns.org/api/sewers"
const create_fetch = url + '/create';
const read_fetch = url + '/';

// Load users on page entry
read_sewers();


// Display User Table, data is fetched from Backend Database
function read_sewers() {
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
                console.log(data[row]);
                add_row(data[row]);
            }
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

function create_sewer() {
    const body = {
        name: document.getElementById("name").value,
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
            console.log(errorMsg);
            const tr = document.createElement("tr");
            const td = document.createElement("td");
            td.innerHTML = errorMsg;
            tr.appendChild(td);
            resultContainer.appendChild(tr);
            return;
        }
        // response contains valid result
        response.json().then(data => {
            console.log(data);
            //add a table row for the new/created userid
            add_row(data);
        })
    })
}

function add_row(data) {
    const tr = document.createElement("tr");
    const name = document.createElement("td");
    const score = document.createElement("td");


    // obtain data that is specific to the API
    name.innerHTML = data.name; 
    score.innerHTML = data.score; 

    // add HTML to container
    tr.appendChild(name);
    tr.appendChild(score);

    resultContainer.appendChild(tr);
}
</script>