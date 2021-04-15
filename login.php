
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="sources/icon.ico">
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="stylesheet" href="css/styl.css">
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
                    <p id="home_title">Login</p>
                    <p id="home_sub">Welcome back! Please login to  continue.</p>
                    <p style="height:3vh"></p>
                    <form>
                        <label for="Username" class="form-label">Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-sm">
<!--                                <i class="fa fa-user fa-2x"></i>-->
                            </span>
                            </div>
                            <input type="text" class="form-control py-md-2" id="Username">
                        </div>
                        <label for="Password" class="form-label">Password</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-sm">
<!--                                <i class="far fa-user"></i>-->
                            </span>
                            </div>
                            <input type="password" class="form-control py-md-2" id="Password">
                        </div>
                        <p style="height:3vh"></p>
                        <button class="btn p-3 form-control py-md-2" id="btn-login">Continue</button>
                    </form>
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



