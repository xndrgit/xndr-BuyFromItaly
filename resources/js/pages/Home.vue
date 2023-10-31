<template>
    <div class="home">
        <div class="container-fluid">
            <div class="row">
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

export default {
    mounted() {
    },

    name: "Home",
    components: {
        Product,
        BuyComponent,
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

.contact-box {
    background-color: #f7f7f7;
    border-radius: 20px;
    padding: 30px;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;

    border: 2px solid black;
}

.contact-details {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contact-item {
    display: flex;
    align-items: center;
    margin: 15px 0;


    cursor: pointer;
}

i {
    font-size: 24px;
    margin-right: 15px;
    color: #007BFF;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.intro-text {
    font-size: 16px;
    margin-bottom: 20px;
}

.contact-text {
    display: flex;
    flex-direction: column;
    text-align: left;
}

span {
    font-weight: bold;
    color: #007BFF;
}

.contact-info {
    font-weight: normal;
}

cta-button {
    margin: 30px 0;
}

.buy-button {
    display: flex;
    align-items: center;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.buy-button:hover {
    background-color: #0056b3;
}

/* Add hover effect for a subtle interaction */
.contact-item:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}

.home {
    padding-top: 80px;
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
    background-color: red;
    min-height: 0;
}
</style>
