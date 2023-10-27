// importiamo vue-router
import VueRouter from 'vue-router';

// importiamo le singole pagine
import Home from './pages/Home.vue';
import Contacts from './pages/Contacts.vue';

// per ogni pagina avrò: path (uri) name (by name class), component
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
    ],
});


// sta esportando a chiunque lo chiami router
export default router;
