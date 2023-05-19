<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header('Location: ../../index.php');
  exit;
}

// Assuming you have a database connection established

// Function to create a new ticket in the database
function create_employee_page($employee_number, $department, $phone_number)
{
  // Implement your database query here to create a new ticket
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $employee_number = $_POST['employee_number'];
  $department = $_POST['department'];
  $phone_number = $_POST['phone_number'];

  create_employee_page($employee_number, $department, $phone_number);
  header('Location: index.php');
  exit;
}
?>

