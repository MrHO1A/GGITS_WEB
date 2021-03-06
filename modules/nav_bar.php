<?php
/**
 * Created by PhpStorm.
 * User: AMAN
 * Date: 6/22/2018
 * Time: 8:32 PM
 * Hold Navbar And Its Property
 */

?>

<nav class="navbar navbar-expand-md maroon ">
    <!-- Brand -->

    <a class="navbar-brand" href="./index">GGITS</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fa fa-bars text-white" aria-hidden="true"></i> Menu
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse w-100 " id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about#vision">Vision</a>
                    <a class="dropdown-item" href="about#mission">Mission</a>
                    <a class="dropdown-item" href="about#management">Management Board</a>
                    <a href="about#quality" class="dropdown-item">Quality Policy</a>
                    <a href="http://ggits.org/showpage.php?mainid=2&subid=204&menu=submain" class="dropdown-item">National Ranking</a>
                    <a href="about#peo" class="dropdown-item">PEO</a>
                    <a href="http://ggits.org/showpage.php?mainid=2&subid=232&menu=submain" class="dropdown-item">Annual Budget</a>
                    <a href="http://ggits.org/showpage.php?mainid=2&subid=233&menu=submain" class="dropdown-item">Mandatory Disclosure</a>
                </div>
            </li>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Messages</a>
                <div class="dropdown-menu" aria-labelledby="messages">
                    <!--Add Links Using Script-->
                       <?php include_once "message_url_adder.php"; ?>
                    <!--Add links using script end-->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="facilities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                <div class="dropdown-menu" aria-labelledby="facilities">
                    <a href="http://ggits.org/showpage.php?mainid=33&subid=61&menu=submain" class="dropdown-item">Library</a>
                    <a href="http://ggits.org/showpage.php?mainid=33&subid=64&menu=submain" class="dropdown-item">Sports</a>
                    <a href="http://ggits.org/showpage.php?mainid=33&subid=65&menu=submain" class="dropdown-item">Social Activities</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="departments" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
                <div class="dropdown-menu" aria-labelledby="departments">
                    <a href="cse" class="dropdown-item">Dept. of CSE</a>
                    <a href="ec" class="dropdown-item">Dept. of ECE</a>
                    <a href="ee" class="dropdown-item">Dept. of EE</a>
                    <a href="me" class="dropdown-item">Dept. of ME</a>
                    <a href="ex" class="dropdown-item">Dept. of EX</a>
                    <a href="mca" class="dropdown-item">Dept. of MCA</a>
                    <a href="civil" class="dropdown-item">Dept. of Civil Engineering</a>
                    <a href="it" class="dropdown-item">Dept. of IT</a>
                    <a href="http://ggits.org/showpage.php?mainid=47&subid=151&menu=submain" class="dropdown-item">Dept. of Applied Sciences</a>
                    <a href="http://ggits.org/showpage.php?mainid=47&subid=178&menu=submain" class="dropdown-item">Dept. of MBA</a>
                    <a href="http://ggits.org/showpage.php?mainid=47&subid=187&menu=submain" class="dropdown-item">Placement cell</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="training" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Training and Placement</a>
                <div class="dropdown-menu" aria-labelledby="training">
                    <a href="http://ggits.org/showpage.php?mainid=57&subid=59&menu=submain" class="dropdown-item">Campus-2018</a>
                    <a href="http://ggits.org/showpage.php?mainid=57&subid=59&menu=submain" class="dropdown-item">Campus-2017</a>
                    <a href="http://www.ggits.org/images/2012-16.jpg" data-toggle="lightbox" class="dropdown-item">Campus-2016</a>
                    <a href="http://www.ggits.org/images/2011-15.jpg" data-toggle="lightbox" class="dropdown-item">Campus-2015</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="awards" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Awards</a>
                <div class="dropdown-menu" aria-labelledby="awards">
                    <a href="http://ggits.org/images/academics-2010.jpg" data-gallery="academic" data-toggle="lightbox" data-title="Academic Achievements" class="dropdown-item">Academic Achievements</a>
                    <div data-toggle="lightbox" data-gallery="academic" data-remote="http://ggits.org/images/rgpv-awards.pdf" data-type="url" data-title="Academic Achievements"></div>
                    <a href="#" class="dropdown-item">Outstanding Achievements</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="http://ggits.org/showpage.php?mainid=174&menu=main" class="nav-link">Alumini</a>
            </li>
            <li class="nav-item">
                <a href="./student" class="nav-link">Student</a>
            </li>
            <li class="nav-item">
                <a href="./faculty_and_staff" class="nav-link">Faculty</a>
            </li>
        </ul>
    </div>
</nav>
