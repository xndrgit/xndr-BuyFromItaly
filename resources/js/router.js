// importiamo vue-router
import VueRouter from 'vue-router';

// importiamo le singole pagine
import Home from './pages/Home.vue';
import Contacts from './pages/Contacts.vue';
import Categories from "./pages/Categories.vue";
import Promo from "./pages/Promo.vue";
import About from "./pages/About.vue";

// per ogni pagina avrò: path (uri) name (by name class), component
const router = new VueRouter({
    mode: 'history',
    routes: [
        // {
        //     path: '/',
        //     name: 'welcome',
        //     component: Welcome
        // },
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/categories/:id',
            name: 'categories',
            component: Categories
        },
        {
            path: '/promo',
            name: 'promo',
            component: Promo
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
    ],
});


// sta esportando a chiunque lo chiami router
export default router;
