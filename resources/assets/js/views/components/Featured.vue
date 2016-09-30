<template>
    <div class="featured-wrapper" v-on:mouseover="showTitle=true" v-on:mouseout="showTitle=false">
        <img v-bind:src="picture" class="img img-responsive" alt="">
        <div class="title" v-show="showTitle">
            {{ title }}
        </div>
    </div>
</template>

<script>
    export default {
        props:['picture', 'title'],

        data: function(){
            return {
                showTitle: false,
            }
        }
    }
</script>
