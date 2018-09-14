<?php
    require('connection.php');
    $manufacturer = $_POST['manufacturer'];
    $mark = $_POST['mark'];
    $name = $_POST['name'];
    $cc = $_POST['cc'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $used = $_POST['used'];

    
    
    $sql = "INSERT INTO allcars VALUES (null,'$mark','$name','$cc','$price','$year','$used')";
    $query = mysqli_query($db,$sql);

    if ($query) {
        header('Location: index.php?done=1');
    } else {
        header('Location: index.php?done=2');
    }
    