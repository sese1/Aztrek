$(document).ready(function () {
    // menu responsive 
    $(".burger").sidr({
        source: ".main-menu",
        displace: false,
    });
    // faire apparaître le menu vers la droite : side:'right',
    $('body').click(function () {
        $.sidr('close', 'sidr');
    });


    // carousel 

    $('.owl-cdc').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots:true,
      
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
       

       
       } 
    });

});