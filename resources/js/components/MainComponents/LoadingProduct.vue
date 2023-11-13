<template>

    <div class="product d-flex justify-content-center flex-column align-items-center col-6 col-md-3 col-lg-2">

        <div
            class="productTop d-flex justify-content-center align-items-center"
            style="{ background: lightgray  }"
        >
            <div class="loading-circle">
                <i class="fas fa-circle-notch fa-spin"></i>
            </div>
        </div>


        <!--        <div v-if="postGift.cover"-->
        <!--             class="productTop d-flex justify-content-center align-items-center"-->
        <!--             style="background-image: url('/img/no_image.png')"-->
        <!--        >-->
        <!--        </div>-->


        <div class="productBottom">

            <div class="d-flex">
                <h2 class="title-product mr-2">LOADING...</h2>
            </div>

        </div>
    </div>

</template>

<script>
export default {
    mounted() {
    },

    name: "LoadingProduct",
    props: {},

    data() {
        return {};
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

.product {
    margin: 5.5rem 2rem;

    .productTop {
        position: relative;

        min-height: 250px;
        width: 250px;
        //background-color: red;

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        cursor: pointer;

        .loading-circle {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-circle-notch {
            font-size: 4rem; /* You can adjust the size as needed */
            color: #3498db; /* You can change the color */
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

        }

    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* CSS for tablets */
}
</style>
