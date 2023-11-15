<ul class="main-footer-menu-social">
	<?php
		$social_menu = wp_get_nav_menu_items('social_menu'); // Reemplaza 'tu_menu_social' con el slug de tu menú
		if ($social_menu) {
			foreach ($social_menu as $menu_item) {
				$link = $menu_item->url;
				$icon_name = $menu_item->attr_title; // Asume que el atributo 'title' contiene el nombre del icono
				$icon_path = get_theme_file_uri("images/{$icon_name}.svg"); // Asegúrate de que la ruta sea correcta
				echo "
					<li class='main-footer-menu-social__li'>
						<a class='main-footer-menu-social__anchor' href='{$link}'>
							<img src='{$icon_path}' alt='{$icon_name}'>
						</a>
					</li>";
			}
		}
	?>
</ul>
