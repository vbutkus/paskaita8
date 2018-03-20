<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">

<title>Formos</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if(empty($_POST['name']) || empty($_POST['email']) || strlen($_POST['name'] < 5)) {
        $error = 'Bad entry douchebag';
        if (strlen($_POST['name'] <= 1)) {
            $error = "Name too short";
        }
    }
    else {
        $success = 'Information added';
        $file = 'formos.txt';
        $previousData = file_get_contents($file);
        $postData = $_POST['name'] . " " . $_POST['email'] . "\n";
        file_put_contents($file, $previousData . $postData);
    }
}


?>

<form method="post" action="../index.php">
    <input type="text" value="name" name="name" required>
    <input type="text" value="email" name="email" required>
    <input type="tel" value="+370" required>
    <button name="submit" value="submit">Submit</button>


</form>

<br><br>



<div class="container">
    <H1> form</H1>
    <div class="row">
        <div class="col-4">
            <?php
            if($error) {
                echo "<div class='alert alert-danger'>".$error."</div>";
            }
            elseif($success) {
                echo "<div class='alert alert-success'>".$success."</div>";
            }
            ?>
            <form method="POST" action="paskaita-8-formos.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>




</body>
</html>