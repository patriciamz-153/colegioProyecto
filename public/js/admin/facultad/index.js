var vm = new Vue(
{
    el: '#app',

    data: {
        facultad_selected: 0,
        institucion_selected: 0,
        default_url: '',
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('facultad_' + this.facultad_selected)
            var tr_selected = document.getElementById('facultad_' + id)

            if (this.facultad_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.facultad_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.facultad_selected = (this.facultad_selected == id) ? 0 : id
        },
        delete_facultad: function()
        {
            event.preventDefault()
            document.getElementById('delete-facultad-form').submit()
        }
    },

    watch: {
        facultad_selected: function(newValue)
        {
            var base_url = this.default_url + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.default_url = '/admin/facultades/'
    }
});
