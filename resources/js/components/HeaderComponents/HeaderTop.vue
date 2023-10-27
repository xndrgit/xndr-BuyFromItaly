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


                    <div class="divLogo col-4 d-flex flex-column justify-content-center align-items-center">
                            <transition name="fade" mode="out-in">
                                <img
                                    v-if="showLogo"
                                    alt="logo"
                                    class="img-fluid logo"
                                    :src="getImg('logo.png')"
                                />
                                <h1 v-if="!showLogo" class="title">BUY FROM ITALY</h1>
                            </transition>
                    </div>



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
    //position: fixed;
    width: 100%;
    min-height: 120px;
    background-color: #f1efe9;

    padding: 0.5rem;

    section {
        transition: 1s;

        img {
            height: 25px;
            padding: 0 10px;
            margin: 0.5rem 0;
        }

        p {
            margin: 0;
            font-size: 0.6rem;
        }

        a {
            text-decoration: none;
            color: white;
        }
    }

    .divLogo{
        .logo{
            height: 100px;
            cursor: pointer;
        }
        .title{
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            color: black;
        }
    }

}



@media (max-width: 576px) {
}
</style>
