$(document).ready(function() {

$('#submit').click(function() {

  var a = $("#input").val();
$('#response').html(" ");
$.ajax({
type: "POST",
data : {text:a},
url : "bot.php",
success : function(data) {
  $('#response').html(data)
},
  error : function(){}


});

$("#input").val(' ');
});
});

$(document).ready(function() {
$(document).keypress(function(e) {
    if(e.which == 13) {
      var a = $("#input").val();
    $('#response').html(" ");
    $.ajax({
    type: "POST",
    data : {text:a},
    url : "bot.php",
    success : function(data) {
      $('#response').html(data)
    },
      error : function(){}


    });

    $("#input").val(' ');
    }
});


});
