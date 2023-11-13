<template>

    <div class="donation-banner col-12 d-flex flex-column flex-lg-row justify-content-center">
        <img :src="getImg('logo.png')" alt="Donation Image"
             class="col-md-4 col-lg-4 d-none d-lg-block banner-image img-fluid">
        <div class="banner-content col-lg-6 col-12 ">
            <h2>PALESTINE EMERGENCY</h2>
            <p>Stand with Gaza. Donate now and make a difference, every donation counts.</p>
            <a class="donate-button"
               href="https://islamicaid.com/current-appeals/palestine-appeal/?gclid=Cj0KCQjwy4KqBhD0ARIsAEbCt6ixhNRwX9iNJUh5i_VlWqQXLtjYM-zSbr-NrpGJi9Ejeuqd66lJL0kaAlwsEALw_wcB">Donate
                Now</a>
        </div>
    </div>

</template>

<script>

export default {
    mounted() {
    },

    name: "Buy",
    components: {},
    props: {},


    data() {
        return {};
    },
    methods: {
        getImg(name) {
            return `/img/${name}`;
        },
    },
};
</script>

<style lang="scss" scoped>
/* Banner Container */
.donation-banner {
    display: flex;
    align-items: center;
    background: linear-gradient(90deg, rgba(241, 239, 233, 0) 30%, rgba(0, 122, 61, 0.62) 100%); /* Green gradient */
    color: #fff; /* White text */
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Shadow effect */
}

/* Banner Content */
.banner-content {
    text-align: center;
}

/* Heading */
h2 {
    font-size: 24px;
    margin: 0;
}

/* Paragraph */
p {
    font-size: 16px;
    margin: 10px 0;
}

/* Donate Button */
.donate-button {
    display: inline-block;
    padding: 12px 24px;
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 20px;
    transition: background-color 0.3s;
    margin-top: 15px;
}

.donate-button:hover {
    background-color: rgba(0, 0, 0, 0.8); /* Darker black on hover */
}


@media (max-width: 768px) {
    /* Banner Container */
    .donation-banner {
        display: flex;
        align-items: center;
        background: linear-gradient(180deg, rgba(241, 239, 233, 0) 40%, rgba(0, 122, 61, 0.62) 100%); /* Transparent to Green gradient (top to bottom) */
        color: #fff; /* White text */
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Shadow effect */
    }
}


</style>
