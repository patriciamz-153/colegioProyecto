var vm = new Vue(
{
    el: '#app',

    data: {
        incidente_selected: 0,
        app_url: '',
        url_show: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('incidente_' + this.incidente_selected)
            var tr_selected = document.getElementById('incidente_' + id)

            if (this.incidente_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.incidente_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.incidente_selected = (this.incidente_selected == id) ? 0 : id
        },
    },

    watch: {
        incidente_selected: function(newValue){
            var base_url = this.app_url + '/admin/incidente/' + newValue;
            if (newValue > 0) {
                this.url_show =  base_url + '/mostrar'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url;
    }
});
