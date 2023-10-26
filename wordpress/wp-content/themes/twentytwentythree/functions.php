<?php
function remove_menu_items(){
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'options-general.php' );
    remove_menu_page( 'edit-comments.php' );
 }
 
 add_action( 'admin_menu', 'remove_menu_items', 999 );
 ?>