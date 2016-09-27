var vm = new Vue(
{
    el: '#app',

    data : {
        departamento_selected: 0,
        provincia_selected: 0,
        distrito_selected: 0,
        institucion_selected: 0,
        provincias: [],
        distritos: [],
    },

    methods : {
        getProvincias: function()
        {
            this.$http.get('/departamento/' + this.departamento_selected + '/provincias').then((response) => {
                this.$set('provincias', response.data)
            }, (response) => {
                //Message error
            })
        },
        getDistritos: function()
        {
            this.$http.get('/provincia/' + this.provincia_selected + '/distritos').then((response) => {
                this.$set('distritos', response.data)
            }, (response) => {

            })
        },
    },

    watch: {
        departamento_selected: function(newValue)
        {
            if (newValue != 0) {
                this.getProvincias(newValue)
            }
            else {
                this.$set('provincias', [])
                this.$set('provincia_selected', 0)
            }
        },
        provincia_selected: function(newValue)
        {
            if (newValue != 0) {
                this.getDistritos(newValue)
            }
            else {
                this.$set('distritos', [])
                this.$set('district_selected', 0)
            }
        },
    },

    ready: function()
    {
        var departamento = document.getElementById('departamento')
        var provincia = document.getElementById('provincia')
        var distrito = document.getElementById('distrito')
        var institucion = document.getElementById('institucion')

        this.departamento_selected = departamento.value
        this.provincia_selected = provincia.value
        this.distrito_selected = distrito.value
        this.institucion_selected = institucion.value

        departamento.remove()
        provincia.remove()
        distrito.remove()
        institucion.remove()
    },

});