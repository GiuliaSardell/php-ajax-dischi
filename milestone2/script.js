
var app = new Vue({
  el: '#app',
  data: {
    listMusic: [],
  },

  mounted(){
     
     this.printListMusic()

  },
    
  methods:{

     printListMusic(){

        axios.get('http://localhost/php-ajax-dischi/milestone2/myfile.json')
        .then(response => {

           this.listMusic = response.data;

         //   this.listMusic.forEach(singleMusic => {

         //      console.log(singleMusic.author);
         //      console.log(singleMusic.poster);
         //      console.log(singleMusic.title);
         //      console.log(singleMusic.year);
         //      console.log("-----");

         //   });

        })
        .catch(error => {
           console.log(error)
        });
     }
       
  }
})