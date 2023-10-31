<template>

    <div class="product col-3">

        <div
            :style="{ backgroundImage: `url(${getImg(postGift.cover)})` }"
            class="productTop d-flex justify-content-center align-items-center"
        >
            <div class="overlay">
                <div class="overlay-text">
                    V I E W
                </div>
                <div class="overlay-link">
                    <a :href="postGift.shop_link"><i class="fas fa-globe"></i></a>
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
                    <h3 class="price">{{postGift.price}}</h3>
                </div>
                <div v-if="postGift.promo_price" class="d-flex mr-2">
                    <i class="fa fa-solid fa-tag"></i>
                    <h3 class="price" style="text-decoration: line-through;">{{postGift.price}}</h3>
                </div>
                <div v-if="postGift.promo_price" class="d-flex mr-2">
                    <i class="fa fa-shake fa-solid fa-tag" style="color: #ff0000;"></i>
                    <h3 class="promo_price">{{postGift.promo_price}}</h3>
                </div>
                <div v-if="postGift.promo_price" class="d-flex mr-2">
                    <a :href="postGift.shop_link" class="d-flex">
                        <i class="fa fa-solid fa-globe "></i>
                        <h3 class="shop">search on internet</h3>
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
    }
};
</script>

<style lang="scss" scoped>
.product{
    margin: 2rem;

    .productTop {
        position: relative;

        height: 200px;
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
        .title-product{
            font-size: 1rem;
            font-weight: bold;
        }
        .category{
            font-size: 0.8rem;
        }
        .info-product{
            .fa{
                margin-right: 2px;
            }
            .price{
                font-size: 0.8rem;
            }
            .promo_price{
                font-size: 0.8rem;
                color: red;
            }
            .shop{
                font-size: 0.8rem;
            }

        }
    }
}
</style>
