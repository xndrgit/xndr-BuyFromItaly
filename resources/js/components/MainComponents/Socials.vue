<template>
    <div :class="{ 'menu': true, 'centered-menu': isMenuCentered }">
        <input id="click" v-model="isMenuCentered" type="checkbox">
        <label class="toggle" for="click">
            <i class="fa-regular fa-thumbs-up"></i>
        </label>

        <li style="--x:0;--color:#1877f2">
            <a><i aria-hidden="true" class="fa-brands fa-facebook disabled"></i></a>
        </li>
        <li style="--x:1;--color:#25d366">
            <a href="https://wa.me/+393880771396"><i aria-hidden="true" class="fa-brands fa-whatsapp"></i></a>
        </li>
        <li style="--x:2;--color:#1da1f2">
            <a href="https://t.me/xndrgram" target="_blank"><i aria-hidden="true" class="fa-brands fa-telegram"></i></a>
        </li>
        <li style="--x:3;--color:#FF5733">
            <a href="#"><i aria-hidden="true" class="fa-brands fa-reddit disabled"></i></a>
        </li>
        <li style="--x:4;--color:#0a66c2">
            <a href="#"><i aria-hidden="true" class="fa-brands fa-linkedin disabled"></i></a>
        </li>
        <li style="--x:5;--color:#c32aa3">
            <a href="https://www.instagram.com/xndr.ig/"><i aria-hidden="true" class="fa-brands fa-instagram"></i></a>
        </li>
        <li style="--x:6;--color:#ff0000">
            <a href="#"><i aria-hidden="true" class="fa-brands fa-youtube disabled"></i></a>
        </li>
        <li style="--x:7;--color:#1b1e21">
            <a href="https://github.com/xndrgit"><i aria-hidden="true" class="fa-brands fa-github"></i></a>
        </li>

    </div>
</template>

<script>

export default {
    computed: {},
    mounted() {
    },
    watch: {},

    name: "Socials",
    components: {},
    props: {},


    data() {
        return {
            isMenuCentered: false,
        };
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },

    },
};
</script>

<style lang="scss" scoped>
.menu {
    position: fixed;
    bottom: -80px;
    right: -80px;
    /* Add other styles as needed */
}

.centered-menu {
    bottom: 50%;
    right: 50%;
    transform: translate(50%, 50%);
    /* Add other styles as needed */
}

.disabled {
    color: gray;
    cursor: not-allowed;
}
</style>
