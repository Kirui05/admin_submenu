<?php

// Add the main admin menu
function admin_menu() {
    add_menu_page(
        'Admin Menu',    // Page title
        'Admin Menu',    // Menu title
        'manage_options', // Capability required
        'admin-menu',    // Menu slug
        'admin_menu_page', // Callback function
        'dashicons-admin-generic', // Menu icon
        10 // Menu position
    );
}
add_action('admin_menu', 'admin_menu');

// Callback function for the main admin menu page
function admin_menu_page() {
    echo '<h1>Admin Menu</h1>';
    echo '<p>Welcome to the Admin Menu!</p>';
}

// Callback function for the "Create Employee" submenu
function create_employee_page() {
    echo '<h1>Create Employee</h1>';
    // Add your code to handle creating an employee here
}

// Callback function for the "View Employees" submenu
function view_employees_page() {
    echo '<h1>View Employees</h1>';
    // Add your code to handle viewing employees here
}

// Add submenus to the main admin menu
function add_submenus() {
    add_submenu_page(
        'admin-menu', // Parent menu slug
        'Create Employee', // Page title
        'Create Employee', // Menu title
        'manage_options', // Capability required
        'create-employee', // Menu slug
        'create_employee_page' // Callback function
    );

    add_submenu_page(
        'admin-menu', // Parent menu slug
        'View Employees', // Page title
        'View Employees', // Menu title
        'manage_options', // Capability required
        'view-employees', // Menu slug
        'view_employees_page' // Callback function
    );
}
add_action('admin_menu', 'add_submenus');

?>