jQuery(document).ready(function($) {
    var page = 2; // Comienza en la página 2, ya que la página 1 se muestra inicialmente

    $('.news-show-more__button-expand').on('click', function() {
        var data = {
            'action': 'load_more_posts',
            'page_number': page,
            'category': my_ajax_object.category // Asegúrate de que esto se esté configurando correctamente en PHP
        };

        $.post(my_ajax_object.ajax_url, data, function(response) {
            // Verifica si la respuesta no está vacía
            if (response.trim() !== '') {
                $('.news-show-more__container').append(response);
                page++;
            } else {
                // Si la respuesta está vacía, oculta el botón y evita futuros clics
                $('.news-show-more__button-expand').hide();
            }
        });
    });
});
