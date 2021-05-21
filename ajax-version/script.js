const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/ajax-version/album.php')
            .then(result => {
                this.albums = result.data;
                console.log(result.data)
            })
            .catch(err => {

            });
    }
});