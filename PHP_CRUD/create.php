<?php
//header("Location: index.php");
include "config.php";
if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    $query = "INSERT INTO infoperson(FirstName, LastName, Age, Gender) 
    VALUES('$firstName', '$lastName', $age, '$gender')";

    $result = $connection->query($query);
    if ($result == TRUE) {
        //echo  "Successfull to insert information<br/>";
        header("Location: index.php");
    } else {
        echo $connection->error;
    }
    $connection->close();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
</head>

<body>

    <form action="" method="POST">
        <div class="row">
            <h2>Create User</h2>
            <hr/>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">First Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="firstName" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">Last Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="lastName" />
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">Age</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="age" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">Gender</label>
                    <div class="col-sm-10">
                        <input type="radio" value="MALE" name="gender" /> MALE
                        <input type="radio" value="FEMALE" name="gender" /> FEMALE
                    </div>
                </div>
            </div>
        </div>
        <br />
        <button class="btn btn-success" name="submit" type="submit">Submit</button>
        <a href="index.php" class="btn btn-info">Manage User</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>