<template>
  
    <div>
        <WorkInProgress/>

         <!-- Scrivere i dati dei posts -->
         <div>
            <ul>
                <li v-for="elem in posts" :key="elem.id">
                    <router-link :to="`/post/${elem.id}`">
                        {{ elem.title }}
                    </router-link>
                </li>
            </ul>
        </div>

    </div>

</template>

<script>

import WorkInProgress from "../../../components/WorkInProgress.vue"

export default {
    name: 'Posts',
    components:{
        WorkInProgress
    },
    data(){
        return{
            posts: []
        }
    },
    mounted() {
        console.log('ciao');
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