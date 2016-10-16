var vm = new Vue(
{
    el: '#app',

    data: {
        ip_selected: 0,
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
            var last_tr = document.getElementById('ip_' + this.ip_selected)
            var tr_selected = document.getElementById('ip_' + id)

            if (this.ip_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.ip_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.ip_selected = (this.ip_selected == id) ? 0 : id
        },
        delete_ip: function()
        {
            event.preventDefault();
            document.getElementById('delete-ip-form').submit();
        }
    },

    watch: {
        ip_selected: function(newValue){
            this.base_url = this.app_url + '/admin/lista_blanca/' + newValue;
            if (newValue > 0) {
                this.url_edit = this.base_url + '/editar'
                this.url_delete = this.base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url;
    }
});
