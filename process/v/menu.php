<?php
session_start(); 
if($_SESSION['login'] != "true")
{
	header("location:index.php");
}
?>
<head>
<link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        <title>
        	Admin Department || Cybera Process || design and develop by Anuj Jaha [ IT Gold Medalist ]
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
                <li id="news"><a href="job.php">Job</a></li>
                <li id="about"><a href="today.php">Today</a></li>
                <li id="services"><a href="search.php">Search</a></li>
                <li id="services"><a href="status.php">Status</a></li>
                <li id="services"><a href="party.php">Party</a></li>
                <li id="contact"><a href="logout.php">Logout</a></li>
               
               </ul>

               </nav>
</body>