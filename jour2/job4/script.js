let keylogger = document.getElementById('keylogger');
window.addEventListener('keydown',function(event){
   let key = event.key;
    keylogger.value += key;
})