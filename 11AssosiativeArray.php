<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Belajar Assosiative Array</h1>
    <?php 
      //ciri key => isi
      $data = array ("nama" => "hilman",
                     "umur" => 21,
                     "kerja" => "pengacara"
                    );
      $data2 = array ("warna" => "putih",
                     "Sekolah" => "perguruantinggi"
                    );
    //print_r($data);
    //merubah nama
    //$data ['nama'] = "hilman ramadhan";
    //echo "namanya adalah " . $data['nama'];

    //------------------Metode Associative------
    print_r(array_merge($data , $data2));
    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>