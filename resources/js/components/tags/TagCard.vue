<template>
    <div>
        <!-- Stampo la lista dei post del tag -->
            <div class="text-start" v-for="elem in tag" :key="elem">
                <ul>
                    <li v-for="element in elem.posts" :key="element">
                        {{ element.title }}
                    </li>
                </ul>
            </div>
    </div>
</template>

<script>
export default {
    name: 'TagCard',
    data() {
        return {
            tag: [],
        }
    },
    mounted() {
        this.getTag();
    },
    methods: {
        getTag() {
            axios.get('http://127.0.0.1:8000/api/tags/' + this.$route.params.name)
                .then( res => {
                    console.log(res.data);
                    this.tag = res.data;
                }).catch(err => {
                    console.log(err);
                })
        }
    }
}
</script>

<style>

</style>