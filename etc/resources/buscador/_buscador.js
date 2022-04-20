$(document).ready(function() {
    $('#buscador_submit__busquedaMain').click(function(){
        $('.buscador_item').hide();

        var sucursaltxt = $('#buscador_input__busquedaMain').val();

        $('.buscador_item').each(function(){
            if($(this).text().toUpperCase().indexOf(sucursaltxt.toUpperCase()) != -1){
                $(this).show();
            }
        });
    });    

    $('.buscador_busquedaMain').keypress((e) => {  
        if (e.which === 13) {
            $('.buscador_item').hide();

            var sucursaltxt = $('#buscador_input__busquedaMain').val();

            $('.buscador_item').each(function(){
                if($(this).text().toUpperCase().indexOf(sucursaltxt.toUpperCase()) != -1){
                    $(this).show();
                }
            });
        }
    });
});