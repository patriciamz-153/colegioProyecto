var vm = new Vue(
{
    el: '#app',

    data: {
        institution_selected: 0,
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('institution_' + this.institution_selected)
            var tr_selected = document.getElementById('institution_' + id)

            if (this.institution_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.institution_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.institution_selected = (this.institution_selected == id) ? 0 : id
        },
        delete_institution: function()
        {
            event.preventDefault();
            document.getElementById('delete-institution-form').submit();
        }
    },

    watch: {
        institution_selected: function(newValue){
            var base_url = '/admin/instituciones/'
            if (newValue > 0) {
                this.url_edit = base_url + newValue + '/editar'
                this.url_delete = base_url + newValue + '/eliminar'
            }
        }
    }
});
