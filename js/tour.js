/**
 * Created by msnyder on 1/28/2016.
 */

$(document).ready(function() {

    $('.navbar li').first().addClass("active");

    //Manual Trigger
    $('.next-photo .fa-chevron-down').click(function(){
        $.fn.fullpage.moveSectionDown();
    });

});