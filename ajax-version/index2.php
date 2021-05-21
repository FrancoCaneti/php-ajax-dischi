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
                <div class="copertina" v-for='album in albums'>    
                    <img class='img-copertina' :src="album.poster" :alt="album.title">
                        <h3>{{album.title}} </h3>
                        <p>{{album.author}} </p>
                        <p> {{album.year}}</p>
                        <p>{{album.genre}} </p>
                </div>
        </section>
    </main>


</div>
  <!--js--> 
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="./script.js"></script> 
</body>
</html>