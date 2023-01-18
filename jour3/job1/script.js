$(document).ready(function(){

    var button = $('#button');
    var body = $('body');
    $(button).click(function(){
        var textButton = $("<p>Les logiciels et les cathédrales, cest un peu la même chose - d'abord on les construit,ensuite on prie.”</p><br><button id='delete'>cacher</button>");

        $(body).append(textButton);

        var del = $('#delete');

        $(del).click(function(){
            textButton.remove();
        })
    })
})