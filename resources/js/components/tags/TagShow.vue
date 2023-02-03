<template>
    <div class="text-center">
        <h1>Pagina di dettaglio del tag: {{ this.$route.params.name }}</h1>
        <!-- Componente TagCard -->
        <TagCard/>
    </div>
</template>

<script>
import TagCard from './TagCard.vue';

export default {
    name: 'TagShow',
    components: {
        TagCard,
    }
}
</script>

<style>

</style>