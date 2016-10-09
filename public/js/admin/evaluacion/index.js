var vm = new Vue(
{
    el: '#app',

    data: {
        evaluacion_selected: 0,
        url_edit: '',
        url_delete: '',
        url_sedes: '',
        url_facultades: '',
        base_url: '',
        app_url: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('evaluacion_' + this.evaluacion_selected)
            var tr_selected = document.getElementById('evaluacion_' + id)

            var last_panel = document.getElementById('panel_' + this.evaluacion_selected)
            var panel_selected = document.getElementById('panel_' + id)

            if (this.evaluacion_selected == 0) {
                tr_selected.className += ' row-selected'
                panel_selected.className += ' panel-selected'
            } else {
                if (this.evaluacion_selected == id) {
                    tr_selected.className = 'row-hover'
                    panel_selected.className = 'panel-heading panel-clickable'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'

                    last_panel.className = 'panel-heading panel-clickable'
                    panel_selected.className += ' panel-selected'
                }
            }

            this.evaluacion_selected = (this.evaluacion_selected == id) ? 0 : id
        },
        delete_evaluacion: function()
        {
            event.preventDefault();
            document.getElementById('delete-evaluacion-form').submit();
        }
    },

    watch: {
        evaluacion_selected: function(newValue){
            this.base_url = this.app_url + '/admin/grupos/'+ this.grupo_selected +'/evaluaciones/' + newValue;
            if (newValue > 0) {
                this.url_edit = this.base_url + '/editar'
                this.url_delete = this.base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url;
        this.grupo_selected = document.getElementById('grupo_id').value;
    }
});
