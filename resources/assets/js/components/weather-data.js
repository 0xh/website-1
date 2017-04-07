import Units from './units';
Vue.component('weather-data', {
    data() {
        return {
            weather: '',
            units: Units,
            displayUnits: 'us'
        }
    },

    mounted() {
        this.getData();
    },

    methods: {
        getData(units = '') {
            axios.get('/weather/' + units).then(({data}) => {
                this.weather = data;
            });
        },

        changeUnits(units) {
            this.displayUnits = units;
            this.getData(units);
        }
    }
})