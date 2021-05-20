const app = new Vue({
    el: '.app',
    data:{
        dischi:[],
    },
    created(){
        const dataURL = 'http://localhost:81/php-ajax-dischi/ajax/script.php';
        axios.get(dataURL)
        .then(result =>{
            console.log(result.data);
            this.dischi = result.data;
        })
        .catch(err => {
            console.log(err);
        });
    }
});