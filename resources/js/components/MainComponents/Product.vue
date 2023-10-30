<template>

    <div class="product col-3">
        <div
             class="productTop d-flex justify-content-center align-items-center"
             :style="{ backgroundImage: `url(${getImg(postGift.cover)})` }">
        </div>



        <div class="productBottom">

            <div class="d-flex">
                <h2 class="title-product mr-2">{{postGift.name}}</h2>
                <div class="d-flex mr-2">
                    <h3 :style="{ color: postGift.category.color }" class="category badge rounded-pill">{{postGift.category.name}}</h3>
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
            return `storage/${name}`;
        },

        isImgValid(url){

            // Check if the URL includes "no_image" and return false if found
            if (url.includes('no_image')) {
                return false;
            }

            const pattern = /^storage\/.+\.jpg|\.png|\.gif$/;
            return pattern.test(url);
        },
    }
};
</script>

<style lang="scss" scoped>
.product{
    margin: 2rem;

    .productTop{
        height: 200px;
        //background-color: red;

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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
