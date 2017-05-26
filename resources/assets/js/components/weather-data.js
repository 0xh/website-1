import Units from './units';
var ClipLoader = require('vue-spinner/src/ClipLoader.vue');
Vue.component('weather-data', {
    data() {
        return {
            weather: {
                loaded: false
            },
            units: Units,
            displayUnits: 'us',
            loading: false,
        }
    },

    mounted() {
        this.getData();
    },

    methods: {
        getData(units = 'us') {
            this.loading = true;
            axios.get('/weather/' + units).then(({data}) => {
                this.$set(this, 'weather', data);
                this.displayUnits = units;
                if(!this.weather.loaded) {
                    this.weather.loaded = true;
                }
                this.loading = false;
            }).catch((errors) => {
                this.loading = false;
            });
        },

        changeUnits(units) {
            this.getData(units);
        },

        getWeather (day) {
            return ''
        },

        getWeatherIcon (day) {
            return ''
        },

        getDayOfWeek (day) {
            return moment().add(day, 'd').format('ddd').toUpperCase()
        }
    },

    components: {ClipLoader}
})