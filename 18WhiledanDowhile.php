<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $warna = ['merah','Hijau','kuning','Biru','Hitam'];

      $i = 5;

      // while($i < count($warna)){
      //   echo $warna[$i]. "<br>";
      //   $i++;
      // }

      // Do While akan mengeksekusi program minimal 1x walopun tidah memenuhi Syarat
      do{
        echo '-----------------------------';
        echo $warna [$i]. "<br>";
        $i++;
      }while ($i <count($warna));
    ?> 

   
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>