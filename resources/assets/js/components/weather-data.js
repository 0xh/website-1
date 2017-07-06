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

    computed: {
        timeOfDay() {
            return this.isDay ? 'day' : 'night';
        },

        isDay() {
            return moment.local().isBetween(moment().hour(8).minute(0).second(0), moment().hour(20).minute(0).second(0));
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
                this.renderIcons()
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

        getDayOfWeek (day) {
            return moment().add(day, 'd').format('ddd').toUpperCase()
        },

        getMinByDay(day) {
            return Math.round(this.weather.daily.data[day].temperatureMin)
        },

        getMaxByDay(day) {
            return Math.round(this.weather.daily.data[day].temperatureMax)
        },

        getWeatherIcon(day) {
            var icon = this.weather.loaded ? this.weather.daily.data[day].icon == 'partly-cloudy-day' : ''
            return this.weather.loaded ? `wi-${this.weather.daily.data[day].icon}` : ''
        },

        getTimeOfDay() {

        },

        renderIcons() {

        }
    },

    components: {ClipLoader}
})