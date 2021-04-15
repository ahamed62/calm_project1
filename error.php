<?php
if (isset($_GET["error"])) {
    $error = $_GET["error"];
    }
else{
    $error = "00000";
    $message = "Error undetected";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="shortcut icon" href="sources/icon.ico">
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="stylesheet" href="css/styl_error.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400300;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

</head>
<style>
    input:focus, textarea:focus, select:focus{
        outline: none;
    }
</style>
<body>
<div class="container-fluid m-0" >
    <div class="row vh-100" >
        <div class="col-md-3 bg-white ">
            <div class="col-md-11 m-auto">
                <div class="card-body p-4 my-5">
                    <p style="height:20vh; "></p>
                    <p id="home_title" style="margin-bottom: 0px">Error !</p>
                    <p id="home_sub" style="margin: 0px 0px">Something went wrong.</p>
                    <p id="home_sub" style="margin-bottom: 0px">Reference Code: <b><?php echo $error; ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 px-0 flex-fill bg-dark d-none d-md-block" id="bg_wrapper">
            <div class="container" id="logo_wrapper">
            </div>
        </div>
    </div>
</div>
</body>
</html>