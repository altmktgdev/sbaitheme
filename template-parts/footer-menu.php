<ul class="main-footer-menu">
    <?php
    $menu_items = wp_get_nav_menu_items('footer-menu'); // Asegúrate de que 'footer-menu' es el nombre correcto de tu menú
    foreach ($menu_items as $item) {
        // Asegúrate de que solo se impriman los elementos de nivel superior
        if ($item->menu_item_parent == 0) {
            echo '<li class="main-footer-menu__li">
                    <a class="main-footer-menu__anchor" href="' . $item->url . '">' . $item->title . '</a>
                  </li>';
        }
    }
    ?>
</ul>
