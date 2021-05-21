<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <!--Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>
<body>
<div id="app">
<header class="header">
        <section class="container">
            <img class="logo" src="./logo.png" alt="logo">
        </section>
    </header>
    <main>
        <section class="vetrina ">
        
                    <div class="copertina" v-for='disco in dischi'>    
                    <img class='img-copertina' :src="disco.poster" :alt="disco.title">
                        <h3>{{disco.title}} </h3>
                        <p>{{disco.author}} </p>
                        <p> {{disco.year}}</p>
                        <p>{{disco.genre}} </p>
                    </div>
              
        </section>
    </main>


</div>
  <!--js--> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="./script.js"></script> 
</body>
</html>