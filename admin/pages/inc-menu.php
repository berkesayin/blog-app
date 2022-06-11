<?php 
session_start(); 

if(@$_SESSION["girisKontrol"] !== 1) {
    header("Location: index.php?i=hack");
}

?>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="anasayfa.php"> Management System for <?= $_SESSION["username"] ?> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="anasayfa.php"><i class="fa fa-dashboard fa-fw"></i> Home Page</a>
                        </li>
                        
                        <li>
                            <a href="blog_sports.php"><i class="fa fa-table fa-fw"></i> Sports Articles</a>
                        </li>

                        <li>
                            <a href="blog_economy.php"><i class="fa fa-table fa-fw"></i> Economy Articles</a>
                        </li>

                        <li>
                            <a href="blog_culture.php"><i class="fa fa-table fa-fw"></i> Culture Articles</a>
                        </li>

                        <li>
                            <a href="users_list.php"><i class="fa fa-table fa-fw"></i> Members List</a>
                        </li>

                        <li>
                            <a href="about_us.php"><i class="fa fa-table fa-fw"></i> About Us</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>