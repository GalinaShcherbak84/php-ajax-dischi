<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  style -->
    <link rel="stylesheet" href="./style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

    <div class="app">
        <!-- header -->
        <header>
            <img src="./php-dischi/logo.png" alt="">
            <div>
                <label for="music">Filter by author</label>
                <select v-model = "selected" @change = 'takeData' name="music" id="music">
                    <option value = "all">all</option>
                    <option v-for = "artist in artists"  :value = "artist">{{artist}}</option>
                </select>
            </div>
        </header>
        <!-- main -->
        <div class="container">
            <!-- disco -->
           
            <div class="card" v-for = "disco in albums">
                <img :src="disco.poster" alt="">
                <h4>{{disco.title}}</h4>
                <p>{{disco.author}}</p>
                <h4>{{disco.year}}</h4>
                <p>{{disco.genre}}</p>
            </div>
                
        </div>
    </div>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./script.js"></script>
</body>
</html>