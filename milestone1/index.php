<?php

require_once __DIR__. "/db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet"  href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrità = "SHA384-ggOyR0iXCbMQv3Xipma34MD + DH / 1fQ784 / j6cY / iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anonimo" >
  <style>
    body{
      background-color: #366381;
      
    }

    h1{
      text-align: center;
      margin: 20px 0;
      font-size: 50px;
      font-weight: bold;
      color: whitesmoke;
    }

    h5{
      color: lightgrey;
    }

    img{
      height: 150px;
      width: 150px;
      text-align: center;
      margin: 10px 0;
    }

    .col-2{
      width: 15% !important;
      padding: 10px;
      margin: 15px;
      text-align: center;
    }


    .container-img{
      background-color: rgba(102, 134, 154,.8);
      padding: 10px 0;
      height: 100%;
      width: 200px;
      cursor: pointer;
    }

    .container-img:hover{
      background-color: #769BB3;
      transition: all 0.5s;
    }
    .container-img:hover h5{
      color: white;
    }


  



  </style>
</head>
<body>

<div class="container">
  <h1>PHP-AJAX-DISCHI</h1>

  <div class="row d-flex justify-content-center">
    

        <?php foreach($dischi as $disco){ ?>
          <div class="col-2">
            <div class="container-img">
              
              
              <?php echo "<img src = \"{$disco['poster']}\""; ?>
              <h5></h5>
              <h5><?php echo $disco['title']; ?></h5>
              <h6><?php echo $disco['author']; ?></h6>
              <h6><?php echo $disco['year']; ?></h6>
              <?php echo"</tr>"; ?>
            </div>
            
        </div>



        <?php } ?> 
        
      
    </div>
  </div>
</div>
  

</body>
</html>