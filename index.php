<?php
    if (isset($_GET['done']) && !empty($_GET['done'])) {
        $done = $_GET['done'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-extend navbar-light bg-light">
    <a href="" class="navbar-brand">AllCars</a>
</nav> 
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3 class="text-center">Insert Car</h3>
            <div class="row">
                <div class="col-8 offset-2">
                    <form action="insertcar.php" method="post">
                        <input type="text" placeholder="manufacturer" name="manufacturer" class="form-control"><br>
                        <input type="text" class="form-control" name="mark" placeholder="mark"><br>
                        <input type="text" class="form-control" name="name" placeholder="name"><br>
                        <input type="number" class="form-control" name="cc" placeholder="cc"><br>
                        <input type="number" class="form-control" name="price" placeholder="price"><br>
                        <input type="date" class="form-control" name="year" placeholder="year"><br>
                        <input type="radio"  name="used" placeholder="year" value="1"> Used 
                        <input type="radio"  name="used" placeholder="year" value="0"> New <br>
                        <input type="submit" value="save" class="form-control btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h3 class="text-center">Search car</h3>
        </div>
    </div>
</div>
<?php
    if(isset($done)){ 
        if($done == 1){
            echo "<script>alert('Car saved succesfuly')</script>";
        }else{
            echo "<script>alert('Car did not saved succesfuly')</script>";

        }
    }
?>
</body>
</html>