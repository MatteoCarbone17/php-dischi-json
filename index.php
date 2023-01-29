<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="./styles/style.css">

</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4 g-5" v-for="item in diskList" @click="openDisk">
                        <div class="disk-box">
                            <img :src="item.poster" alt="" class="img-fluid">
                            <h2>
                                {{ item.title }}
                            </h2>
                            <h3>
                                {{ item.author }}
                            </h3>
                            <span>
                                {{ item.year}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>

</html>