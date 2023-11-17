<template>

    <div class="product d-flex justify-content-center flex-column align-items-center col-6 col-md-3 col-lg-2">

        <div
            :style="{ backgroundImage: `url(${getImg(postGift.cover)})` }"
            class="productTop d-flex justify-content-center align-items-center"
        >

            <div class="overlay" @click="handleOverlayClick">
                <div class="overlay-text">
                    B U Y
                </div>
            </div>
        </div>


        <!--        <div v-if="postGift.cover"-->
        <!--             class="productTop d-flex justify-content-center align-items-center"-->
        <!--             style="background-image: url('/img/no_image.png')"-->
        <!--        >-->
        <!--        </div>-->


        <div class="productBottom">

            <div class="d-flex">
                <h2 class="title-product mr-2">{{postGift.name}}</h2>
                <div class="d-flex mr-2">
                    <h3 v-if="postGift.category" :style="{ color: postGift.category.color }"
                        class="category badge rounded-pill">{{ postGift.category.name }}</h3>
                </div>
            </div>


            <div class="info-product d-flex align-items-center ">
                <div v-if="!postGift.promo_price" class="d-flex mr-2">
                    <i class="fa fa-solid fa-tag"></i>
                    <h3 class="price">{{ postGift.price }} TND</h3>
                </div>
                <div v-if="postGift.promo_price" class="d-flex mr-2">
                    <i class="fa fa-solid fa-tag"></i>
                    <h3 class="price" style="text-decoration: line-through;">{{ postGift.price }}</h3>
                </div>
                <div v-if="postGift.promo_price" class="d-flex mr-2">
                    <i class="fa fa-shake fa-solid fa-tag" style="color: #ff0000;"></i>
                    <h3 class="promo_price">{{ postGift.promo_price }} TND</h3>
                </div>
                <div class="d-flex">
                    <a :href="postGift.shop_link" class="d-flex divBuy">
                        <i class="fa-solid fa-globe"></i>
                        <!--                    <h3 class="buy">buy</h3>-->
                    </a>
                </div>
            </div>


        </div>
    </div>

</template>

<script>
export default {
    mounted() {
    },

    name: "Product",
    props: {
        postGift: Object,
    },

    data() {
        return {
        };
    },
    methods: {
        getImg(name) {
            if (name.includes('no_image')) {
                return `/img/no_image.png`;
            }
            return `/storage/${name}`;
        },
        toggleBuyComponent() {
            this.$emit('toggleBuyComponent', true);
        },

        handleOverlayClick() {

            if (this.$route.name === 'home') {
                this.$router.push({
                    name: 'promo',
                });
                this.$router.replace({
                    name: 'home',
                    params: {product: this.postGift.name /* your product ID or data */},
                });
                console.log(this.$route.params.product);
            } else {
                // Save data in $route or use Vuex to manage shared state
                this.$router.replace({
                    name: 'home',
                    params: {product: this.postGift.name /* your product ID or data */},
                });
            }


            // Change the Y position of the page
            setTimeout(() => {
                window.scrollTo({
                    top: document.documentElement.scrollHeight,
                    behavior: "smooth", // You can adjust the scrolling behavior
                });
            }, 100);

        },
    }
};
</script>

<style lang="scss" scoped>
.product {
    margin: 3rem;

    .productTop {
        position: relative;

        min-height: 250px;
        width: 250px;
        //background-color: red;

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        cursor: pointer;

        .overlay {
            position: absolute;

            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            transition: 1s;

            &:hover {
                background: rgba(0, 0, 0, 0.7); /* Darken the background on hover */
            }

            &:hover .overlay-text {
                opacity: 1;
            }

            &:hover .overlay-link {
                opacity: 1;
            }

            i {
                color: white; /* Color of the 'i' icon */
            }

            .overlay-text {
                opacity: 0;

                color: white;
                font-size: 20px; /* Customize the font size */

                &:hover {
                    color: #f1efe9;
                }

            }

            .overlay-link {
                opacity: 0;

                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 25px; /* Customize the font size */
                cursor: pointer;

                transition: 1s;

                &:hover {
                    transform: scale(1.2);
                }
            }
        }
    }


    .productBottom{
        //background-color: red;
        height: 60px;
        padding-top: 10px;
        .title-product {
            font-size: 0.8rem;
            font-weight: bold;
        }
        .category{
            font-size: 0.8rem;
        }
        .info-product{
            .fa {
                margin-right: 2px;
            }

            .price {
                font-size: 0.7rem;
                margin: 0;
            }

            .promo_price {
                font-size: 0.7rem;
                color: red;
                margin: 0;
            }

            .divBuy {
                cursor: pointer;
                text-decoration: none;

                a {
                    text-decoration-line: none;

                    i {
                        font-size: 0.7rem;

                        border: 1px solid black;
                        border-radius: 50%;
                        padding: 0.3rem;
                        color: #4aa0e6;
                        transition: 0.3s ease-out;
                    }
                }


                .buy {
                    font-size: 0.5rem;
                }
            }
        }


    }
}

@media (max-width: 768px) {
    .product {
        margin: 2rem 0;

        .productTop {
            position: relative;
            min-height: 150px;
            width: 150px;

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            cursor: pointer;

            .overlay {
                position: absolute;

                top: 0;
                left: 0;
                width: 100%;
                height: 100%;

                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

                transition: 1s;

                &:hover {
                    background: rgba(0, 0, 0, 0.7); /* Darken the background on hover */
                }

                &:hover .overlay-text {
                    opacity: 1;
                }

                &:hover .overlay-link {
                    opacity: 1;
                }

                i {
                    color: white; /* Color of the 'i' icon */
                }

                .overlay-text {
                    opacity: 0;

                    color: white;
                    font-size: 25px; /* Customize the font size */

                    &:hover {
                        color: #f1efe9;
                    }

                }

                .overlay-link {
                    opacity: 0;

                    position: absolute;
                    top: 10px;
                    right: 10px;
                    font-size: 25px; /* Customize the font size */
                    cursor: pointer;

                    transition: 1s;

                    &:hover {
                        transform: scale(1.2);
                    }
                }
            }
        }


        .productBottom {
            //background-color: red;
            height: 60px;
            padding-top: 10px;

            .title-product {
                font-size: 0.7rem;
                font-weight: bold;
            }

            .category {
                font-size: 0.6rem;
            }

            .info-product {
                .fa {
                    margin-right: 2px;
                }

                .price {
                    font-size: 0.6rem;

                    //fix
                    margin: 0;
                }

                .promo_price {
                    font-size: 0.6rem;
                    color: red;

                    //fix
                    margin: 0;
                }

                .divBuy {
                    cursor: pointer;

                    i {
                        font-size: 0.8rem;

                        border: 1px solid black;
                        border-radius: 50%;
                        padding: 0.3rem;

                        color: black;
                    }

                    .buy {
                        font-size: 0.6rem;
                    }
                }

            }


        }
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* CSS for tablets */
}
</style>
