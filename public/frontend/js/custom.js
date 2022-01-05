
$(document).ready(function(){

  $("#sec2").hide();
  $("#sec3").hide();
  $("#sec4").hide();

  $("#next2").click(function(){
 
  var fname = $("#firstname").val();
  var lname = $("#lastname").val();
  var email = $("#email").val();
 
  if( fname == '' || lname == '' || email == '')
  {

      swal({
        title: "Fields Empty",
        text: "Please Fill the fields properly!",
        icon: "warning",
        button: "OK",
      });

    $("#sec1").show();

  }
  else{
    $("#sec2").show();
    $("#sec1").hide();
    $("#logwithsocial").hide();
  }

});




$("#next3").click(function(){

  

  var password = $("#password").val();
  var repassword = $("#repassword").val();
  var accounttype =  $('input[name="accounttype"]:checked').val();



  if(password == '' ||  repassword == '' || accounttype == '')
  {
    alert('if');
    swal({
      title: "Empty Fields",
      text: "Fill all the Fields",
      icon: "warning",
      button: "OK",
    });
    $("#sec2").show();
    $("#sec1").hide();
    $("#logwithsocial").hide();
  }
  else
  {

    if(password == repassword )
    {
      jQuery.ajax({
        url : "/registerusers",
        data : jQuery("#regForm").serialize(),
        type : 'post',
        success : function(result){
          console.log(result);
        }
      });
    

      $("#sec1").hide();
      $("#sec2").hide();
      $("#logwithsocial").hide();
      $("#sec3").show();
    }
    else
    {
  
      swal({
        title: "password not matched",
        text: "Please Re-Type password",
        icon: "warning",
        button: "OK",
      });
      $("#sec2").show();
      $("#sec1").hide();
      $("#logwithsocial").hide();
  
    }

  }
  
});



$("#next4").click(function(){
  $("#sec1").hide();
  $("#sec2").hide();
  $("#sec3").hide();
  $("#logwithsocial").hide();
  $("#loginsec").hide();
  $("#sec4").show();
});

});


