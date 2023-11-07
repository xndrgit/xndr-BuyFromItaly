<template>
    <div class="HeaderTop d-flex align-items-center top-navbar">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <section class="col-5 col-lg-5 d-none d-lg-block">
                    <div id="free" class="d-flex align-items-center justify-content-start">
                        <div>
                            <img
                                alt="logo_delivery"
                                class="img-fluid"
                                :src="getImg('logo_delivery.png')"
                            />
                        </div>
                        <div class="d-none d-lg-inline">
                            <p>ÊTES-VOUS UN NOUVEAU CLIENT?</p>
                            <p>
                                <strong>
                                    EXPÉDITION GRATUITE DANS TOUTE LE TOUNISIE
                                </strong>
                            </p>
                        </div>
                    </div>
                </section>


                <router-link class="divLogo col-2 d-flex flex-column justify-content-center align-items-center" to="/">
                    <transition mode="out-in" name="fade">
                        <img key="logo" :src="getImg('logo.png')" alt="logo" class="logo"/>
                    </transition>
                    <!--                    <transition v-if="!showLogo" name="fade" mode="out-in">-->
                    <!--                        <div class="div-tsf">-->
                    <!--                            <img alt="logo" class="img-fluid logo-tsf" :src="getImg('tsf.png')" key="tsf" />-->
                    <!--                        </div>-->
                    <!--                    </transition>-->
                </router-link>

                <!--                                <h1 v-if="!showLogo" class="title">-->
                <!--                                    Tunis,<br>-->
                <!--                                    Sans<br>-->
                <!--                                    Frontières.-->
                <!--                                </h1>-->


                <section class="col-5 col-lg-5 d-none d-lg-flex justify-content-center fa-bounce">
                    <div class="button" @click="toggleBuyComponent">
                        <i class="fa-2 fa-solid fa-headset"></i>
                        Contact
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.getImg();

        setInterval(() => {
            this.toggleElements();
        }, 5000);
    },

    data() {
        return {
            showLogo: true,

            nextDay: new Date(new Date().getTime() + 2 * 24 * 60 * 60 * 1000), // set to the day after tomorrow
        };
    },

    filters: {
        formatDate(date) {
            const options = {
                weekday: "long", // spell out the day of the week
                day: "numeric", // show the day of the month as a number
                month: "long", // spell out the month name
            };
            // Get the formatted date
            const formattedDate = date.toLocaleDateString("fr-FR", options);

            // Convert the formatted date to uppercase
            return formattedDate.toUpperCase();
        }
    },

    methods: {
        getImg(name) {
            return `/img/${name}`;
        },

        toggleElements() {
            this.showLogo = !this.showLogo;
        },

        toggleBuyComponent() {
            this.$emit('toggleBuyComponent', true);
        },
    },
};
</script>

<style lang="scss" scoped>

.HeaderTop {
    z-index: 10;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;

    height: 100px;

    padding: 5rem 0;

    background: linear-gradient(rgba(241, 239, 233, 1) 85%, rgba(241, 239, 233, 0) 100%); /* Start transparency at the bottom */


    section {
        transition: 1s;

        img {
            height: 30px;
            margin: 0.5rem;
        }

        p {
            margin: 0;
            font-size: 0.8rem;
        }

        a {
            text-decoration: none;
            color: white;
        }


    }


    .divLogo {
        text-decoration-line: none;


        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.5s;
        }

        .fade-enter, .fade-leave-to {
            opacity: 0;
        }

        .logo {
            height: 150px;
            cursor: pointer;
            transition: 0.2s;

            &:hover {
                opacity: 0.8;

            }
        }

        .div-tsf {
            height: 100px;
            width: 100px;

            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, transform 0.3s, border 0.3s; /* Add transitions for smooth hover effects */
        }

        .div-tsf:hover {
            background-color: white; /* Darken the background on hover */
            transform: scale(1.05); /* Slightly scale up on hover for a zoom effect */
        }

        .logo-tsf {
            max-height: 140%;
            max-width: 140%;
            border-radius: 50%;
        }

        .title {
            font-size: 1.5rem;
            cursor: pointer;
            color: black;
        }
    }

}

@media (max-width: 768px) {

}
@media (min-width: 769px) and (max-width: 1024px) {
    /* CSS for tablets */
}


</style>
