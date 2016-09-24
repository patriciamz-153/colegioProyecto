var vm = new Vue(
{
    el: '#app',

    data : {
        department_selected: 0,
        province_selected: 0,
        district_selected: 0,
        provinces: [],
        districts: [],
    },

    methods : {
        getProvinces: function()
        {
            this.$http.get('/department/' + this.department_selected + '/provinces').then((response) => {
                this.$set('provinces', response.data)
            }, (response) => {
                //Message error
            })
        },
        getDistricts: function()
        {
            this.$http.get('/province/' + this.province_selected + '/districts').then((response) => {
                this.$set('districts', response.data)
            }, (response) => {

            })
        },
    },

    watch: {
        department_selected: function(newValue)
        {
            if (newValue != 0) {
                this.getProvinces(newValue)
            }
            else {
                this.$set('provinces', [])
                this.$set('province_selected', 0)

            }
        },
        province_selected: function(newValue)
        {
            if (newValue != 0) {
                this.getDistricts(newValue)
            }
            else {
                this.$set('districts', [])
                this.$set('district_selected', 0)
            }
        }
    }

});