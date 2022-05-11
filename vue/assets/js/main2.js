var app = new Vue({
  el : '#root',
  data : {
    albumArr : [],
    selectedGenre : '',
  },
  created(){
    this.getAlbums();
  },
  methods : {
    getAlbums(){
      axios.get('http://localhost/esercizi/php-ajax-dischi/vue/api/dischi.php')
        .then( (res) => {
          console.log(res.data);
          this.albumArr = res.data;
        })
    },
    selectGenre(){
      axios.get(`http://localhost/esercizi/php-ajax-dischi/vue/api/dischi.php?genre=${this.selectedGenre}`)
        .then((res)=>{
          this.albumArr = res.data;
        })
    }
  },
  mounted(){
    console.log(this.albumArr)
  }
})