$( document ).ready(function() {
  //load products
    $('#botonAnadirJuego').click(function(){
        $('#apartadoJuegos').load('index.php?action=gestion-juego&opcion=0', function(){
            console.log("Juego anadido.");
        })
    });

    $('#botonBuscarJuego').click(function(){
        var name = $('#inputNombreJuego').val();
        var nameNoSpaces = name.split(' ').join('_');
        
        $('#apartadoJuegos').load('index.php?action=gestion-juego&opcion=1&nombreJuego='+nameNoSpaces, function(){
            console.log("Juego encontrado.");
        })
    });

    /*$(document).on("click", "#searchButton", function () {
            var name = $('#inputProductName').val();
            $('#products').load('index.php?action=list-products&search=1&productName='+name, function(){
                console.log("Products loaded.");
            })
    });*/

    $("#apartadoJuegos").on("click", ".eliminarJuego", function () {
        var idJuego = $(this).data("value");        
        $('#apartadoJuegos').load('index.php?action=gestion-juego&opcion=1&idJuego=' + idJuego, function(){
            console.log("Juego eliminado.");
        })
    });

    $("#apartadoJuegos").on("click", ".modificarJuego", function () {        
        var idJuego = $(this).data("value");
        $('#apartadoJuegos').load('index.php?action=gestion-juego&opcion=2&idJuegoMod=' + idJuego, function(){
            console.log("Juego eliminado.");
        })
    });

	

});