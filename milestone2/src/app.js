let vm = new Vue({
	el:"#app",
	data: {
		artist: [],
		selected:"",
		options: [
			{ text: 'All', value: 'all' },
			{ text: 'Rock', value: 'rock' },
			{ text: 'Pop', value: 'pop' },
			{ text: 'Metal', value: 'metal' },
			{ text: 'Jazz', value: 'jazz' }
          ],
        activeGenre: 'all',
	},
	methods: {
		getArtist(){
			axios.get("db.php")
			.then(response => {
				this.artist = response.data.response;
			});
        },
        filterGenre() {
            axios.get('db.php')
            .then( response => {
                let filterArtist = response.data.response;
                if(this.activeGenre !== 'all') {
                    filterArtist = filterArtist.filter(cd => cd.genre.toLowerCase() === this.activeGenre);
                }
                
                console.log(filterArtist);
                this.artist = filterArtist;
            })
            .catch( error => {
                console.log(error);
            });
        }
	},		
	mounted(){
        this.getArtist();
        this.filterGenre()
	},
});