let url = 'data.json';

function jsonValueKey(test) {
    fetch(url)
        .then(response => response.json())
        .then(response => {
            return console.log(response[test])
        });
}

jsonValueKey("name")