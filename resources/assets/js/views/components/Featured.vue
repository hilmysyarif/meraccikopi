<template>
    <div class="grid-item" :class="size">
        <div class="panel panel-default">
            <img :src="picture" class="img img-responsive pane-heading" alt="">
            <div class="panel-body">
                {{ title }}
            </div>
        </div>
    </div>


</template>

<script>

    export default {
        props:['picture', 'title', 'size'],

        data: function(){
            return {
                showTitle: true,
            }
        }
    }
</script>
