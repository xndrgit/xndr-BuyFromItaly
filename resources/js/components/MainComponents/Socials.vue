
<template>
    <div :id="isMenuCentered ? '' : 'click-me'" :class="{ 'menu': true, 'centered-menu important': isMenuCentered }">
        <input id="click" v-model="isMenuCentered" type="checkbox">
        <label class="toggle" for="click">
            <!--            <i aria-hidden="true" class="fa-regular fa-comment-dots"></i>-->
            <!--            <i class="fa-regular fa-paper-plane"></i>-->
            <img alt="message" class="img-fluid" src="/img/sms.png">
        </label>

        <!--        <li style="&#45;&#45;x:0;&#45;&#45;color:black">-->
        <!--            <a href="#"><i aria-hidden="true" class="fa-brands fa-tiktok"></i></a>-->
        <!--        </li>-->
        <li style="--x:1;--color:#25d366">
            <a href="https://wa.me/+393880771396"><i aria-hidden="true" class="fa-brands fa-whatsapp"></i></a>
        </li>
        <li style="--x:2;--color:#1da1f2">
            <a href="https://t.me/+393880771396"><i aria-hidden="true" class="fa-brands fa-telegram"></i></a>
        </li>
        <li style="--x:3;--color:#c32aa3">
            <a href="https://www.instagram.com/xndr.ig/"><i aria-hidden="true" class="fa-brands fa-instagram"></i></a>
        </li>
        <!--        <li style="&#45;&#45;x:4;&#45;&#45;color:#0a66c2">-->
        <!--            <a href="#"><i aria-hidden="true" class="fa-brands fa-linkedin"></i></a>-->
        <!--        </li>-->
        <!--        <li style="&#45;&#45;x:5;&#45;&#45;color:#c32aa3">-->
        <!--            <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>-->
        <!--        </li>-->
        <!--        <li style="&#45;&#45;x:6;&#45;&#45;color:#ff0000">-->
        <!--            <a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>-->
        <!--        </li>-->
        <!--        <li style="&#45;&#45;x:6;&#45;&#45;color:#1b1e21">-->
        <!--            <a href="https://github.com/xndrgit"><i aria-hidden="true" class="fa-brands fa-github"></i></a>-->
        <!--        </li>-->

    </div>
</template>

<script>

export default {
    computed: {},
    mounted() {
    },
    watch: {
        isMenuCentered(newValue) {
            if (newValue) {
                this.scrollWindowUp();
            }
        }
    },

    name: "Socials",
    components: {},
    props: {},


    data() {
        return {
            isMenuCentered: false,
            // isMenuCentered: false,
        };
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },
        scrollWindowUp() {
            window.scrollTo({
                top: 30,
                behavior: 'smooth' // Smooth scrolling animation
            });
        },

    },
};
</script>

<style lang="scss" scoped>
.menu {
    position: fixed;
    bottom: 20px;
    right: -80px;
    /* Add other styles as needed */
}

.centered-menu {
    bottom: 50%;
    right: 50%;
    transform: translate(50%, 50%);
    /* Add other styles as needed */
}
</style>
