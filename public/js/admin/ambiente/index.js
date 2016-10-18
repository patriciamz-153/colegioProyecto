var vm = new Vue(
{
    el: '#app',

    data: {
        ambiente_selected: 0,
        sede_selected: 0,
        facultad_selected: 0,
        app_url: '',
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('ambiente_' + this.ambiente_selected)
            var tr_selected = document.getElementById('ambiente_' + id)

            if (this.ambiente_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.ambiente_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.ambiente_selected = (this.ambiente_selected == id) ? 0 : id
        },
        delete_ambiente: function()
        {
            event.preventDefault();
            document.getElementById('delete-ambiente-form').submit();
        }
    },

    watch: {
        ambiente_selected: function(newValue){
            var base_url = this.app_url + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.facultad_selected = document.getElementById('facultad').value
        this.sede_selected = document.getElementById('sede').value
        this.app_url = window.app_url + '/admin/sedes/' + this.sede_selected + '/facultades/' + this.facultad_selected + '/ambientes/'
    }
});
