new Vue({
    el: "#movie",
    data: {
        mes: "Linh",
        movies: [],
        selectedMovie: null,
    },
    methods: {
        loadMovie () {
            const theThis = this;
            $.ajax({
                type    : 'POST',
                url     : 'fileHandler.php',
                data    : { result:JSON.stringify({ 'action':'getMovies'}) },
                success : function(response) {
                    theThis.movies = JSON.parse(response);
                }    
            });
        },
        selectMovie (movie) {
            this.selectedMovie = movie;
            console.log(this.selectedMovie);
        }
    },
    created () {
        this.loadMovie();
    }
});