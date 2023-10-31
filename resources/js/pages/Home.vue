<template>
    <div class="home">
        <div class="container-fluid">
            <div class="row">

                <DonationComponent/>

                <div class="col-12 d-flex flex-wrap justify-content-center">


                    <Product v-for="post in postsGift" :key="post.id"
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
import Product from "../components/MainComponents/Product.vue";
import BuyComponent from "../components/MainComponents/BuyComponent.vue";
import DonationComponent from "../components/MainComponents/DonationComponent.vue";

export default {
    mounted() {
    },

    name: "Home",
    components: {
        Product,
        BuyComponent,
        DonationComponent
    },
    props: {
        postsGift: Array,
    },


    data() {
        return {
            posts: [],
            buyComponent: false,
        };
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },
        toggleBuyComponent(bro) {
            this.buyComponent = bro;
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
        &:hover{
            opacity: 0.5;
        }
    }
}

.productTop{
    //background-color: red;
    min-height: 0;
}
</style>
