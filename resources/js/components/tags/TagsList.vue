<template>

    <div>
        <h5 v-if="isLoading">
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </h5>
        <ul v-else-if="tags.length">
            <li v-for="elem in tags" :key="elem">
                <router-link :to="`/tags/${elem.name}`">{{ elem.name }}</router-link>
            </li>
        </ul>
    </div>
  
</template>

<script>
export default {
    name: 'TagsList',
    data() {
        return {
            tags: [],
            isLoading: false
        }
    },
    mounted() {
        this.getTags();
    },
    methods: {
        getTags(){
            this.isLoading = true;
            axios.get('http://127.0.0.1:8000/api/tags/')
                .then( res => {
                    console.log(res.data);
                    this.tags = res.data;
                    this.isLoading = false;
                }).catch(err => {
                    console.log(err);
                })
        }
    }
}
</script>

<style>

</style>