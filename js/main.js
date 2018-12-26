document.addEventListener('DOMContentLoaded', function () {
  let app = new Vue({
    el: '#app',
    data: {
      isCerrado: false,
      isNavBarCerrado: false,
      loading: true
    },
    mounted: function () {
      let that = this;
      axios.get("")
        .then(function (response) {
          console.log(response.data)
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
      this.loading = false
    },
    methods: {
      holaMundo: function () {
        console.log('hola vue!!!')
      }
    }
  });
});