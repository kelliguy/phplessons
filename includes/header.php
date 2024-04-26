<?php
session_start
?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">Operators</a>
        </li>
      
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<body>
<div>
  <?php 
  if (isset($_SESSION['userId'])) {
    echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';
  }
   else {
    echo ' <form action="includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>';
   }
  ?>

</div>
  </body>