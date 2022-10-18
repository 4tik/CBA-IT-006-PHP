<?php
//header("Location: index.php");
include "config.php";

if (isset($_GET['ID'])) {
    $userId = $_GET['ID'];
    $sql = "SELECT * FROM infoperson WHERE ID=" . $userId;
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $age = $row['Age'];
            $gender = $row['Gender'];
        }
    }
}

if (isset($_POST["update"])) {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $ID = $_POST["ID"];

    $query = "UPDATE infoperson SET FirstName='".$firstName."', LastName='".$lastName."',
    Age=".$age.",Gender='".$gender."' WHERE ID=".$ID;

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
            <h2>Update User</h2>
            <hr/>
            <input type="hidden" value="<?php echo $userId; ?>" name="ID"/>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">First Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" value="<?php echo $firstName; ?>" name="firstName" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">Last Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" value="<?php echo $lastName; ?>" name="lastName" />
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
                        <input class="form-control" value="<?php echo $age; ?>" name="age" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-2">Gender</label>
                    <div class="col-sm-10">
                        <input type="radio" value="MALE" <?php if ($gender == "MALE") echo "checked"; ?> name="gender" /> MALE
                        <input type="radio" value="FEMALE" <?php if ($gender == "FEMALE") echo "checked"; ?> name="gender" /> FEMALE
                    </div>
                </div>
            </div>
        </div>
        <br />
        <button class="btn btn-success" name="update" type="submit">Update</button>
        <a href="index.php" class="btn btn-info">Manage User</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>