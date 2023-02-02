<template>
    <div>
        <h1>Pagina Singolo Post: </h1>
        <!-- Componente post card -->
        <PostCard/>
    </div>
</template>

<script>
import PostCard from './PostCard.vue'
export default {
    name: 'PostShow',
    components: {
        PostCard
    },
    data() { 

    }
}
</script>

<style>

</style>