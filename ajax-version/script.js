const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/ajax-version/index2.php')
            .then(result => {
                this.albums = result.data;
            })
            .catch(err => {

            });
    }
});