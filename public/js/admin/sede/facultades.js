Vue.component('facultad-disponible', {
    props: ['facultadId', 'nombre'],

    template:
                '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-success float-right" @click="add_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>' +
                '</a>',

    methods: {
        add_facultad: function(id)
        {
            vm.facultades_disponibles.push({
                id: 1,
                nombre: "nombre",
            })
            console.info( vm.facultades_disponibles)
        }
    }
})

Vue.component('facultad-en-sede', {
    props: ['facultadId', 'nombre'],
    template:   '<tr>' +
                '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-danger float-right" @click="remove_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>' +
                '</a>' +
                '</tr>'
                ,
    methods: {
        remove_facultad: function(id)
        {

        }
    }
})

var vm = new Vue(
{
    el: 'body',

    data: {
        sede_facultades: [],
        facultades_disponibles: [],
    },

    ready: function()
    {
        this.facultades_disponibles = window.facultades;
    }
});