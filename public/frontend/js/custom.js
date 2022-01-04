
$(document).ready(function(){
  $("#sec2").hide();
  $("#sec3").hide();
  $("#sec4").hide();
$("#next2").click(function(){
  $("#sec1").hide();
  $("#logwithsocial").hide();
  $("#sec2").show();
});
$("#next3").click(function(){
  $("#sec1").hide();
  $("#sec2").hide();
  $("#logwithsocial").hide();
  $("#sec3").show();
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
