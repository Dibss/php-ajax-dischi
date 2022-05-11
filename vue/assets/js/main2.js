var app = new Vue({
  el : '#root',
  data : {
    albumArr : [],
  },
  created(){
    this.getAlbums()
  },
  methods : {
    getAlbums(){
      axios.get('http://localhost/esercizi/php-ajax-dischi/vue/api/dischi.php')
        .then( (res) => {
          this.albumArr = res.data;
        })
        .catch((error) => {
          console.log(error)
        });
    }
  }
})