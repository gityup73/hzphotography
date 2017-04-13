// runs the slideshow on index page; change $imgNum to match number of images in show

$next = 1;
$current = 0;
$interval = 4000;
$fadeTime = 800;
$imgNum = 5;

$(document).ready(function(){
   $('.slideshow').css('position', 'absolute');
   $('.slideshow img').css({'position':'absolute'});

  nextFadeIn();
});

function nextFadeIn(){
    $('.slideshow img').eq($current).delay($interval).fadeOut($fadeTime).end().eq($next).delay($interval).hide().fadeIn($fadeTime, nextFadeIn);

    if($next < $imgNum-1){ 
        $next++; 
    } else { 
        $next = 0;
    }
        
    if($current < $imgNum-1){ 
        $current++; 
    } else { 
        $current =0; 
    }
};
