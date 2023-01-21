$(document).ready(function(){
	$("#button").click(function(){

       $.ajax({
         type: "GET",
         url: "expression.txt",
         
         success:function(data){
                  $("#test").remove();
                  $("#bod").append('<p id="test"></p>');
                  $("#test").text(data);
                  
                  }
         });

  });
});