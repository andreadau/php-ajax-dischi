  
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <div id="app">
            <header>
                <div class="container">
                    <img src="img/logo.png" alt="logo" />
                    <select class="type" v-model="activeGenre" @change="filterGenre">
                    <option v-for="option in options" :value="option.value">
                        {{ option.text }}
                      </option>
                    </select>
                </div>
            </header>
            <div class="cds-container container">
                <!-- Disco ad esempio -->
                <div class="cd" v-for="(artists,index) in artist">
                    <img :src="artists.poster" alt="">
                    <h3>{{artists.title}}</h3>
                    <span class="author">{{artists.author}}</span>
                    <span class="year">{{artists.year}}</span>
                </div>
            </div>
        </div>
        
        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Vue -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- JS -->
        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>