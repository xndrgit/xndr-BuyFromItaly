<template>
    <div class="HeaderTop d-flex align-items-center top-navbar">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <section class="col-4 col-lg-3 d-none d-lg-block">
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
                                    EXPÉDITION GRATUITE DANS TOUTE L'ITALIE
                                </strong>
                            </p>
                        </div>
                    </div>
                </section>



                        <router-link to="/" class="divLogo col-4 d-flex flex-column justify-content-center align-items-center">
                            <transition name="fade" mode="out-in">
                                <img
                                    v-if="showLogo"
                                    alt="logo"
                                    class="img-fluid logo"
                                    :src="getImg('logo.png')"
                                />

                                <h1 v-if="!showLogo" class="title">
                                    Tunis,<br>
                                    Sans<br>
                                    Frontières.
                                </h1>
                            </transition>
                        </router-link>





                <section class="col-4 col-lg-3 d-none d-lg-block">
                    <div id="clock" class="d-flex align-items-center justify-content-end">
                        <div>
                            <img class="img-fluid" alt="logo_time" :src="getImg('logo_time.gif')" />
                        </div>
                        <div class="d-none d-lg-inline">
                            <p>RÉSERVEZ! AVANT QUE LA COMMANDE NE COMMENCE</p>
                            <p>
                                <strong> {{ nextDay | formatDate }} </strong>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showLogo: true,

            nextDay: new Date(new Date().getTime() + 2 * 24 * 60 * 60 * 1000), // set to the day after tomorrow
        };
    },
    mounted() {
        setInterval(() => {
            this.toggleElements();
        }, 5000);
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
            return `img/${name}`;
        },

        toggleElements() {
            this.showLogo = !this.showLogo;
        },
    },
};
</script>

<style lang="scss" scoped>

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
}

.HeaderTop {
    z-index: 10;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;

    height: 100px;

    padding: 5rem 0;

    background: linear-gradient(rgba(241, 239, 233, 1) 80%, rgba(241, 239, 233, 0) 100%); /* Start transparency at the bottom */


    section {
        transition: 1s;

        img {
            height: 40px;
            padding: 0 10px;
            margin: 0.5rem 0;
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

    .divLogo{
        text-decoration-line: none;
        .logo{
            height: 120px;
            cursor: pointer;
        }
        .title{
            font-size: 1.5rem;
            cursor: pointer;
            color: black;
        }
    }

}



@media (max-width: 576px) {
}
</style>
