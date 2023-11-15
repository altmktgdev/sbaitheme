<div class="main-menu">
    <ul class="main-menu__ul">
        <?php
        $menu_items = wp_get_nav_menu_items('Main'); // Asegúrate de que 'Main' es el nombre correcto de tu menú
        $menu_list = array();
        foreach ($menu_items as $item) {
            $menu_list[$item->menu_item_parent][] = $item;
        }
        // Imprime los elementos de nivel 1 y sus submenús
        foreach ($menu_list[0] as $menu_item) {
            echo '<li class="main-menu__li">
				<a class="main-menu__anchor" href="' . $menu_item->url . '" style="background-image: url(\'' . get_theme_file_uri('images/mb-menu-ico.svg') . '\');">' . $menu_item->title . '</a>';
				if (isset($menu_list[$menu_item->ID])) { // Nivel 2
					echo '<div class="main-menu__sub-menu-first-level"><span class="main-menu__mb-back"><img src="' . get_theme_file_uri('images/mb-menu-back.svg') . '"></span><ul class="push-menu">';
					foreach ($menu_list[$menu_item->ID] as $sub_menu_item) {
						echo '<li class="push-menu__li"><a class="push-menu__anchor" href="' . $sub_menu_item->url . '">' . $sub_menu_item->title . '<img class="push-menu__anchor-dk-ico" src="' . get_theme_file_uri('images/sport-ico-white.svg') . '"><img class="push-menu__anchor-mb-ico" src="' . get_theme_file_uri('images/sport-ico-blue.svg') . '"></a>';

						if (isset($menu_list[$sub_menu_item->ID])) { // Nivel 3
							echo '<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="' . get_theme_file_uri('images/mb-menu-back.svg') . '"></span><ul class="push-menu__sub-menu-ul">';
							foreach ($menu_list[$sub_menu_item->ID] as $sub_sub_menu_item) {
								echo '<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="' . $sub_sub_menu_item->url . '">' . $sub_sub_menu_item->title . '</a></li>';
							}
							echo '</ul></div>';
						}

						echo '</li>';
					}
					echo '</ul></div>';
				}
				echo '</li>';
        }
        ?>
    </ul>
</div>

