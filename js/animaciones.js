 $(document).ready(function(){
    //  alert('Tiene JQuery funcionando con el script al final');
    //  prompt('Ingresa tus datos')

// $('.h1-responsive').hiden;
// $('.h1-responsive').show(3000);

// $('h1, .bola1, .bola2, .estrellas, .bola3').hiden();
// $('h1, .bola1, .bola2, .estrellas, .bola3').fadeIn(8000);
// $('h1, .bola1, .bola2, .estrellas, .bola3').fadeOut(8000);

// $('#bandera').children().hiden;

$('.bola2').siblings.hiden;
$('.bola2').siblings.fadeIn;

$('.bola2').siblings(3000).css({    
    width: '80px'
});

$('.bola2').css({
    // background: '#000',
    width: '80px'
 });

 // Accediendiendo al id H1 del título "Venezolanos en Buenos Aires"
 var titulo = $('#h1');

 titulo.on('mouseenter', function(){
     $('#h1').css({
         color: '#2194F4'
     })
 })
 titulo.on('mouseleave', function(){
    $('#h1').css({
        color: '#0E3BE1'
    })
})


});
