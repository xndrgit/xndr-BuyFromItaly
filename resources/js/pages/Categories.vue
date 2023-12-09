<template>
    <div class="categoryPage">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">


                    <router-link class="hover" to="/">
                        <svg class="shadow" height="50" viewBox="0 0 100 100"
                             width="50" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="a" color-interpolation-filters="sRGB" height="1.048" width="1.048"
                                        x="-.024"
                                        y="-.024">
                                    <feGaussianBlur stdDeviation="1"/>
                                </filter>
                            </defs>
                            <path d="M20 20v32.36h10.845v-8.837c0-1.7 1.383-3.963
             2.298-4.95
             2.585-2.79 8.72-7.055 13.965-10.43 1.314-.845 5.374-.86
             6.54
             0 4.15 3.06 10.796 8.464 13.436 11.137 1.36 1.377 1.768
             2.508 1.768 4.773v17.324c0 3.086-2.722 5.303-4.773
             5.303h-5.304c-1.722
             0-3.182-2.197-3.182-3.89v-5.126c0-1.426-1.255-1.944-2.83-1.944h-6.01c-1.947
             0-2.688 1.203-2.65 2.65.04 1.57 0 3.093 0 5.658 0
             1.592-1.178 3.006-2.476 3.006h-5.48c-2.205
             0-5.157-3.03-5.303-5.657V52.36H20V80h60V20z"
                                  fill="#9eabb0"
                                  fill-rule="evenodd" filter="url(#a)" stroke="#9eabb0"/>
                        </svg>
                        <div class="clip"></div>
                    </router-link>

                    <!--                    <LoadingProduct v-for="n in 12" v-if="loading" :key="n"/>-->
                    <LoadingProduct v-if="loading"/>

                    <Product v-for="post in posts" v-if="!loading" :key="post.id"
                             :postGift="post"
                             @toggleBuyComponent="toggleBuyComponent"
                    />
                    <!--                    <BuyComponent v-show="buyComponent"-->
                    <!--                                  @toggleBuyComponent="toggleBuyComponent"-->
                    <!--                    />-->
                    <!--                    <div v-show="buyComponent" class="overlay-black">-->
                    <!--                        <div class="content"></div>-->
                    <!--                    </div>-->

                </div>
                <!--                <DonationComponent/>-->
                <div class="col-12 d-flex justify-content-center">
                    <p class="send-product col-10 col-sm-6 text-center">Can't find what you're looking for? Let us know!
                        Drop us a message through the form below, and we'll assist you personally.</p>
                </div>
                <Form/>
            </div>


        </div>
    </div>
</template>

<script>
import axios from "axios";

import LoadingProduct from "../components/MainComponents/LoadingProduct.vue";
import Product from "../components/MainComponents/Product.vue";
import BuyComponent from "../components/MainComponents/BuyComponent.vue";
import DonationComponent from "../components/MainComponents/DonationComponent.vue";

import Form from "../components/MainComponents/Form.vue";

export default {
    mounted() {
        this.getCategory();
    },
    watch: {
        '$route.params.id'(newId) {
            // Call the getCategory method whenever the route parameter changes
            this.getCategory();
        },
        BuyComponentGift: function (newVal, oldVal) {
            if (newVal !== oldVal) {
                this.buyComponent = !this.buyComponent;
                // The BuyComponentGift variable has changed, you can do something here.
                // console.log("BuyComponentGift has changed. New value: " + newVal);
                // You can perform any actions or logic you need when BuyComponentGift changes.
            }
        }
    },

    name: "CategoryPage",
    components: {
        DonationComponent,
        BuyComponent,
        Product,
        LoadingProduct,
        Form
    },
    props: {
        BuyComponentGift: Boolean,
    },


    data() {
        return {
            loading: null,
            posts: [],
            buyComponent: false,

        };
    },
    methods: {
        getCategory() {
            this.loading = true;
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/categories/${this.$route.params.id}`)
                .then(response => {
                    if (response.data.results.data.posts) {
                        this.posts = response.data.results.data.posts;
                        console.log(this.posts);

                        this.loading = false;

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
    padding-top: 10px;
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
