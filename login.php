
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        include 'partials/top.php'; 
        include 'configuration.php';
        ?>
    </head>
    <body>
        <div class="container">
        <form method="POST" action="login-action.php">
            <div class="row">
                <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                    <div class="card-group ">
                        <div class="card p-a-2">
                            <div class="card-block">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <div class="input-group m-b-1">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group m-b-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn btn-primary p-x-2">Login</button>
                                    </div>
                                    <div class="col-xs-6 text-xs-right">
                                        <button type="button" class="btn btn-link p-x-0">Forgot password?</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-14">
                                    <br>
                                        <?php 
                                        if (isset($_GET['message'])) {
                                            if ($_GET['message'] == "failure") {
                                                echo "<div class='alert alert-danger' role='alert'>Failure To Login</div>";
                                            }
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-inverse card-primary p-y-3" style="width:44%">
                            <div class="card-block text-xs-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button type="button" class="btn btn-primary active m-t-1"><a href="register.html">Register Now!</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Bootstrap and necessary plugins -->
        <?php include 'partials/scriptjs.php'; ?>
    </body>
</html>