<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <h1>SUPERGLOBAL ARRAY</h1>
  <?php
  //-----------------
  //-----GET DAN POST----------
  //-----------------

  // if (isset($_GET['submit'])){
  // echo $_GET['password'];
  // }

  echo $_SERVER['REMOTE_ADDR'];
  die();

  session_strat();

  $user = 'hilman';
  $password = '123';

  if (isset($_POST['submit'])){

    if($_POST['nama'] == $user &&    
      $_POST['password'] == $password){

    //cookie
    //setcookie(key,nilai,expire)
    setcookie('nama_user',$_POST['nama'],time()+120);

    //session
    $_SESSION['nama_user'] = $_POST['nama'];

    //memindahkan halaman
    header('Location: profile.php');
      }else{
        echo 'login gagal';
      }
  }
  ?>
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>