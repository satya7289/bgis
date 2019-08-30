$(document).ready(function() 
{
$("#Registrationform").submit(function() 
{
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#phone").val();
var dob = $("#dob").val();
var prefered_date = $("#date_test option:selected").val();
var parents_name = $("#parent_name").val();
var grade = $("#grade option:selected").text();
var address = $("#address").val();
var dataString = 'name='+ name + '&email=' + email + '&dob=' + dob + '&prefered_date=' + prefered_date + '&grade=' + grade + '&parents_name=' + parents_name + '&mobile=' + mobile + '&address=' + address;
var goodEmail = email.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.sex)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\.arpa)|(\.asia)|(\.cat)|(\.int)|(\.jobs)|(\.tel)|(\.travel)|(\.xxx)|(\..{2,2}))$)\b/gi);
    apos=email.indexOf("@");dotpos = email.lastIndexOf(".");lastpos=email.length-1;
if(name=='' || !goodEmail || mobile=='' || prefered_date== '' || dob== '' || grade== '' || parents_name== '')
{
alert('Please enter a valid detail')
}
else
{
$('#registration').hide();
$('#loading-image').show();
$.ajax({
type: "POST",
url: '/innerspage/onlineregister',
data: dataString,
success: function(data)
{
alert('Please wait your registration in Queue')
},
error : function(data)
 {
              alert("Duplicate entry for registration !! please register with new parents email id");
              event.preventDefault();
              $('#loading-image').hide();
              die();
              var delay = 0; //Your delay in milliseconds
             setTimeout(function(){ window.location = "http://bgis.org/onlineregister"; }, delay)    
               document.getElementById("Registrationform").reset();
 },
    complete : function(data)
 {  
            $('#loading-image').hide();
	        $("#go1").click();
		var delay = 2000; //Your delay in milliseconds
		setTimeout(function(){ window.location = "http://bgis.org/student"; }, delay)
		document.getElementById("Registrationform").reset();
  }
});
}
return false;
});
});