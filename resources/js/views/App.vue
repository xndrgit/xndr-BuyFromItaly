<template>
    <div>

        <!--        <Loading v-if="loading"/>-->
        <!--        <LoadingProduct v-if="loading"/>-->
        <div v-if="!loading">
            <HeaderTop @toggleBuyComponent="toggleBuyComponent"/>


            <div class="categories d-flex justify-content-center align-items-center">


                <div class=" mobile-categories d-flex flex-column align-items-center justify-content-center d-lg-none">
                    <i v-if="!iconMenu" class="fa-beat fa-solid fa-bars icon-menu" @click="toggleIconMenu"></i>
                    <i v-if="iconMenu" class=" fa-solid fa-circle-chevron-down icon-menu" @click="toggleIconMenu"></i>
                    <div v-if="iconMenu" class="mobile-menu">
                        <ul class="text-center">
                            <li class=" fa-bounce">
                                <router-link class="promo link_category text-danger text-center" to="/promo">
                                    🎟️PROMO
                                </router-link>
                            </li>
                            <li v-for="category in categories" :key="category.id">
                                <router-link :to="`/categories/${category.id}`" class="link_category">
                                    {{ category.name }}
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="fa-bounce">
                    <router-link class="mr-2 d-none d-lg-block link_category text-danger promo text-center "
                                 to="/promo">
                        🎟️PROMO
                    </router-link>
                </div>

                <Category v-for="category in categories"
                          :key="category.id" :categoryGift="category" class="d-none d-lg-block "
                />
            </div>

            <!--            <div :style="circleStyle" class="button fa-bounce d-lg-none" @click="toggleBuyComponent"-->
            <!--                 @mousedown="startDragging"-->
            <!--                 @mousemove="moveCircle" @mouseup="stopDragging">-->
            <!--                <i class="fa-2 fa-solid fa-headset"></i>-->
            <!--            </div>-->


            <router-view
                :BuyComponentGift="buyComponent"
            >
                <!--            :postsGift="posts"-->
            </router-view>
            <Socials/>
        </div>

    </div>

</template>


<script>
import axios from 'axios';

import Loading from "../components/MainComponents/Loading.vue";
import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";
import Category from "../components/MainComponents/Category.vue";
import DonationComponent from "../components/MainComponents/DonationComponent.vue";
import Socials from "../components/MainComponents/Socials.vue";

export default {
    mounted() {
        this.loaded();
    },

    name: "App",
    components: {
        Loading,
        DonationComponent,
        HeaderTop,
        Category,
        Socials
    },
    data() {
        return {
            loading: true,

            categories: [],
            posts: [],
            iconMenu: true,
            buyComponent: false,

            isDragging: false,
            offsetX: 0,
            offsetY: 0,
            circleStyle: {
                position: 'fixed',
                right: '10px', // Initial X position
                bottom: '10px',  // Initial Y position
            },
        };
    },
    methods: {
        loaded() {
            // Set loading to true
            this.loading = true;
            this.getCategories();
            // Use setTimeout to delay the code execution by 5 seconds (5000 milliseconds)
            setTimeout(() => {
                // After 5 seconds, call getCategories and set loading to false
                this.loading = false;
            }, 1000);
        },

        // getPosts() {
        //     // Make an HTTP GET request to fetch all posts with their categories
        //     axios.get(`/api/posts`)
        //         .then(response => {
        //             if (response.data.response) {
        //                 // Data is available under the "results" key
        //                 this.posts = response.data.results.data;
        //                 console.log(`📦| posts: ${response.data.count}`);
        //                 console.log(this.posts);
        //             } else {
        //                 // Handle the case where the response indicates an error
        //                 console.error('Error fetching data.');
        //             }
        //         })
        //         .catch(error => {
        //             // Handle any network or other errors
        //             console.error('An error occurred:', error);
        //         });
        // },

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
        toggleIconMenu() {
            this.iconMenu = !this.iconMenu;
        },
        toggleBuyComponent() {
            this.buyComponent = !this.buyComponent;
        },

        startDragging(event) {
            this.isDragging = true;
            const rect = event.target.getBoundingClientRect();
            this.offsetX = event.clientX - rect.left;
            this.offsetY = event.clientY - rect.top;
        },
        moveCircle(event) {
            if (this.isDragging) {
                this.circleStyle.left = event.clientX - this.offsetX + 'px';
                this.circleStyle.top = event.clientY - this.offsetY + 'px';
            }
        },
        stopDragging() {
            this.isDragging = false;
        },
    }

};
</script>


<style lang="scss">
body {
    user-select: none;

    background-color: #f1efe9;
    //background-color: red;

    font-family: 'Lilita One', sans-serif;

    .router-link-active {
        font-weight: bolder;
        font-size: 0.7rem !important;

        &:hover {
            opacity: 1;
        }
    }

    .categories {
        margin-top: 180px;

        i {
            border-radius: 50%;
            padding: 0.5rem;

            cursor: pointer;

            transition: 1s;

            &:hover {

            }
        }
    }

    .mobile-categories {

        /* CSS for the icons */
        .icon-menu {
            font-size: 20px; /* Adjust the size as needed */
            cursor: pointer;
            color: #333; /* Change the color as needed */
        }

        /* Show the menu when categoriesMenu is active */
        .categories-menu-active .mobile-menu {
            background-color: #fff; /* Background color for the menu */
            position: absolute;
            top: 40px; /* Adjust the top position as needed */
            right: 0;
            width: 200px; /* Adjust the width as needed */
            border: 1px solid #ddd; /* Add a border for separation */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a shadow for depth */
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
        }

        .mobile-menu li {
            margin: 10px 0;

        }

        .mobile-menu a {
            text-decoration: none;
            color: #333; /* Link color */
        }

    }

    .button {
        z-index: 99;

        display: inline-block;
        padding: 0.5rem 0.8rem;
        border: 2px solid black;
        border-radius: 50px;
        text-align: center;
        color: black;
        background-color: white;
        cursor: pointer;
        transition: background-color 0.3s;


        &:hover {
            background-color: #ccc;
        }
    }

    .link_category {
        font-size: 0.7rem;
        text-decoration: none;
        color: black;
        transition: all 0.3s ease; /* Smooth transition for all properties */

        /* Add subtle hover effects */
        &:hover {
            transform: translateY(-3px); /* Slightly lift the element */
            //opacity: 0.8; /* Reduce opacity on hover */
        }

        /* Add an underline effect on hover */
        &::after {
            content: "";
            display: block;
            width: 0;
            height: 2px;
            background: black;
            transition: width 0.3s ease; /* Animate the underline width */
        }

        &:hover::after {
            width: 100%; /* Expand the underline on hover */
        }
    }


}
</style>
