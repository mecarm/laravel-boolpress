import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//Import dei componenti che fungono da pagine 
import AboutUs from './components/pages/AboutUs.vue'
import Posts from './components/pages/posts/Posts.vue'
import PostShow from './components/pages/posts/PostShow.vue'

const router = new VueRouter({
    //Scriverò tutti i miei path per le diverse pagine

    //Questa linea di codice serve per dare una cronologia al browser quando l'utente si muove sulla nostra single page application
    mode: 'history', 

    routes: [
        {
            path: '/about-us',
            name: 'about-us',
            component: AboutUs
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/post/:id',
            name: 'singlePost',
            component: PostShow
        }
    ]
});

export default router;