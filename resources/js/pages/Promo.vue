<template>
    <div class="categoryPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">

                    <LoadingProduct v-for="n in 16" v-if="loading" :key="n"/>
                    <Product v-for="post in promoPosts" v-if="!loading" :key="post.id"
                             :postGift="post"
                             @toggleBuyComponent="toggleBuyComponent"
                    />

                    <BuyComponent v-show="buyComponent"
                                  @toggleBuyComponent="toggleBuyComponent"
                    />
                    <div v-show="buyComponent" class="overlay-black">
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
import LoadingProduct from "../components/MainComponents/LoadingProduct.vue";
import BuyComponent from "../components/MainComponents/BuyComponent.vue";
import DonationComponent from "../components/MainComponents/DonationComponent.vue";
import loading from "../components/MainComponents/Loading.vue";

export default {
    computed: {
        loading() {
            return loading
        }
    },
    mounted() {
        this.getPosts();
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
        LoadingProduct
    },
    props: {
        BuyComponentGift: Boolean,
    },


    data() {
        return {
            posts: [],
            promoPosts: [],
            buyComponent: false,
            loading: false,
        };
    },
    methods: {
        async getPosts() {
            this.loading = true;
            try {
                // Initialize an array to store all promo products
                const allPromoProducts = [];

                // Make an initial request to get the first page
                let page = 1;
                let totalPages = 1; // Initialize to a non-zero value
                while (page <= totalPages) {
                    const response = await axios.get(`/api/posts?page=${page}`);
                    if (response.data.response) {
                        // Data is available under the "results" key
                        const pageData = response.data.results.data;

                        // Filter and add promo products from this page to the array
                        const promoProducts = pageData.filter(post => post.promo_price !== null);
                        allPromoProducts.push(...promoProducts);

                        // Update the total number of pages
                        totalPages = response.data.results.last_page;

                        // Move to the next page
                        page++;


                    } else {
                        // Handle the case where the response indicates an error
                        console.error('Error fetching data.');
                        break;
                    }
                }

                // Set the promo products to your component data
                this.promoPosts = allPromoProducts;
                this.loading = false;
            } catch (error) {
                // Handle any network or other errors
                console.error('An error occurred:', error);
            }
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
