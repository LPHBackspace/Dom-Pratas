$(document).ready(function(){
    // carrocel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // Mais vendidos carrocel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        Responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Filtrar itens
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // Filtrar Itens "Botão"
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    })


    // Contador quantidade de produtos
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $input = $(".qty .qty_input");

    // Evento de clique "Contador + quantidade de produtos"
    $qty_up.click(function(e){
        if($input.val() >= 1 && $input.val() <= 9){
           $input.val(function(i, oldval){
            return ++oldval;
          });
        }
    });

    // Evento de clique "Contador - quantidade de produtos"
     $qty_down.click(function(e){
        if($input.val() > 1 && $input.val() <= 10){
           $input.val(function(i, oldval){
            return --oldval;
          });
        }
    });
});