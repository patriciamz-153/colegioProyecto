Vue.component('facultad-disponible', {
    props: ['facultadId', 'nombre'],

    template:   '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-success float-right" @click="add_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>' +
                '</a>',

    methods: {
        add_facultad: function(id)
        {
            vm.facultades_en_sede.push({
                id: id,
                nombre: "nombre",
            })
            vm.facultades_disponibles.remove()
        }
    }
})

Vue.component('facultad-en-sede', {
    props: ['facultadId', 'nombre'],
    template:   '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-danger float-right" @click="remove_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>' +
                '</a>',
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
        facultades_en_sede: [],
        facultades_disponibles: [],
    },

    ready: function()
    {
        this.facultades_en_sede = window.facultades_en_sede

        for (var j = 0; j < window.facultades.length; j++) {
            var en_sede = false;
            for (var i = 0; i < this.facultades_en_sede.length; i++)
                if (window.facultades[j].id == this.facultades_en_sede[i].id)
                    en_sede = true;

            if (!en_sede)
                this.facultades_disponibles.push(window.facultades[j])
        }
    }
});