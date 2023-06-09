<?php
include_once('fetchAllTodos.php');
$data = json_decode($response, true);
foreach ($data['entries'] as $entry) {
  $key = $entry['key'];
  $id = $entry['value']['id'];
  $title = $entry['value']['title'];
  $created = $entry['value']['created'];
  $completed = $entry['value']['completed'];
  $description = $entry['value']['description'];
  $lastUpdated = $entry['value']['lastUpdated'];

  // Process or use the values as needed
  // ...
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
<div  class="mainTask">

  <header>
    <h3>  TODO LIST</h3>
  </header>
  <br>
  
    
      <h1>Tasks</h1>
      <form action="postTodo.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="text" id="task1" name="todo_title" placeholder="Create list" required>
        <input type="text" id="task1" name="todo_description" placeholder="Description..."required>
        <input type="submit" class="btn" id="task2" placeholder="save task">
      </form>
      </div>


   <div class="container">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">todo_id</th>
            <th scope="col">todo_title</th>
            <th scope="col">todo-description</th>
            <th scope="col">todo_completed</th>
            <th scope="col">todo_created_date</th>
            <th scope="col">todo_last_updated</th>
            <th scope="col"> Edit </th>
            <th scope="col"> Delete </th>
          </tr>
        </thead>
        <tbody>
          </tr>

          <?php


          foreach ($data['entries'] as $entry) {
            $key = $entry['key'];
            $id = $entry['value']['id'];
            $title = $entry['value']['title'];
            $created = $entry['value']['created'];
            $completed = $entry['value']['completed'];
            $description = $entry['value']['description'];
            $lastUpdated = $entry['value']['lastUpdated'];

            // Process or use the values as needed
            // ...
          


            ?>
            <tr>

              <td>
                <?php echo $id ?>
              </td>
              <td>
                <?php echo $title ?>
              </td>
              <td>
                <?php echo $description ?>
              </td>
              <td>
                <?php echo $completed ?>
              </td>
              <td>
                <?php echo $created ?>
              </td>
              <td>
                <?php echo $lastUpdated ?>
              </td>
              <td>
                <button class="show-modal btn"><a href="editTodo.php?id=<?php echo $id ?>">Edit</a</button>
                <span class="overlay"></span>
              </td>
              <td><button class="btn"><a href="deleteTodo.php?id=<?php echo $id ?>">Delete</a></button></td>
            </tr>



            <?php
          }
          ?>
        </tbody>
      </table>

      </div>




    

 
    
</body>

</html>