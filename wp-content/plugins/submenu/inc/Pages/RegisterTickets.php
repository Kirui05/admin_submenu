<?php
/**
 * @package submenuPlugin
 */

 namespace Inc\Pages;

 class RegisterTickets{
    public function register(){
        $this->create_table_to_db();
        $this->add_employee_to_db();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'wp_employees';

        $employee_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            employee_number int NOT NULL,
            department text NOT NULL,
            phone_number text NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($employee_details);
    }

    function add_employee_to_db(){
        if(isset($_POST['submitbtn'])){
            $data =[
                'employee_number'=> $_POST['ticketId'],
                'department'=> $_POST['title'],
                'phone_number'=> $_POST['description']
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'tickets';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
                echo "<script> alert('employee created successfully'); </script>";
            }else{
                $errormessage = true;
                echo "<script> alert('Unable to create'); </script>";
            }
        }
    }
 }