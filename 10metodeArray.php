<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Belajar metode Array</h1>
    <?php 

    //-------------Tipe data Array-----------
    $kotak = 
    array('anjing','kurakura','koala','anjing');
    $nama = ['hilman','Endy','Tiga'];

    //print_r($kotak);
    //echo $nama [0];
  
    //-----------Metode Array-------------
    //Array_unique,_reserve,Shuffle,count, sort

     //print_r(array_unique ($kotak));
     //print_r(array_reverse ($kotak));
    //Shuffle($kotak);
    //print_r($kotak);
    //echo count($kotak);
     sort($kotak);
     print_r($kotak);

    ?> 
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>