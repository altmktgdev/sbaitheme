jQuery(document).ready(function($) {
    var page = 2; // Establece la página inicial para cargar más publicaciones

    $('.news-show-more__button-expand').on('click', function() {
        // Extraer la categoría de la URL
        var currentUrl = window.location.pathname;
        var urlParts = currentUrl.split('/');
        var category = 'nfl'; // Valor por defecto
        for (var i = 0; i < urlParts.length; i++) {
            if (urlParts[i] === 'news' && urlParts[i + 1]) {
                category = urlParts[i + 1];
                break;
            }
        }

        var data = {
            'action': 'load_more_posts',
            'page_number': page,
            'category': category
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
