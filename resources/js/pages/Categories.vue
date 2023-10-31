<template>
    <div class="categoryPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">

                    <Product v-for="post in posts" :key="post.id"
                             :postGift="post"
                    />

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

import Product from "../components/MainComponents/Product.vue";

export default {
    mounted() {
        this.getCategory();
    },
    watch: {
        '$route.params.id'(newId) {
            // Call the getCategory method whenever the route parameter changes
            this.getCategory();
        },
    },

    name: "CategoryPage",
    components: {
        Product
    },
    props: {},


    data() {
        return {
            posts: [],
        };
    },
    methods: {
        getCategory() {
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/categories/${this.$route.params.id}`)
                .then(response => {
                    if (response.data.results.data.posts) {
                        this.posts = response.data.results.data.posts;
                        console.log(this.posts);

                        // Assuming the response includes category and posts data
                        // this.category = response.data.result.category;
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
    },
};
</script>

<style lang="scss" scoped>
</style>
