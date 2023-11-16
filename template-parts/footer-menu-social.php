<ul class="main-footer-menu-social">
	<?php
		$social_menu = wp_get_nav_menu_items('social_menu'); // Reemplaza 'social_menu' con el slug de tu menú
		if ($social_menu) {
			foreach ($social_menu as $menu_item) {
				$image_url = $menu_item->attr_title; // URL de la imagen en el 'Title Attribute'
				$alt_text = $menu_item->title; // Texto alternativo del 'Navigation Label'
				echo "
					<li class='main-footer-menu-social__li'>
						<a class='main-footer-menu-social__anchor' href='{$menu_item->url}'>
							<img src='{$image_url}' alt='{$alt_text}'>
						</a>
					</li>";
			}
		}
	?>
</ul>
