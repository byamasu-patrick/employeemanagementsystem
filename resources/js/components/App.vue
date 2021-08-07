<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                    <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Vue from 'vue'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                products: []
            }
        },
        async created(){
             await Vue.axios
                .get('/post')
                .then(response => {
                    //this.products = response.data;
                    console.log(response.data);
                });
        }
    }
</script>
