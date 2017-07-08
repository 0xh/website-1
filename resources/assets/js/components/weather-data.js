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
            const time = parseInt(moment().local().format('H'));
            return time > 7 &&  time < 20;
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
            return this.weather.loaded ? `wi-${this.timeOfDay}-${this.processWeatherIcon(day)}` : ''
        },

        processWeatherIcon(day) {
            let icon = this.weather.daily.data[day].icon;

            if(icon.indexOf('partly-cloudy-day') > -1) {
                icon = 'cloudy'
            } else if(icon.indexOf('clear') > -1) {
                icon = 'sunny'
            }

            return icon.replace('-night','').replace('-day', '');
        }
    },

    components: {ClipLoader}
})