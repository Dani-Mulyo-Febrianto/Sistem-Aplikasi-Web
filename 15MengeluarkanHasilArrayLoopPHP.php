<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>
      <h1>Loop PHP</h1>
    <?php 
      $warna = ['merah','kuning','hijau','abu-abu','hitam'];

      for($i=0; $i<count($warna); $i++)
        {
          echo "-------------";
          echo $warna [$i];
          echo "------------- <br>";
        }


    ?> 

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>