jQuery(document).ready(function($) {
    var page = 2; // Establece la página inicial para cargar más publicaciones

    $('.news-show-more__button-expand').on('click', function() {
        var data = {
            'action': 'load_more_posts',
            'page_number': page,
            'category': my_ajax_object.category // Asegúrate de pasar la categoría correcta aquí
        };

        $.post(my_ajax_object.ajax_url, data, function(response) {
            $('.news-show-more__container').append(response);
            page++;

            // Si no hay más publicaciones, oculta el botón
            if (response === '') {
                $('.news-show-more__button-expand').hide();
            }
        });
    });
});
