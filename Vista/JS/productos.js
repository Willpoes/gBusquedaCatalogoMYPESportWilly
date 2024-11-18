var btn = document.getElementById('btn');
$(document).ready(function() {
    $('.contenido-pag-productos .categoria-producto .boton-categoria-productos[name="Todos"]').addClass('boton-categoria-activado');
    $('.boton-categoria-productos').click(function() {
        //
        var categoriaDeProducto = $(this).attr('name');
        console.log(categoriaDeProducto);
        $('.boton-categoria-productos').removeClass('boton-categoria-activado');
        $(this).addClass('boton-categoria-activado');
        $('.contenido-productos').hide();
        //
        $('.contenido-productos[category="' + categoriaDeProducto + '"]').show();
    });
    //
    $('.boton-categoria-productos[name="todos "]').click(function() {
        $('.contenido-productos').show();
    });
    //type , Listener

    document.addEventListener("keyup", e => {
        e.target.matches("#buscar-listaproductos");
        console.log(e.target.value);
        if (e.target.matches("#buscar-listaproductos")) {
            document.querySelectorAll(".contenido-productos ").forEach(item => {
                item.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ?
                    item.classList.remove("vaciar-productos") :
                    item.classList.add("vaciar-productos")
            });
        }
    });


});