<template>
    <section class="row last-section">
        <div v-for="(booking, index) in bookings" class="col-sm-5 line-container-three">
            <span class="section_number">0{{index+1}}</span>
            <h4>{{booking.name}}</h4>
            <h4>{{booking.date}}</h4>
            <h4>{{booking.time}}</h4>
            <p class="line-small details">{{booking.message}}</p>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['bookings'],
    }
</script>
