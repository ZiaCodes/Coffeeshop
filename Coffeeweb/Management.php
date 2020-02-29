<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:index.php');
    }
?>
<?php
    $title = "Management";
    $content = '<h3>COFFEE MANAGEMENT </h3>
            <div id="managsection">
                <a href="CoffeeAdd.php" class="managePage" id="Ad-1">Add New Coffee</a>
                <a href="UploadImage.php" class="managePage" id="Ad-2">Upload Image</a>
                <a href="OverView.php" class="managePage" id="Ad-3">Coffee Overview</a>
                </div>
                <form action="logout.php" method="post">
                <div id="logout">
                <a href="logout.php">Log Out</a></div></form>';

require 'template.php';

?>