<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php



    $id = $_GET['id'];
    include('getTodo.php');

    $data = json_decode($response, true);
    $todoId = $data['id'];
    $title = $data['title'];
    $created = $data['created'];
    $completed = $data['completed'];
    $description = $data['description'];
    $lastUpdated = $data['lastUpdated'];
    
?>

<body>
    <header>
        <h3> WELCOME TO YOUR TODO LIST</h3>
    </header>
    <div id="taskdiv">
        <section>
            <h1>Edit Task</h1>
            <form action="edit.php" method="post" enctype="application/x-www-form-urlencoded" >
                <input type="text" value="<?php echo $title ?>" id="task1" name="todo_title"  required/>
                <input type="text" value="<?php echo $description ?>" id="task1" name="todo_description" required/>
                <input type="text" value="<?php echo $todoId ?>" id="task2" name="id" hidden>
                <input type="text" value="<?php echo $created ?>" id="task2" name="created" hidden/>
                <!-- <label>
                    <input style="height: 200; width: 200;" type="checkbox" name="complete" id="checkbox" />
                    <p>Check here to complete</p>
                </label> -->
                <input type="submit" class="btn" id="task2" placeholder="save task" />
            </form>
        </section>
    </div>

</body>

</html>