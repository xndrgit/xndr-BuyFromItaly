<template>

    <div class="category">
        <router-link :class="{ active: isActiveCategory(categoryGift.id) }" :to="`/categories/${categoryGift.id}`"
                     class="link_category"
        >
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
        isActiveCategory(categoryId) {
            // Check if categoryId matches the currently active category ID
            return this.$route.params.id === categoryId;
        }
    }
};
</script>

<style lang="scss" scoped>
.category {
    margin: 1rem;
    font-size: 1rem;
    display: inline-block; /* Allow elements to be side by side */


}

</style>
