import Units from './units';
Vue.component('weather-data', {
    data() {
        return {
            weather: {
                loaded: false
            },
            units: Units,
            displayUnits: 'us'
        }
    },

    mounted() {
        this.getData();
    },

    methods: {
        getData(units = 'us') {
            axios.get('/weather/' + units).then(({data}) => {
                this.$set(this, 'weather', data);
                this.displayUnits = units;
                if(!this.weather.loaded) {
                    this.weather.loaded = true;
                }
            });
        },

        changeUnits(units) {
            this.getData(units);
        }
    }
})