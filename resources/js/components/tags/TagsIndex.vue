<template>
    <div>
        <h1>TagsIndex</h1>

        <!-- Componente lista Tags -->
        <TagsList/>
    </div>
</template>

<script>
import TagsList from './TagsList.vue'

export default {
    name: 'TagsIndex',
    components: {
        TagsList
    }
}
</script>

<style>

</style>