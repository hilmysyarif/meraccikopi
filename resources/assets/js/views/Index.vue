<template>
    <div class="row">
        <div class="col-md-6">
            <feature picture="http://placehold.it/500x400" title="Robot Makan Jagung"></feature>
        </div>
        <div class="col-md-6">
            <feature picture="http://placehold.it/500x185" title="Testing 12345"></feature>
            <feature picture="http://placehold.it/500x185" title="Testing 12345"></feature>
        </div>
    </div>
</template>



<script>
    Vue.component('feature', require('./components/Featured.vue'))

    export default {
        ready: function(){

        },
        data() {
            return {
                picture: this.picture,
            }
        }
    }

</script>
