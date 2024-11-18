<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>
    <style>
      body {
       background-color: gray;
       padding: 15%;
     }
     h1 {
       color: blue;
       text-align: center;
     }
     h2 {
       color: blue;
       text-align: center;
     }
     .div1{
       
     }
     input {
       font-size: 15px;
     }
     button {
      display: inline-block;
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      color: white;
      background-color: #007BFF;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      text-decoration: none;
     }
     table {
       border: solid 5px;
     }
     tr{
       color: green;
       text-align: center;
     } 
      
    </style>
     </head>
<div class="class">
    <h1>Task List</h1>
      <table>
        <tr><th>Task Name</th></tr>
<?php if ($result->num_rows > 0): ?>
<?php 
while ($task = $result->fetch_assoc()): 
?>
        <tr><td><?php echo $task['taskname'];?> 
        </td>
        <td><a class="edit" href="edit_task.php?id=<?php echo $task['id']; ?>">Edit</a></td>
        <td><a class="del" href="delete_task.php?id=<?php echo $task['id']; ?>">Delete</a></td>
</tr>
        
<?php endwhile; ?>
 <?php else: ?>
          <tr><td colspan="3">No tasks</td></tr>
        <?php endif; ?>
</table>
</div>
     <div>
   <h2>
      Add Task
    </h2>
  
      <form method="POST" action="add_task.php" >
          
      <input type="text" size="10" name="task-name" required placeholder="Enter Task"/>
      <button type="submit" name="subadd">
        Add Task
</button>
</form>
</div>
</body>
</html>