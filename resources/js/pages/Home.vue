<template>
    <div class="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">

                    <Product v-for="post in postsGift" :key="post.id"
                             :postGift="post"
                    />

                </div>

            </div>
        </div>
    </div>
</template>

<script>
import Product from "../components/MainComponents/Product.vue";
export default {
    mounted() {
    },

    name: "Home",
    components: {
        Product,
    },
    props: {
        postsGift: Array,
    },


    data() {
        return {
        };
    },
    methods: {
    },
};
</script>

<style lang="scss" scoped>
.home{
   padding-top: 80px;
}
.category{
    margin: 2.8rem 1rem;
    font-size: 1rem;
    .link_category{
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
    background-color: red;
    min-height: 0;
}
</style>
