<template>

    <div class="contact-box col-10 col-sm-8 col-md-5 col-lg-3">

        <div class="cross-icon" @click="toggleBuyComponent">
            <i class="fa fas fa-times fa-bounce"></i>
        </div>
        <div class="contact-details">
            <img
                :src="getImg('logo.png')"
                alt="logo"
                class="img-fluid logo "
            />
            <div class="contact-item">
                <i class="fab fa-whatsapp"></i>
                <div class="contact-text">
                    <a href="https://wa.me/+393880771396">WhatsApp</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="far fa-envelope"></i>
                <div class="contact-text">
                    <a href="mailto:mymails.xander@gmail.com">mymails.xander@gmail.com</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <div class="contact-text">
                    <a href="tel:+393880771396">+39 388 077 1396</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="fab fa-instagram"></i>
                <div class="contact-text">
                    <a href="https://www.instagram.com/xndr.ig/">@xndr.ig</a>
                </div>
            </div>


            <!--                            <div class="cta-button">-->
            <!--                                <button class="buy-button">-->
            <!--                                    <i class="fas fa-shopping-cart"></i> Buy Now-->
            <!--                                </button>-->
            <!--                            </div>-->
        </div>
    </div>

</template>

<script>

export default {
    mounted() {
    },

    name: "BuyComponent",
    components: {},
    props: {},


    data() {
        return {
            cross: true,
        };
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },
        toggleBuyComponent() {
            this.$emit('toggleBuyComponent', false); // Toggle the cross variable
        },
    },
};
</script>

<style lang="scss" scoped>

.contact-box {
    z-index: 10;

    position: fixed;
    top: 60%; /* Center vertically on the viewport */
    left: 50%; /* Center horizontally on the viewport */
    transform: translate(-50%, -50%); /* Center the box perfectly */

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

    .fa {
        cursor: pointer;
        font-size: 1rem;
        border: 1px solid red;
        border-radius: 50%;
        padding: 0.5rem 0.6rem;

        color: red;

        &:hover {
            background-color: red;
            color: white;
        }
    }
}

.contact-details {
    display: flex;
    flex-direction: column;
    align-items: flex-start;

}

.contact-item {
    display: flex;
    align-items: center;
    margin: 10px 0;

    font-size: 0.8rem;


    cursor: pointer;
}

i {
    font-size: 0.8rem;
    margin-right: 10px;
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

.cta-button {
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


@media (max-width: 768px) {
    .contact-box {
        z-index: 10;

        position: fixed;
        top: 60%; /* Center vertically on the viewport */
        left: 50%; /* Center horizontally on the viewport */
        transform: translate(-50%, -50%); /* Center the box perfectly */

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

        .fa {
            cursor: pointer;
            font-size: 1rem;
            border: 1px solid red;
            border-radius: 50%;
            padding: 0.5rem 0.6rem;

            color: red;

            &:hover {
                background-color: red;
                color: white;
            }
        }
    }

    .contact-details {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin: 5px 0;
        font-size: 0.8rem;


        cursor: pointer;
    }

    i {
        font-size: 0.8rem;
        margin-right: 15px;
        color: #007BFF;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .intro-text {
        font-size: 10px;
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

    .cta-button {
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

}
</style>
