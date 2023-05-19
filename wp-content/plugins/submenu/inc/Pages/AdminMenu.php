<?php
/**
 * @package submenuPlugin
 */

 namespace Inc\Pages;

class AdminMenu{
    public $pages;
    public function __construct(){
        // $this->pages= [
        //     [
        //         'page_title'=> 'Books Menu',
        //         'menu_title'=> 'Book Menu',
        //         'capability' => 'manage_options',
        //         'menu_slug'=> 'books_menu',
        //         'callback'=> function(){
        //             echo '<h1> Cohort 13 Books Menu </h1>';
        //         },
        //         'icon_url'=> 'dashicons-welcome-write-blog',
        //         'position'=> 110
            // ]];
     }

     function register(){
        add_action('admin_menu', [$this, 'add_admin_page']);
        // $this->settings->AddPages( $this->pages )->HasSubPage('View Books')->addSubPages($this->subpages)->register();
    }

    function add_admin_page(){
        add_menu_page('submenu', 'Create employee', 'manage_options', 'create_employee', [$this, 'admin_index_cb'], 'dashicons-welcome-write-blog', 110);
        add_menu_page('submenu', 'View employees ', 'manage_options', 'view_employees', [$this, 'admin_index_cb3'], 'dashicons-welcome-write-blog', 110);

    }

    function admin_index_cb(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/create_employee.php';  
    }

    function admin_index_cb3(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/view_employees.php';  
    }

}
?>