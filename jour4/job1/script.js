let button = document.getElementById('button')
button.addEventListener("click",
function(){
    let p = document.createElement('p');
    let body = document.querySelector('body')

    fetch('expression.txt')
    .then (function(response){
        return response.text()
    })

    .then (function(data){
        body.append(p);
        p.append(data)
    })
})