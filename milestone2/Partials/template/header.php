
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