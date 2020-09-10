$(window).scroll(function(){
    if ($(window).scrollTop() >= 60) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});

$(document).ready(function(){
    $(".toggle-menu").click(function(){
        $('header nav').slideToggle('open');
        $('body').toggleClass('navbar-toggle');
    });

    $("header button.search-btn, header button.search-btn2").click(function(){
        $('header .searchbar').slideToggle('open');
        $('header').toggleClass('showsearch');
    });
});

$(function(){
    AOS.init();
  });


$(document).ready(function(){
  $('header .searchbar input[type="text"]').on('keyup', function(){
    if($(this).val()){
      $('header .search-suggestion').addClass("show");
    } else{
        $('header .search-suggestion').removeClass("show");
    }
  });
});

$(document).ready(function(){

    $('.custom-dropdown .dropdown-btn').click(function(){

        $('.custom-dropdown').toggleClass('show-c-dropdown');

    });

});