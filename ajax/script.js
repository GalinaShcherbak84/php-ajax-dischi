const app = new Vue({
    el: '.app',
    data:{
        dischi:[],
        selected:' ',
        filteredDischi:[],
    },
    mounted(){
        const dataURL = "http://localhost:81/php-ajax-dischi/ajax/script.php/";
        axios.get(dataURL)
        .then(result =>{
            console.log(result.data);
            this.dischi = result.data;
        })
        .catch(err => {
            console.log(err);
        });
    },
    computed:{
        takeData(){
            //console.log(this.selected);
            this.filteredDischi = this. dischi.filter(disco=>{
                if(this.selected !== 'all'){
                    return disco.author === this.selected;
                }else{
                    return disco
                }
                
            });
        }
    }
});