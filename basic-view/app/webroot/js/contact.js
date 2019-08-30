
$(document).ready(function() 
{
$(".submit").click(function() 
{
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#phone").val();
var city = $("#city").val();
var comment = $("#comment").val();
var dataString = 'name='+ name + '&email=' + email + '&mobile=' + mobile + '&city=' + city + '&comment=' + comment;
if(name=='' || email=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: '/innerspage/contact',
data: dataString,
success: function(data)
{
  BootstrapDialog.alert('Thank you for Contacting Us .<br/><b style="color:#a0030b;">Hare Krishna</b><br/>Team');
document.getElementById("contactform").reset();
}
});
}
return false;
});
});