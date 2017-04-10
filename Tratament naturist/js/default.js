//script for copyright
// var message="Copyright @ tratamentnaturist.com.ro"; 
// function clickIE4(){ 
//   if (event.button==2){ 
//     alert(message); return false; 
//   }
// } 
// function clickNS4(e){ 
//   if (document.layers||document.getElementById&&!document.all){ 
//     if (e.which==2||e.which==3){ alert(message); return false; } } 
// } 
// if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; 
// } else if (document.all&&!document.getElementById){
//  document.onmousedown=clickIE4; 
// } 
// document.oncontextmenu=new Function("alert(message);return false");
//end script for copyright

//navbar active links
var url = window.location;
$('ul.nav a, ul.sidebar-nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
//end navbar active links

//script for the arrow down
$(document).ready(function() {
    $("#scroll-icon").hover(
        function() {
            $("#scroll-text").fadeIn("slow");
        },
        function() {
            $("#scroll-text").fadeOut("slow");
    });
});
//end script for the arrow down

//scroll down effect
$(document).ready(function() {
  $("a[href='#intro']").click(function() {
    $("html, body").animate({ scrollTop: 520 }, "slow");
    return false;
  });
});
//end scroll down effect

//window animation on scroll
var $animation_elements = $('.animation-element');
var $window = $(window);
function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}
$window.on('scroll', check_if_in_view);
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
//end window animation on scroll

//show/hide scroll to top button
$("#scroll_to_top").hide(); // hide on page load
$(window).bind('scroll', function(){
    if($(this).scrollTop() > 350) { // show after 400 px of user scrolling
      $("#scroll_to_top").slideDown("slow");
    }
    else { // hide
      $("#scroll_to_top").slideUp("slow");
    }
});
//end show/hide scroll to top button

//scroll to top effect
$(document).ready(function() {
  $("a[href='#top']").click(function() {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
});
//end scroll to top effect

//tooltip activation
$(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    $('#scroll_to_top').tooltip({animation: true}); 
});
//end tooltip activation

// Modal hide on window click
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//end modal hide on clicks

//google map
function myMap() {
  var mapProp = {
      center: new google.maps.LatLng(45.129642, 25.728338),
      zoom:12
  };
  var marker = new google.maps.Marker({
      position: new google.maps.LatLng(45.129642, 25.728338),
      icon: "../img/house.png",
      animation:google.maps.Animation.BOUNCE
  });
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
  marker.setMap(map);
}
//end google map