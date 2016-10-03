var vm = new Vue(
{
    el: '#app',

    data: {
        eap_selected: 0,
        default_url: '',
        url_edit: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('eap_' + this.eap_selected)
            var tr_selected = document.getElementById('eap_' + id)

            if (this.eap_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.eap_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.eap_selected = (this.eap_selected == id) ? 0 : id
        },
        delete_eap: function()
        {
            event.preventDefault()
            document.getElementById('delete-eap-form').submit()
        }
    },

    watch: {
        eap_selected: function(newValue)
        {
            var base_url = 'http://localhost/sfcourse/public' + this.default_url + newValue
            if (newValue > 0) {
                this.url_edit = base_url + '/editar'
                this.url_delete = base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.default_url = '/admin/eaps/'
    }
});
