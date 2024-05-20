
<?php
require_once 'connection.php';

$sql_select_query = "SELECT * FROM `member` ";
$select_query_result = $conn->query($sql_select_query);

?>

<html>
    <head>
        <script src="delete_box.js"></script>
        <script src="input_form.js"></script>
    </head>

<body>
<?php if(isset($_SESSION['message'])){ ?>
        <h2 style="color: green;"><?= $_SESSION['message'] ?></h2>
    <?php 
    unset($_SESSION['message']);
} ?>
    <h1 style="display:flex ; justify-content:center ; margin-left:30px">USERS</h1>
    <table style="margin-left:30px ; " class="table">
        <thead>
            <tr style="color:white ; background-color: B0A695 ;  font-family: 'Times New Roman', Times, serif; font-size:30px ;">
                <th style="border:2px double black ; width:300px ; height : 100px ">I'D</th>
                <th style="border:2px double black ; width:300px ; height : 100px">Employee Name</th>
                <th style="border:2px double black ; width:300px ; height : 100px">Department</th>
                <th style="border:2px double black ; width:300px ; height : 100px">Age</th>
                <th style="border:2px double black ; width:300px ; height : 100px">Edit</th>
                <th style="border:2px double black ; width:300px ; height : 100px">Delete</th>
            </tr>
        </thead>



        <tbody style="color:white ; background-color: B0A695 ; height : 100px ; text-align:center" id="table-body">

            <?php
            if ($select_query_result->num_rows > 0) {
                while ($row = $select_query_result->fetch_assoc()) {
            ?><tr>
                        <td ><?php echo $row["id"]; ?></td>
                        <td ><?php echo $row["Employee Name"]; ?></td>
                        <td ><?php echo $row["Department"]; ?></td>
                        <td ><?php echo $row["Age"]; ?></td>
                        <td>
                            <a id="update_button" style="text-decoration:none ; color:D20062 ; border:2px double 776B5D" class="btn btn-info" href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
                </td>
                            &nbsp;
                            <td>
                            <a style="text-decoration:none ; color:red ; border:2px double 776B5D" href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm_delete()">Delete</a>
                        </td>

                    </tr><?php
                        }
                    } else {
                        echo "0 results Found <br>";
                    }
                            ?>



        </tbody>

    </table>

</body>

</html>

<?php
$conn->close();
?>