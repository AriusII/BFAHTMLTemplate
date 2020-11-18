<nav class="clear">
  <div class="container clear">
    <div class="m-left">
      <a href="index.php" class="active">HOME</a>
  <?PHP
    if(isset($_SESSION['user_admin']) && checkInt($_SESSION['user_admin']) && $_SESSION['user_admin']>=0) {
      echo'<a href="index.php?s=store">STORE</a>';
      echo'<a href="index.php?s=account">ACCOUNT</a>';
    }
    else
    {
      echo'<a href="index.php?s=register">REGISTER</a>';
      echo'<a href="index.php?s=login">LOGIN</a>';
    }
?>
    <a href="index.php?s=rankings">RANKS</a>
    </div>
    <a href="/" class="logo"></a>
    <div class="m-right">
      <a href="index.php?s=news">NEWS</a>
      <a href="#">FORUM</a>
      <a href="index.php?s=contact">CONTACT</a>
    </div>
  </div>
</nav>