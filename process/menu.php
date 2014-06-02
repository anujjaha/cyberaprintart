<?php
session_start(); 
if($_SESSION['login'] != "true")
{
	header("location:index.php");
}
?>
<br>


<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
         <title>
        Cybera Job Process || design and develop by Anuj Jaha [ IT Gold Medalist ]
        </title>
    </head>
    
    <body>
    <nav>
            <ul class="fancyNav">
                <li id="home">
                <a href="home.php">
                Home
                </a>
                </li>
                <li id="news"><a href="new.php">New</a></li>
                <li id="news"><a href="customer.php">Customer</a></li>
                <li id="about"><a href="today.php">Today</a></li>
               <!-- <li id="services"><a href="view.php">view</a></li>-->
                <li id="contact"><a href="search.php">Search</a></li>
                <li id="contact"><a href="status.php">Status</a></li>

                 <li id="contact"><a href="logout.php">Log Out</a></li>
               </ul>
               </nav>
               
       </body>
</html>
