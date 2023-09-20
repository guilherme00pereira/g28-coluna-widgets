(function($){
    $('#btn-veja-mais-colunas').on('click', function(){
        const params = {
            action: ajax_object.ajax_todosEpisodios,
            nonce: ajax_object.nonce,
        }
        $.get(ajax_object.ajax_url, params, function(response){
            $('ul.coluna-lista').html(response.data);
            $('#btn-veja-mais-colunas').hide();
        }, 'json');

    });
})(jQuery)