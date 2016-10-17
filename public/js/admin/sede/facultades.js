Vue.component('facultad-disponible', {
    props: ['facultadId', 'nombre'],

    template:   '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-success float-right" @click="add_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>' +
                '</a>',

    methods: {
        add_facultad: function(id)
        {
            var facultad = vm.facultades_disponibles.filter(function(facultad){ return facultad.id == id });

            vm.facultades_en_sede.push(facultad[0])
            for (var i = 0; i < vm.facultades_disponibles.length; i++) {
                if (vm.facultades_disponibles[i].id == id) {
                    vm.facultades_disponibles.splice(i, 1)
                    break
                }
            }
        }
    }
})

Vue.component('facultad-en-sede', {
    props: ['facultadId', 'nombre'],

    template:   '<span class="float-left ln-2-5">{{ nombre }}</span>' +
                '<a type="button" class="btn btn-danger float-right" @click="remove_facultad(facultadId)">' +
                    '<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>' +
                '</a>' +
                '<a type="button" class="btn btn-default float-right" href="{{ get_link_ambientes(facultadId) }}" style="margin-right: 10px;" title="Ambientes">'+
                    '<i class="fa fa-cube" aria-hidden="true"></i>' +
                '</a>' +
                '<input type="hidden" value="{{ facultadId }}" name="facultades[]">',
    methods: {
        remove_facultad: function(id)
        {
            var facultad = vm.facultades_en_sede.filter(function(facultad){ return facultad.id == id });

            vm.facultades_disponibles.push(facultad[0])
            for (var i = 0; i < vm.facultades_en_sede.length; i++) {
                if (vm.facultades_en_sede[i].id == id) {
                    vm.facultades_en_sede.splice(i, 1)
                    break
                }
            }
        },
        get_link_ambientes: function(facultad_id)
        {
            return vm.base_url + '/facultades/' + facultad_id + '/ambientes'
        },
    }
})

var vm = new Vue(
{
    el: 'body',

    data: {
        facultades_en_sede: [],
        facultades_disponibles: [],
        sede_selected: '',
        base_url: '',
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
        this.sede_selected = document.getElementById('sede').value
        this.base_url = window.app_url + '/admin/sedes/' + this.sede_selected
    }
});