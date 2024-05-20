
<?php

require_once 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $department = $_POST["department"];
    $age = $_POST["age"];

    $sql = "UPDATE `member` SET `Employee Name`='$name', `Department`='$department', `Age`='$age' WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        $last_id = $id;
        $_SESSION["message"] = "Record is updated to the table sucessfully  <br> " . "Last updated I'd is : " . $last_id . "<br>";


        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `member` WHERE `id`='$user_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['Employee Name'];
            $department = $row['Department'];
            $age  = $row['Age'];
        }
?>

<html>
<body style="color:white ; background-color: B0A695">
    <div style="display:flex ; justify-content:center ; color:black">
        <h2>User Update Form</h2>
    </div>
    <div style="display:flex ; justify-content:center">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
            <label for="department">Department</label>
            <select id="department" name="department">
                <option value="IT" <?php if($department == 'IT') echo 'selected'; ?>>IT</option>
                <option value="sales" <?php if($department == 'sales') echo 'selected'; ?>>Sales</option>
            </select><br><br>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="<?php echo $age; ?>" required><br><br>
            <button style="background-color: B0A695; cursor: crosshair; border: 1px double black; margin-left: 100px" type="submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
    } else {
        header('Location: select.php');
    }
}

$conn->close();
?>
