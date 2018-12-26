document.addEventListener('DOMContentLoaded', function () {
    let app = new Vue({
        el: '#app',
        data: {
            obras: [],
            categoriasObras: [],
            obraSeleccionada: undefined,
            filtro: '',
            posicion: 0,
            isNavBarCerrado: false,
            loading: true
        },
        mounted: function () {
            let that = this;
            axios.get('../json/listaObras.json')
                .then(function (listaObras) {
                    that.obras = listaObras.data.listaObras
                })
                .catch(function (error) {
                    // handle error
                })
                .then(function () {
                    // always executed
                });

            this.loading = false;
        },
        methods: {
            verObra: function (obra) {
                this.obraSeleccionada = obra;
            },
            cerrarArticulo: function () {
                this.obraSeleccionada = undefined;
            },

            // Slider
            anterior: function () {
                this.posicion -= 1;
                if (this.posicion <= -1) {
                    this.posicion = 2;
                }

            },

            siguiente: function () {
                this.posicion += 1;
                if (this.posicion >= this.obraSeleccionada.listaImagenes.length) {
                    this.posicion = 0;
                }
            }
        },
        computed: {
            // Vemos categorias cuando pulsamos el boton
            verFranquicias: function () {
                return this.filtro != '' ? this.obras.filter((franquicias => franquicias.categoria == this.filtro)) : this.obras
            },
        }
    });
});