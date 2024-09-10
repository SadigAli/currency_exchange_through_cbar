'use strict';

let date = document.getElementById('date');
let search = document.getElementById('search');
let string = "str";

function get_valutes() {
    let url = `/currencies?date=${date.value}`;
    fetch(url)
        .then(res => res.json())
        .then(data => {
            let tbody = document.querySelector('tbody');
            let searchVal = search.value.trim().toLowerCase();
            tbody.innerHTML = '';
            if (searchVal !== '') {
                data = data.filter(x =>
                    x['@attributes']['Code'].toLowerCase().includes(searchVal) ||
                    x['Name'].toLowerCase().includes(searchVal) ||
                    x['Value'].includes(searchVal)
                )
            }
            for (let valute of data) {
                let code = valute['@attributes']['Code'];
                let name = valute['Name'];
                let value = valute['Value'];
                let tr = `<tr><td>${name}</td><td>${code}</td><td>${value}</td></tr>`;
                tbody.innerHTML += tr;
            }
        });
}

get_valutes();

date.addEventListener('change', function () {
    get_valutes();
});

search.addEventListener('input', function () {
    get_valutes();
});
