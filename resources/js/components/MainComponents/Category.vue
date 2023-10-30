<template>

    <div class="category">
        <router-link :to="`/categories/${categoryGift.id}`" class="link_category">
            {{ categoryGift.name }}
        </router-link>
    </div>

</template>

<script>
export default {
    mounted() {
    },

    name: "App",
    props: {
        categoryGift: Object,
    },

    data() {
        return {
        };
    },
    methods: {
    }
};
</script>

<style lang="scss" scoped>
.category{
    margin: 1rem;
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
</style>
