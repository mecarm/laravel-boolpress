<template>
  
    <div>
        <h2>Ciao vue.js</h2>

        <WorkInProgress/>

    <!-- Scrivere i dati dei posts -->
        <div>
            <ul>
                <li v-for="elem in posts" :key="elem.id">
                    {{ elem.title }}
                </li>
            </ul>
        </div>

    </div>


</template>

<script>

import WorkInProgress from "../components/WorkInProgress.vue"

export default {
    name: "App",
    components: {
        WorkInProgress
    },
    data(){
        return{
            posts: []
        }
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts(){
            axios.get('http://127.0.0.1:8000/api/posts')
                .then( res => {
                    console.log(res.data);
                    this.posts = res.data;
                })
        }
    }
}
</script>

<style>

</style>