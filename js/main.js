/**
 * Created by julio on 05/07/16.
 */
$(document).ready(function(){
    $(".btn-mobile").click(function(){
        $('.menu').toggle(200);
    });

    $('.content .slide').cycle({
        fx: 'fade'
    });

    $('.scroll').click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
    });
});