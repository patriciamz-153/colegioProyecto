var vm = new Vue(
{
    el: '#app',

    data: {
        sede_selected: 0,
        institucion_selected: 0,
        app_url: '',
        url_edit: '',
        url_delete: '',
        url_facultades: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('sede_' + this.sede_selected)
            var tr_selected = document.getElementById('sede_' + id)

            if (this.sede_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.sede_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.sede_selected = (this.sede_selected == id) ? 0 : id
        },
        delete_sede: function()
        {
            event.preventDefault()
            document.getElementById('delete-sede-form').submit()
        }
    },

    watch: {
        sede_selected: function(newValue)
        {
            var base_url = this.app_url + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
                this.url_facultades = base_url + '/facultades'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url + '/admin/sedes/'
    }
});
