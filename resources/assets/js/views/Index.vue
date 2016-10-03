<template>

        <div class="grid">
            <div class="grid-sizer col-lg-1"></div>
            <feature picture="http://placehold.it/400x400" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
            <feature picture="http://placehold.it/600x300" title="Testing 12345" size="col-md-4"></feature>
            <feature title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos eaque earum eius eos error expedita fugit iure nam nemo officia porro praesentium quisquam reiciendis sequi sint sit tempora, vero!" size="col-md-4"></feature>
            <feature picture="http://placehold.it/400x200" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
            <feature picture="http://placehold.it/400x800" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
            <feature picture="http://placehold.it/400x400" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
            <feature picture="http://placehold.it/400x400" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
            <feature picture="http://placehold.it/400x400" title="lorem ipsum sit ae u doloere a idahfi " size="col-md-4"></feature>
        </div>

</template>

<script>
    Vue.component('feature', require('./components/Featured.vue'))

    export default {
        mounted() {
            this.$nextTick(function () {

                var iso = new Isotope( '.grid', {
                    itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.grid-sizer'
                    }
                });

                imagesLoaded( '.grid-item', function( instance ) {
                    iso.layout();
                    console.log('all images are loaded');
                });

            })
        }
        ,
        data() {
            return {
                picture: this.picture,
            }
        }
    }

</script>
