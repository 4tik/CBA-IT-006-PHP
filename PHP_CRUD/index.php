<?php
include "config.php";
$query = "SELECT * FROM infoperson";
$result = $connection->query($query);
$connection->close();
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
    <div class="row">
        <div class="col-md-2">
        <a href="create.php" class="btn btn-success">Create</a>
        <br/>
        </div>
    </div>
    <div class="row">
        
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $row['ID'] . "</td>
                        <td>" . $row['FirstName'] . "</td>
                        <td>" . $row['LastName'] . "</td>
                        <td>" . $row['Age'] . "</td>
                        <td>" . $row['Gender'] . "</td>
                        <td>
                            <a class='btn btn-info' href='update.php?ID=".$row['ID']."'>Update</a>
                            <a class='btn btn-danger' href='delete.php?ID=".$row['ID']."'>Delete</a>
                        </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>