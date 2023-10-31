<template>
    <div class="categoryPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">

                    <Product v-for="post in posts" :key="post.id"
                             :postGift="post"
                             @toggleBuyComponent="toggleBuyComponent"
                    />
                    <BuyComponent v-if="buyComponent"
                                  @toggleBuyComponent="toggleBuyComponent"
                    />
                    <div v-if="buyComponent" class="overlay-black">
                        <div class="content"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

import Product from "../components/MainComponents/Product.vue";
import BuyComponent from "../components/MainComponents/BuyComponent.vue";

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
        BuyComponent,
        Product
    },
    props: {},


    data() {
        return {
            posts: [],
            buyComponent: false,
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
        toggleBuyComponent(bro) {
            this.buyComponent = bro;
        },
    },
};
</script>

<style lang="scss" scoped>

.categoryPage {
    padding-top: 80px;
}

.overlay-black {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    z-index: 9; /* Adjust the z-index as needed */
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>
