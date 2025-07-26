<?php
// Get the current file name
$currentPage = basename($_SERVER['PHP_SELF']);
$hideLogoPages = ['rainbow.php', 'gillan.php']; // add more as needed
?>

<!-- ID TOP TO SCROLL FROM BOTTOM -->
<body id='top'>

<!-- LOGO WITH GROUP PIC -->
<?php if (!in_array($currentPage, $hideLogoPages)): ?>
  <div id='header-logo-pic'>
    <p id='fascinate_font'>Deep Purple</p>
    <img src="imgs/deeppurplelogo.png" alt="logo"/></div>
<?php endif; ?>

<!-- NAV BAR -->
<nav id='main-nav'>
    <p>Click below to explore the different Deep Purple lineups and related projects</p>
    <ul>
        <li><a href="index.php"><span class='bolded-nav'>Home</span></a></li>
        <li><a href="mark1.php"><span class='bolded-nav'>Mark I</span> - Early Years</a></li>
        <li><a href="mark2.php"><span class='bolded-nav'>Mark II a</span> - Golden Era </a></li>
        <li><a href="mark3.php"><span class='bolded-nav'>Mark III</span> - Coverdale, Hughes Era</a></li>
        <li><a href="mark4.php"><span class='bolded-nav'>Mark IV</span> - Bolin era</a></li>
        <li><a href="mark2_reunion.php"><span class='bolded-nav'>Mark II b</span> - Reunion</a></li>
        <li><a href="mark5.php"><span class='bolded-nav'>Mark V</span> - Joe Lynn Turner era</a></li>
        <li><a href="mark2_3.php"><span class='bolded-nav'>Mark II c</span> - 2nd Reunion</a></li>
        <li><a href="mark6.php"><span class='bolded-nav'>Mark VI</span> - Steve Morse era</a></li>
        <li><a href="mark7.php"><span class='bolded-nav'>Mark VII</span> - Don Airey era</a></li>
        <li><a href="mark8.php"><span class='bolded-nav'>Mark VIII</span> - Simon McBride era</a></li>
        <li><a href="rainbow.php"><span class='bolded-nav'>Rainbow</span> - Ritchie Blackmore solo</a></li>
        <li><a href="gillan.php"><span class='bolded-nav'>Ian Gillan</span> - Ian Gillan Solo</a></li>
    </ul>
</nav>
