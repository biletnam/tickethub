<?php
  session_start();
  if (!isset($_SESSION['userID'])) {
    header('Location: https://blue.butler.edu/~hlingren/CME419/tickethub/login.php');
  }

  include('includes/header.php');
?>






<?php include('includes/footer.php'); ?>
