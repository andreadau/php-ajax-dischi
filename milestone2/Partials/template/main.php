
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