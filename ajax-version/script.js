const app = new Vue({
    el: '#app',
    data: {
        dischi: []
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/ajax-version/index2.php')
            .then(result => {
                this.dischi = result.data;
            })
            .catch(err => {

            });
    }
});