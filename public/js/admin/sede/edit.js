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
        app_url: '',
    },

    methods : {
        getProvinciasUrl: function()
        {
            return this.app_url + '/departamento/' + this.departamento_selected + '/provincias'
        },
        getProvincias: function()
        {
            this.$http.get( this.getProvinciasUrl() ).then((response) => {
                this.$set('provincias', response.data)
            }, (response) => {
                //Message error
            })
        },
        getDistritosUrl: function()
        {
            return this.app_url + '/provincia/' + this.provincia_selected + '/distritos'
        },
        getDistritos: function()
        {
            this.$http.get( this.getDistritosUrl() ).then((response) => {
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
        var institucion = document.getElementById('institucion_id')

        this.departamento_selected = departamento.value
        this.provincia_selected = provincia.value
        this.distrito_selected = distrito.value
        this.institucion_selected = institucion.value

        departamento.remove()
        provincia.remove()
        distrito.remove()
        this.app_url = window.app_url
    },

});