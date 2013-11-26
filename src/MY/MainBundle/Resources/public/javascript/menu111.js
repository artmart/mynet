$(document).ready(function(){
  $("#main-menu ul.depth-0 li").hover(function(){
    $(this).children("#main-menu ul.depth-1").not(":animated").fadeIn()
    },function(){
    $(this).children("#main-menu ul.depth-1").not(":animated").fadeOut()
    })
  });