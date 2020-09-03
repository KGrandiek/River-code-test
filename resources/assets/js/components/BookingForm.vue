<template>
    <form class="booking-form"  @submit.prevent="addBooking">
        <input v-model="name" class="mb-3 form-control" placeholder="Your name"/>
        <p class="error" v-if="errors && errors.name" >{{errors.name[0]}}</p>
        <div class="row">
            <div class="col"> 
                <vuejs-datepicker v-model="date" input-class="mb-3" placeholder="Pick a date"></vuejs-datepicker>
                <p class="error" v-if="errors && errors.date" >{{errors.date[0]}}</p>
            </div>
            <div class="col">
                <vue-timepicker close-on-complete v-model="time" format="hh:mm A" input-class="mb-3" placeholder="Pick a time"></vue-timepicker>
                <p class="error" v-if="errors && errors.time" >{{errors.time[0]}}</p>
            </div>
        </div>
        <textarea v-model="message" class="mb-3 form-control" placeholder="Your message"></textarea>
        <p class="error" v-if="errors && errors.message" >{{errors.message[0]}}</p>
        <p v-if="success">Success! Your booking has been made.</p>
        <button class="btn btn-dark" type="submit">Place booking</button>
    </form>
</template>

<script>
    import VueTimepicker from 'vue2-timepicker/src/vue-timepicker.vue';
    import axios from "axios";

    export default {
        data: function () {
            return {
                name: '',
                message: '',
                date: '',
                time: '',
                errors: {},
                success: false
            }
        },
        components: {
            vuejsDatepicker,
            VueTimepicker
        },
        methods: {
            addBooking: function () {
                axios.post('/booking', this.$data)
                .then(response => {
                    this.success = true;
                    this.errors = {};
                    this.name = '';
                    this.message = '';
                    this.date = '';
                    this.time = '';
                    this.$emit('update', response.data.bookings);
                    console.log(response)
                })
                .catch(error => {
                    if (error.response) {
                        this.errors = error.response.data.errors;
                    }
                });
            }
        }
    }
</script>
