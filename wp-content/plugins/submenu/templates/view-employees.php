<?php
  global $wpdb;
  $employees = $wpdb->get_results("SELECT * FROM wp_employees");
  
//   var_dump($tickets);
  ?>
  
  
  
  <div class="container">
    <h1>View Employees</h1>
    <?php if (empty($tickets)): ?>
      <p>employees</p>
    <?php else: ?>
      <table>
        <tr>
          <th>employee-number</th>
          <th>department</th>
          <th>phone-number</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
          <tr>
            <td><?php echo $employee->employee_number; ?></td>
            <td><?php echo $employee->department; ?></td>
            <td><?php echo $employee->phone_number; ?></td>
            <td>
              
                <form action="view.php" method="POST">
                  <input type="hidden" name="employee_number" value="<?php echo $employee->employee_number; ?>">
                  <!-- <button type="submit">Mark as Done</button> -->
                </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
    <a href="index.php">Back to Dashboard</a>
  </div>
 <style>
.container{
    margin: 150px;
    background-color: white;
    padding: 20px;
    border: 1px solid green;
    border-radius: 10px;
}
h1{
    font-weight: bolder;
}
button{
    background-color: green;
    border: none;
    padding: 10px;
    color: white;
    border-radius: 10px;
}
 </style>