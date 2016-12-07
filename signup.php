<?php include('includes/header.php');

if ($logged_in) {
  echo '<h3>Already logged in! Redirecting...</h3>';
  echo "<script>window.location = '//blue.butler.edu/~hlingren/CME419/tickethub/account.php';</script>";
}

?>

  <main>
  <div class="container">

    <h3>Sign up for a TicketHub account</h3>

    <div class="row">
      <form class="col s12" action="signup.php" method="POST">
        <div class="row">
          <div class="col s2">
            <i class="material-icons large">person</i>
          </div>
          <div class="input-field col s5">
            <input id="firstname" name="firstname" type="text" class="validate">
            <label for="firstname">First Name</label>
          </div>
          <div class="input-field col s5">
            <input id="lastname" name="lastname" type="text" class="validate">
            <label for="lastname">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="col s2">
            <i class="large material-icons">email</i>
          </div>
          <div class="input-field col s10">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="col s2">
            <i class="large material-icons">lock</i>
          </div>
          <div class="input-field col s10">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s2 offset-5">
            <button class="btn orange accent-2 waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
