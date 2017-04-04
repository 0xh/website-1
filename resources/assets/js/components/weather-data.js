Vue.component('weather-data', {
    data() {
        return {

        }
    },

    mounted() {
        this.getData();
    },

    methods: {
        getData() {
            axios.get('/weather/').then(({data}) => {
                console.log(data);
            });
        }
    }
})