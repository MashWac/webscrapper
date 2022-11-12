$(document).ready(function(){
    $(".landingcategory").hover(function(){
        $(this).find(".categoryimage").fadeOut(500);},function(){
        $(this).find(".categoryimage").fadeIn(500);
    });
});