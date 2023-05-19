<!-- <!DOCTYPE html>
<html>

<head>
  <title>Ticketing System - Create Ticket</title>
  <link rel="stylesheet" type="text/css" href="../../theme/style.css">
</head> -->

<body>
  <div class="container">
    <h1>Create Employee</h1>
    <form action="" method="POST">
      <label for="employee-number">employee-number</label>
      <input type="int" name="employee-number" required>
      <label for="department">department</label>
      <input type="text" name="department" required>
      <label for="phone-number">phone-number</label>
      <input type="int" name="phone-number" required>
      <?php
      // Function to fetch employees from the database
      function getEmployees()
      {
       
        global $wpdb;

        $query = "SELECT id, username FROM wp_employees";
        // $result = $conn->query($query);

        $employees = $wpdb->get_results($query);
       

        return $employees;
      }

      foreach (getEmployees() as $employee) : ?>
        <option value="<?php echo $employee['id']; ?>">
          <?php echo $employee['username']; ?>
        </option>
      <?php endforeach; ?>
      </select>
      <button type="submit" name='submitbtn'>Create</button>
    </form>
  </div>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      width: 200px;
      align-items: center;
      gap: 20px;
      padding: 20px;
      background-color: white;
      border: 1px solid green;
      border-radius: 10px;
      margin: 150px;
    }

    h1 {
      font-weight: bolder;

    }

    form {
      display: flex;
      flex-direction: column;
    }

    button {
      color: white;
      background-color: green;
      margin-top: 20px;
      padding: 10px;
      font-size: larger;
      border: none;
      border-radius: 10px;
    }
  </style>

</body>

</html>