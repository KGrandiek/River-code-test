
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from "axios";

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('booking-form', require('./components/BookingForm.vue'));
Vue.component('booking-list', require('./components/BookingsList.vue'));

const app = new Vue({
    el: '#app',
    data: {
        bookings : {}
    },
    methods: {
        getBookings: function () {
            axios.get('/bookings', this.$data)
            .then(response => {
                console.log(response.data);
                this.bookings = response.data;
            });
        },
        updateBookings: function (data) {
            this.bookings.unshift( data );
        }
    },
    mounted () {
        this.getBookings()
    }
});
