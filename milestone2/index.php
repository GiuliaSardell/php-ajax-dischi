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
      padding: 10px;
      font-size: 35px;
      font-weight: bold;
      background-color: rgba(102, 134, 154,.8);
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
      margin: 15px 0;
      text-align: center;
      
    }


    .container-img{
      background-color: rgba(102, 134, 154,.8);
      padding: 10px 0;
      height: 300px;
      width: 200px;
      cursor: pointer;
    }

    .container-img:hover{
      background-color: #769BB3;
      transition: all 0.3s;
    }


  



  </style>
</head>
<body>

<div id="app">


  <div class="container">
    <h1>PHP-AJAX-DISCHI</h1>

    <div class="row d-flex justify-content-center">
      

        <div 
          v-for="(singleCard, indice) in listMusic"
          class="singleCard">

            <div class="col-2">
              <div class="container-img">
   
                <img :src="singleCard.poster" alt="">
   
                <h5 class="title">{{singleCard.title}}</h5>
   
                <h6 class="author">{{singleCard.author}}</h6>
   
                <h6 class="year">{{singleCard.year}}</h6>
   
              </div>
                
                
                
            </div>
              
        </div>



          
          
        
      </div>
    </div>
  </div>

</div>




<!-- link axios -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<!-- link vue -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<!-- link mio foglio js -->
<script src="script.js"></script>
  

</body>
</html>