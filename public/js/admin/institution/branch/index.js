var vm = new Vue(
{
    el: '#app',

    data: {
        branch_selected: 0,
        institution_selected: 0,
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('branch_' + this.branch_selected)
            var tr_selected = document.getElementById('branch_' + id)

            if (this.branch_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.branch_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.branch_selected = (this.branch_selected == id) ? 0 : id
        },
        delete_branch: function()
        {
            event.preventDefault();
            document.getElementById('delete-institution-form').submit();
        }
    },

    watch: {
        branch_selected: function(newValue){
            var base_url = this.default_url + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.default_url = '/admin/instituciones/' + this.institution_selected + '/sedes/'

        var institution = document.getElementById('institution_id')
        this.institution_selected = institution.value
        institution.remove()
    }
});
