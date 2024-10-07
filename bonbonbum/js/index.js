jQuery(document).ready(function($) {
    $(".info-adicional ul li").click(function () {
        let contenedor = $(this).data("tab");
        $(".tabgen").not(("." + contenedor)).slideUp();
        $("." + contenedor).slideDown();
    });
    $(".tabgen").not(".tab1").slideUp();
});