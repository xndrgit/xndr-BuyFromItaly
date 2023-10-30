<template>
    <div>
        <HeaderTop/>

        <div class="categories d-flex justify-content-center align-items-center">
            <Category
                v-for="category in categories" :key="category.id" :categoryGift="category"
            />
        </div>


        <router-view
            :postsGift="posts"
        >
        </router-view>


<!--        <p>-->
<!--&lt;!&ndash;            <router-link to="/welcome">Go to Foo</router-link>&ndash;&gt;-->
<!--&lt;!&ndash;            <router-link to="/contacts">Go to Bar</router-link>&ndash;&gt;-->
<!--        </p>-->

    </div>

</template>


<script>
import axios from 'axios';

import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";
import Category from "../components/MainComponents/Category.vue";

export default {
    mounted() {
        this.getCategories();
        this.getPosts();
    },

    name: "App",
    components: {
        HeaderTop,
        Category,
    },
    data() {
        return {
            categories: [],
            posts: [],
        };
    },
    methods: {
        getPosts() {
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/posts`)
                .then(response => {
                    if (response.data.response) {
                        // Data is available under the "results" key
                        this.posts = response.data.results.data.data;
                        console.log(`📦| posts: ${response.data.count}`);
                        console.log(this.posts);
                    } else {
                        // Handle the case where the response indicates an error
                        console.error('Error fetching data.');
                    }
                })
                .catch(error => {
                    // Handle any network or other errors
                    console.error('An error occurred:', error);
                });
        },

        getCategories() {
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/categories`)
                .then(response => {
                    if (response.data.response) {
                        // Data is available under the "results" key
                        this.categories = response.data.results.data;
                        console.log(`📦| categories: ${response.data.count}`);
                        console.log(this.categories);
                    } else {
                        // Handle the case where the response indicates an error
                        console.error('Error fetching data.');
                    }
                })
                .catch(error => {
                    // Handle any network or other errors
                    console.error('An error occurred:', error);
                });
        },
    }

};
</script>


<style lang="scss">
body {
    background-color: #f1efe9;
    //background-color: red;

    font-family: 'Lilita One', sans-serif;

    .categories{
        margin-top: 180px;
    }
}
</style>
