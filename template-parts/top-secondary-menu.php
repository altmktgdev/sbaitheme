<ul class="top-secondary-menu__ul">
    <?php
    $menu_items = wp_get_nav_menu_items('Main'); // Asegúrate de que 'Main' es el nombre correcto de tu menú
    $menu_item_count = 0;

    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) { // Solo consideramos elementos de nivel superior
            $menu_item_count++;
            if ($menu_item_count > 5) {
                echo '<li class="top-secondary-menu__li">
                        <a class="top-secondary-menu__anchor" href="' . $item->url . '">
                            ' . $item->title . '
                        </a>
                    </li>';
            }
        }
    }
    ?>
</ul>
