<template>
    <div>
        <HeaderTop/>
        <router-view></router-view>
        <p>

<!--            <router-link to="/welcome">Go to Foo</router-link>-->
<!--            <router-link to="/contacts">Go to Bar</router-link>-->
        </p>
    </div>

</template>


<script>
import HeaderTop from "../components/HeaderComponents/HeaderTop.vue";

export default {
    name: "App",
    components: {
        HeaderTop,
    },
};
</script>


<style lang="scss">
body {
    background-color: #f1efe9;
    font-family: 'Lilita One', sans-serif;
}
</style>
