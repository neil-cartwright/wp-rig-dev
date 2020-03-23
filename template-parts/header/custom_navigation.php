<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}
?>

<nav class="bg-gray-600 min-h-24 flex justify-start md:justify-center items-center">

  <?php wp_rig()->display_primary_nav_menu( [ 
    'menu_id' => 'primary-menu',
    'menu_class' => 'h-full list-none p-0 m-0 flex items-start text-left font-bold flex-col md:flex-row md:pl-6 md:justify-center'] 
    ); ?>
    
</nav>
