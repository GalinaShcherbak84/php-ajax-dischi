const app = new Vue({
    el: '.app',
    data:{
        albums:[],
        selected:'all',
        artists:[],
    },
    created(){
        const dataURL = "http://localhost:81/php-ajax-dischi/ajax/script.php/";
        axios.get(dataURL)
        .then(result =>{
            console.log(result.data);
            this.albums = result.data.albums;
            console.log(this.albums);
            this.artists= result.data.artists;
            console.log(this.artists);
        })
        .catch(err => {
            console.log(err);
        });
    },
    methods:{
        takeData(){
            axios.get('http://localhost:81/php-ajax-dischi/ajax/script.php/',
                {
                    params:{
                        artist:this.selected,
                    },
                }
            )
                .then(result =>{
                this.albums = result.data.albums;
            })
                .catch(err => {
                console.log(err);
            });
        }
    }
});