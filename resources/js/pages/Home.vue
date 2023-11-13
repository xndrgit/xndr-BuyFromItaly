<template>
    <div class="home">
        <div class="container-fluid">
            <div class="row">

                <!--                <DonationComponent/>-->


                <!--                <div class="col-12 d-flex overflow-auto justify-content-center product-list">-->
                <!--                    <PromoProduct v-for="post in promoPosts" :key="post.id"-->
                <!--                                  :postGift="post"-->
                <!--                                  @toggleBuyComponent="toggleBuyComponent"-->
                <!--                    />-->
                <!--                </div>-->


                <div class="col-12 d-flex flex-wrap justify-content-center">

                    <Product v-for="post in posts" v-show="!promoPostsBoolean" :key="post.id"
                             :postGift="post"
                             @toggleBuyComponent="toggleBuyComponent"
                    />

                    <BuyComponent v-show="buyComponent"
                                  @toggleBuyComponent="toggleBuyComponent"
                    />
                    <div v-if="buyComponent" class="overlay-black">
                        <div class="content"></div>
                    </div>

                </div>

                <div class="pagination-container col-12 mb-5">
                    <div :class="{disabled: currentPage <= 1}" class="pagination-button prev" @click="prevPage">
                        <i class="fa-solid fa-circle-chevron-left"></i>
                    </div>
                    <div class="current-page">{{ this.currentPage }}</div>
                    <div :class="{disabled: currentPage === this.totalPages}" class="pagination-button next"
                         @click="nextPage">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>


                <Form/>
            </div>
        </div>
    </div>
</template>

<script>
import Product from "../components/MainComponents/Product.vue";
import PromoProduct from "./Promo.vue";
import BuyComponent from "../components/MainComponents/BuyComponent.vue";
import DonationComponent from "../components/MainComponents/DonationComponent.vue";
import Form from "../components/MainComponents/Form.vue";


import axios from "axios";

export default {
    mounted() {
        this.getPosts(this.currentPage);
    },
    watch: {
        BuyComponentGift: function (newVal, oldVal) {
            if (newVal !== oldVal) {
                this.buyComponent = !this.buyComponent;
                // The BuyComponentGift variable has changed, you can do something here.
                // console.log("BuyComponentGift has changed. New value: " + newVal);
                // You can perform any actions or logic you need when BuyComponentGift changes.
            }
        },
    },

    name: "Home",
    components: {
        Product,
        PromoProduct,
        BuyComponent,
        DonationComponent,
        Form

    },
    props: {
        BuyComponentGift: Boolean,
        PromoPostGift: Boolean,
    },


    data() {
        return {
            loading: null,

            posts: [],
            promoPosts: [],
            promoPostsBoolean: false,
            buyComponent: false,

            currentPage: 1,
            totalPages: null,

        };
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },
        toggleBuyComponent(bro) {
            this.buyComponent = bro;
        },

        getPosts(page) {
            // Make an HTTP GET request to fetch all posts with their categories
            axios.get(`/api/posts?page=${page}`)
                .then(response => {
                    if (response.data.response) {
                        // Data is available under the "results" key
                        this.posts = response.data.results.data; // Assign posts to this.posts
                        console.log(`📦| posts: ${response.data.count}`);
                        console.log(this.posts);

                        // Filter posts with promo_price
                        this.promoPosts = this.posts.filter(post => post.promo_price !== null);

                        // Shuffle the posts array
                        for (let i = this.posts.length - 1; i > 0; i--) {
                            const j = Math.floor(Math.random() * (i + 1));
                            [this.posts[i], this.posts[j]] = [this.posts[j], this.posts[i]];
                        }

                        this.totalPages = response.data.results.last_page;
                        console.log(`📦| posts total pages: ${this.totalPages}`);
                        console.log(`📦| posts current page: ${this.currentPage}`);
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


        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage = this.currentPage - 1;
                this.getPosts(this.currentPage);
                // Scroll to a specific position on the page (e.g., 500 pixels from the top)
                window.scrollTo({
                    top: 180,
                    behavior: 'smooth' // This creates a smooth scrolling effect
                });
            } else {
                console.log('prev disabled');
            }

        },
        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage = this.currentPage + 1;
                this.getPosts(this.currentPage);

                // Scroll to a specific position on the page (e.g., 500 pixels from the top)
                window.scrollTo({
                    top: 180,
                    behavior: 'smooth' // This creates a smooth scrolling effect
                });
            } else {
                console.log('next disabled');
            }
        },


    },
};
</script>

<style lang="scss" scoped>

.home {
    padding-top: 80px;

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
}

.category {
    margin: 2.8rem 1rem;
    font-size: 1rem;

    .link_category {
        text-decoration: none;
        color: black;

        transition: 0.5s;
        .active{
            font-weight: bold;
        }

        &:hover {
            opacity: 0.5;
        }
    }
}

.productTop {
    //background-color: red;
    min-height: 0;
}

.pagination-container {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    padding: 10px;

    .pagination-button {
        width: 40px;
        height: 40px;
        background-color: #f1efe9;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
        border: 1px solid black;
        transition: background-color 0.3s ease, transform 0.2s ease;
        font-size: 20px;

        &:hover {
            transform: scale(1.2); /* Zoom effect on hover */
        }

    }

    .disabled {
        cursor: not-allowed;
    }

    .current-page {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        margin: 0 20px;
    }
}


</style>
