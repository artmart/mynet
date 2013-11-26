$(document).ready(function(){
  $("#sidebar-window #close-sidebar-window").click(function(){
    close_sidebar_links_window()
    });
  $("#main-menu ul li").hover(function(){
    $(this).children().children("strong.hover").animate({
      top:"0px"
    },500)
    },function(){
    $(this).children().children("strong.hover").animate({
      top:"-70px"
    },500)
    })
  });
function close_sidebar_links_window(){
  $("#content").fadeIn();
  $("#slider-container").fadeIn();
  $("#right-sidebar").fadeIn();
  $("#sidebar-window").fadeOut();
  $("#sidebar_links a").removeClass("active")
  }
  function apply_sidebar_links_window(a){
  if(a=="open"){
    $("#content").fadeOut();
    $("#slider-container").fadeOut();
    $("#right-sidebar").fadeOut();
    $("#sidebar-window").fadeIn()
    }
    if(a=="close"){
    $("#content").fadeIn();
    $("#slider-container").fadeIn();
    $("#right-sidebar").fadeIn();
    $("#sidebar-window").fadeOut()
    }
  };