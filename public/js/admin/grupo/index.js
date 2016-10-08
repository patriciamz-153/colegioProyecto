var vm = new Vue(
{
    el: '#app',

    data: {
        grupo_selected: 0,
        url_evaluaciones: '',
        base_url: '',
        app_url: '',
    },

    methods: {
        select_row: function(id)
        {
            var last_tr = document.getElementById('grupo_' + this.grupo_selected)
            var tr_selected = document.getElementById('grupo_' + id)

            if (this.grupo_selected == 0) {
                tr_selected.className += ' row-selected'
            } else {
                if (this.grupo_selected == id) {
                    tr_selected.className = 'row-hover'
                } else {
                    last_tr.className = 'row-hover'
                    tr_selected.className += ' row-selected'
                }
            }

            this.grupo_selected = (this.grupo_selected == id) ? 0 : id
        },
    },

    watch: {
        grupo_selected: function(newValue){
            if (newValue > 0) {
                this.url_evaluaciones =  this.app_url +'/admin/grupos/' + newValue + '/evaluaciones'
            }
        }
    },

    ready: function()
    {
        this.app_url = window.app_url;
    }
});
