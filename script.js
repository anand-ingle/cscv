$(document).ready(function() {
//change CAPTCHA on each click or on refreshing page
$("#reload").click(function() {

$("img#img").remove();
var id = Math.random();
$('<img id="img" width="200px" src="newcp.php?id='+id+'"/>').appendTo("#imgdiv");
id ='';
});

//validation function
$('#rbutton').click(function() {
var name = $("#username").val();
var email = $("#email").val();
var captcha = $("#captcha1").val();



var dataString = 'captcha=' + captcha;
$.ajax({
type: "POST",
url: "verify.php",
data: dataString,
success: function(html) {
alert(html);
}
});

});
});