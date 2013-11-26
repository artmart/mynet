$(document).ready(function(){
  var e=1;
  var b=1;
  var c=1;
  var a=1000;
  $("#slider-container ul.slider li:first").before($("#slider-container ul.slider li:last"));
  if(e==1){
    var d=setInterval('slide("left")',a);
    $("#hidden_auto_slide_seconds").val(a)
    }
    if(b==1){
    $("#slider-container ul.slider").hover(function(){
      clearInterval(d)
      },function(){
      d=setInterval('slide("right")',a)
      })
    }
  });
function slide(c){
  var a=$("#slider-container ul.slider li").outerWidth();
  if(c=="left"){
    var b=parseInt($("#slider-container ul.slider").css("left"))+a
    }else{
    var b=parseInt($("#slider-container ul.slider").css("left"))-a
    }
    $("#slider-container ul.slider:not(:animated)").animate({
    left:b
  },500,function(){
    if(c=="left"){
      $("#slider-container ul.slider li:first").before($("#slider-container ul.slider li:last"))
      }else{
      $("#slider-container ul.slider li:last").after($("#slider-container ul.slider li:first"))
      }
      $("#slider-container ul.slider").css({
      left:"-690px"
    })
    })
  };