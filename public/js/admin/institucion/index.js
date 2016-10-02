var vm = new Vue(
{
    el: '#app',

    data: {
        institucion_selected: 0,
        url_edit: '',
        url_delete: '',
        url_sedes: '',
        url_facultades: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('institucion_' + this.institucion_selected)
            var tr_selected = document.getElementById('institucion_' + id)

            if (this.institucion_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.institucion_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.institucion_selected = (this.institucion_selected == id) ? 0 : id
        },
        delete_institucion: function()
        {
            event.preventDefault();
            document.getElementById('delete-institucion-form').submit();
        }
    },

    watch: {
        institucion_selected: function(newValue){
            var base_url = '/admin/instituciones/' + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
                this.url_sedes = '/admin/sedes?institucion_id=' + newValue
                this.url_facultades = '/admin/facultades?institucion_id=' + newValue
            }
        }
    }
});
