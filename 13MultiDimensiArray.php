<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    //-----------Multi dimensi array
      $data = array(
                    array("kuning",12,"jeruk"),
                    array("merah",10,"apel"),
                    array("hijau",9,"timun")
                    );
    //00 01 02
    //10 11 12
    //20 21 22
    $data[1][2] = "nanas";
    echo $data[1] [2];


    ?> 

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>