<template>
    <div>
        <button class="btn btn-primary" @click="followUser">Follow</button>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props: ['userID'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                .then(response => {
                    alert(response.data);
                });
            }
        }
    }
</script>
