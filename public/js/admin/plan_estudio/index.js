var vm = new Vue(
{
    el: '#app',

    data: {
        plan_selected: 0,
        default_url: '',
        url_edit: '',
        base_url: '',
        url_delete: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('plan_' + this.plan_selected)
            var tr_selected = document.getElementById('plan_' + id)

            if (this.plan_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.plan_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.plan_selected = (this.plan_selected == id) ? 0 : id
        },
        delete_plan: function()
        {
            event.preventDefault()
            document.getElementById('delete-plan-form').submit()
        }
    },

    watch: {
        plan_selected: function(newValue)
        {
            this.base_url = this.app_url + '/admin/planes_estudio/' + newValue
            if (newValue > 0) {
                this.url_edit = this.base_url + '/editar'
                this.url_delete = this.base_url + '/eliminar'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url
    }
});
