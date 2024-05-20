
<?php
// insertion of Record
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $department = $_POST["department"];
    $age = $_POST["age"];
   
    $sql_insert_query = "INSERT INTO `member` (`Employee Name`, `Department`, `Age`) VALUES ('$name', '$department', '$age')";

    if ($conn->query($sql_insert_query) === TRUE) {
        $last_id = $conn->insert_id;
        $_SESSION["message"] = "Record is added to the table sucessfully <br>" . "Last inserted i'd is :" . $last_id . "<br>";

        header('Location: index.php');
    } else {
        // echo "ERROR : <br>" . $conn->error;
        $_SESSION["error"] = "ERROR : <br>" . $conn->error;
    }
}

$conn->close();
?>

<html>
    <head>
        <title>
            INSERT FORM
        </title>
    </head>
    <body>
        <div id="insert_form_container" style="display:flex ; justify-content:center">
            <h2>
                Enter The Input data Required :
            </h2>
    
            <div style="padding-top:25px ; padding-left:30px">
                <form action="insert.php" method="post" id="insertForm">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="department">Department </label>
                    <select id="department" name="department">
                        <option value="IT">IT</option>
                        <option value="sales">Sales</option>
                    </select><br><br>
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required><br><br>
                    <button type="submit">Submit</button>
                </form>
            </div>    
        </div>
    </body>
</html>

