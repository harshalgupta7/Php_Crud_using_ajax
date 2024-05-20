
<html>

<head>
    <title>
        Employee Form
    </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body style="background-color:F3EEEA">
    <div style="display:flex ; justify-content:space-between ; color:white ; background-color: B0A695; margin: 5px 2px 10px 2px; outline-style: double; outline-color: 776B5D;">

        <div style="padding-left:20px">
            <h1><b>Welcome to Employee Database</b></h1>
        </div>

        <div style="padding-right:20px; padding-left:20px ; background-color: B0A695"><button id="add_button">
                <h1 style="font-variant:small-caps"><b>ADD</b></h1>
            </button>
        </div>

    </div>


    <?php if(isset($_SESSION['message'])){ ?>
        <h2 style="color: green;"><?= $_SESSION['message'] ?></h2>
    <?php } ?>
    
    <button id="table_button">Show Table</button>
    <!-- <button id="hide_table_button">Hide data</button> -->

    <div id="table_container" style="display:flex ; justify-content:center ; display:none;">
        

    </div>

</body>

</html>