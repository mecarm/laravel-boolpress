<template>
    <div class="text-center">
        <H1>Singolo post</H1>
        <h4>{{ post?.title }}</h4>
        <p>{{ post?.body }}</p>
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    components: {

    },
    data(){
        return{
            post: null,
        }
    },
    mounted() {
        this.getPost();
    },
    methods: {
        getPost(){
            axios.get('http://127.0.0.1:8000/api/posts/' + this.$route.params.id)
                .then( res => {
                    console.log(res.data);
                    this.post = res.data;
                }).catch(err => {
                    console.log(err);
                })
        }
    }

}
</script>

<style>

</style>