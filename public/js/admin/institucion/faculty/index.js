var vm = new Vue(
{
    el: '#app',

    data: {
        faculty_selected: 0,
        institution_selected: 0,
        default_url: '',
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('faculty_' + this.faculty_selected)
            var tr_selected = document.getElementById('faculty_' + id)

            if (this.faculty_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.faculty_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.faculty_selected = (this.faculty_selected == id) ? 0 : id
        },
        delete_faculty: function()
        {
            event.preventDefault();
            document.getElementById('delete-faculty-form').submit();
        }
    },

    watch: {
        faculty_selected: function(newValue)
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
        var institution = document.getElementById('institution_id')
        this.institution_selected = institution.value
        institution.remove()

        this.default_url = '/admin/instituciones/' + this.institution_selected + '/facultades/'
    }
});
