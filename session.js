new Vue({
    el: "#session",
    data: {
        mes: "Linh",
        cart:[],
        movies: [],
        sessions: [],
        selectedMovie: false,
        selectedSession: null,
        dateFilter: [
            {
                id: 0,
                text: "Today",
                selected: true,
            },
            {
                id: 1,
                text: "Next 3 days",
                selected: false,
            },
            {
                id: 2,
                text: "Next 5 days",
                selected: false,
            },
            {
                id: 3,
                text: "Next 7 days",
                selected: false,
            },
            {
                id: 4,
                text: "Next week",
                selected: false,
            },
            {
                id: 5,
                text: "Show all",
                selected: false,
            },
        ],
        // ticketOptions: [
        //     {
        //         id: 0,
        //         name: "Children",
        //         unitprice: 10,
        //         quantity: 0,
        //     },
        //     {
        //         id: 1,
        //         name: "Adult",
        //         unitprice: 20,
        //         quantity: 0,
        //     }
        // ],
        ticketOptions: {
            quantity: 1,
            unitprice: 20,
            seats: [],
            autoSeat: true,
        }
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
        loadSession () {
            const theThis = this;
            $.ajax({
                type    : 'POST',
                url     : 'fileHandler.php',
                data    : { result:JSON.stringify({ 'action':'getSessions'}) },
                success : function(response) {
                    theThis.sessions = JSON.parse(response);
                }    
            });
        },
        selectMovie (movieId) {
            this.selectedMovie = this.movies.find(movie => movie.id === movieId)
        },
        selectDateFilter (filterId) {
            for (var i = 0; i < this.dateFilter.length; i++) {
                this.dateFilter[i].selected = false;
            }
            this.dateFilter.find(filter => filter.id === filterId).selected = true;
        },
        addToCart () {
            var found = this.cart.find(item => item.session.id === this.selectedSession.id)
            if (found) {
                return;
            }
            var movie = JSON.parse(JSON.stringify(this.selectedMovie));
            movie.sessions = [];
            var item = {
                movie : movie,
                session: this.selectedSession,
                ticketOptions: this.ticketOptions
            }
            this.cart.push(item);
            sessionStorage.setItem("cart", JSON.stringify(this.cart));
            location.reload();
        }
    },
    computed : {
        movieIncludeSession () {
            const movieArr = [];
            for (var i = 0; i < this.movies.length; i++) {
                const theMovie = this.movies[i];
                theMovie.sessions = this.sessions.filter(session => session.movieId === theMovie.id);
                movieArr.push(theMovie);
            }
            if (this.movies.length > 0) {
                this.selectMovie(movieArr[0].id);
            }
            return movieArr;
        },
        filteredSessions () {
            Date.prototype.addDays = function(days) {
                var dat = new Date(this.valueOf());
                dat.setDate(dat.getDate() + days);
                return dat;
            }

            var sessions = [];
            sessions = this.selectedMovie.sessions;
            switch(this.dateFilter.find(filter => filter.selected).id) {
                case 0:
                    var d = new Date().toDateString()
                    sessions = sessions.filter(session => {
                        return new Date(session.start).toDateString() === d;
                    });
                    break;
                case 1:
                    var min = new Date().addDays(-1)
                    var max = new Date().addDays(4)
                    sessions = sessions.filter(session => {
                        var date = new Date(session.start)
                        return date > min && date < max;
                    });
                    break;
                case 2:
                    var min = new Date().addDays(-1)
                    var max = new Date().addDays(6)
                    sessions = sessions.filter(session => {
                        var date = new Date(session.start)
                        return date > min && date < max;
                    });
                    break;
                case 3:
                    var min = new Date().addDays(-1)
                    var max = new Date().addDays(8)
                    sessions = sessions.filter(session => {
                        var date = new Date(session.start)
                        return date > min && date < max;
                    });
                    break;
                case 4:
                    var today = new Date()
                    var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()+7);
                    var min = nextweek.addDays(-1)
                    var max = nextweek.addDays(7)
                    sessions = sessions.filter(session => {
                        var date = new Date(session.start)
                        return date > min && date < max;
                    });
                    break;
                default:
                    break;
            }
            return sessions;
        }
    },
    filters: {
        displaySessionTime: function (dateStr) {
            var date = new Date(dateStr);
            var dd = date.getDate();
            var mm = date.getMonth()+1; //January is 0!
            var yyyy = date.getFullYear();
            
            if(dd<10) {
                dd = '0'+dd
            } 
            
            if(mm<10) {
                mm = '0'+mm
            } 
            
            date = dd + '/' + mm + '/' + yyyy +': '+dateStr.split(' ')[4];
            return date;
        }
    },
    created () {
        this.loadMovie();
        this.loadSession();
        this.cart = JSON.parse(sessionStorage.getItem("cart"));
        if (this.cart === null) this.cart = [];
    }
});