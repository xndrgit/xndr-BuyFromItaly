<template>
    <div class="donation-banner container-fluid">
        <img :src="getImg('logo.png')" alt="Donation Image" class="banner-image img-fluid"/>
        <div class="banner-content">
            <h2>URGENCE PALESTINE</h2>
            <p>Solidarité avec Gaza. Faites un don dès maintenant et faites la différence, chaque don compte.</p>
            <a class="donate-button"
               href="https://islamicaid.com/current-appeals/palestine-appeal/?gclid=Cj0KCQjwy4KqBhD0ARIsAEbCt6ixhNRwX9iNJUh5i_VlWqQXLtjYM-zSbr-NrpGJi9Ejeuqd66lJL0kaAlwsEALw_wcB">FAIRE
                UN DON</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "DonationComponent",

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
    justify-content: center;
    background: linear-gradient(
            90deg,
            rgba(241, 239, 233, 0) 5%,
            rgba(0, 122, 61, 0.62) 100%
    );
    color: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

/* Banner Image */
.banner-image {
    width: 300px; /* Adjust the size of the image */
    height: auto;
}

/* Banner Content */
.banner-content {
    text-align: start;
    flex-grow: 1;
    padding: 0 20px;
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
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 20px;
    transition: background-color 0.3s;
    margin-top: 15px;
}

.donate-button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

@media (max-width: 768px) {
    /* Adjustments for smaller screens */
    .donation-banner {
        flex-direction: column;
        align-items: center;
        padding: 20px 10px;
        background: linear-gradient(
                180deg,
                rgba(241, 239, 233, 0) 30%,
                rgba(0, 122, 61, 0.62) 100%
        );
    }

    .banner-content {
        text-align: left;
        padding: 20px 0;
    }
}
</style>
