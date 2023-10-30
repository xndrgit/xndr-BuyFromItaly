<template>
    <div class="categoryPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">
asdfasdasdasd
<!--                    <Product v-for="post in posts" :key="post.id"-->
<!--                             :postGift="post"-->
<!--                    />-->

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

// import Product from "../components/MainComponents/Product.vue";

export default {
    mounted() {
        this.getCategory();
    },

    name: "CategoryPage",
    components: {
        // Product
    },
    props: {

    },


    data() {
        return {
        };
    },
    methods: {
        getCategory() {
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/categories/${this.$route.params.id}`)
                .then(response => {
                    if (response.data) {
                        console.log("🔴");

                        // Assuming the response includes category and posts data
                        // this.category = response.data.result.category;
                        // this.posts = response.data.result.posts;
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
