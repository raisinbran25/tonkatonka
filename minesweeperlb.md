---
title: Minesweeper Leaderboards
layout: default
description: 
---

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
const url = "https://bestgroup.duckdns.org/api/players"
const create_fetch = url + '/create';
const read_fetch = url + '/';

// Load users on page entry
read_players();


// Display User Table, data is fetched from Backend Database
function read_players() {
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
</script>