    $(document).ready(function(){
        $("#scroll-icon").hover(
            function() {
                $("#scroll-text").fadeIn("slow");
            },
            function() {
                $("#scroll-text").fadeOut("slow");
        });
    })

//Cache reference to window and animation items
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

$(document).ready(function() {
    $(window).scroll( function(){
        $('#hide_me').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it in */
            if( bottom_of_window >= bottom_of_object ) {
                $(this).animate({'opacity':'1'},1000);
            }
        }); 
    });
});
