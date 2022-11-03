<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>
      <h1>Loop PHP</h1>
    <?php 
      $warna = ['merah','kuning','hijau','abu-abu','hitam','biru'];

      for($i=0; $i<count($warna)-1; $i++)
        {
          echo "-------------";
          echo $warna [$i];
          echo "------------- <br>";
        }
      foreach($warna as $w){
          echo "-------------";
          echo $w;
          echo "------------- <br>";
        }

    ?> 

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>