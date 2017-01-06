        <header class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler mobile-toggler hidden-lg-up">&#9776;</button>
                <a class="navbar-brand" href="./index.php"></a>
                <ul class="nav navbar-nav hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                    </li>
                    <li class="nav-item p-x-1">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item p-x-1">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item p-x-1">
                        <a class="nav-link" href="#">Options</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right hidden-md-down">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="./img/user-default.png" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="hidden-md-down"><?php echo $_SESSION['username']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item p-x-1">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </header>