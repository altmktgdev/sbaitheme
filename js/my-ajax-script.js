let pageNumber = 1;  // Empezamos en la página 1 por defecto

jQuery(document).on('click', '.news-show-more__button-expand', function() {
    pageNumber++; // Incrementamos el número de página

    jQuery.ajax({
        type: 'POST',
        url: my_ajax_object.ajax_url,
        data: {
            action: 'load_more_posts',
            category: window.location.pathname.split('/')[2], // Obtenemos la categoría de la URL
            page_number: pageNumber // Pasamos el número de página actualizado
        },
        success: function(response) {
            // Aquí agregas el nuevo contenido a tu contenedor
            // Por ejemplo:
            jQuery('.news-show-more__container').append(response);
            return false;
        }
    });
});



