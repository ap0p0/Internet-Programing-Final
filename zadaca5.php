<head>

<?php
    $width="";
    $height="";
if(isset($_GET['submit'])){


    $width = $_GET['width'];
    $height = $_GET['height'];
    $top = $_GET["top"];
    $left = $_GET["left"];
}
?>

</head>

<body>
    <form action="divwidth.php" method="get">

        <input type="text" name="width" id="width" placeholder="width" value="<?php echo $width ?>">
        <input type="text" name="height" id="height" placeholder="height" value="<?php echo $height ?>">
        <input type="text" name="top" id="top" placeholder="Top placement" value="<?php echo $top ?>">
        <input type="text" name="left" id="left" placeholder="Left placement" value="<?php echo $left ?>">
        <input type="submit" name="submit" value="submit">

    </form> 

    <div style=" width: <?php echo $width; ?>; height: <?php echo $height; ?>; top: <?php echo $top; ?>; left: <?php echo $left; ?>; background-color: #f7edd0; position:absolute;">


</body>
