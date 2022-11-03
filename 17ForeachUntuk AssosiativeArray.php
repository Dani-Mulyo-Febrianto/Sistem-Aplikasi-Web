<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>
      <h1>Loop PHP</h1>
    <?php 
     $data = ['nama' => 'Dani',
              'umur'=>20,
              'Sifat'=>'Malas'];

      foreach($data as $key => $value){
          echo $key . " " ." : ";
          echo $value . "<br> ";
        }

    ?> 

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>