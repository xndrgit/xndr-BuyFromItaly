<template>
    <div class="about-page">
        <div class="about-content">
            <!--            <p>À Propos</p>-->
            <h1>Tunis Sans Frontièr</h1>
            <p>
                Chez Tunis Sans Frontièr, rapprochons-vous du monde, directement en Tunisie. Notre mission : vous
                proposer une large gamme de produits de qualité, provenant des marchés mondiaux, répondant à vos
                besoins.
            </p>
            <h2>Notre Engagement pour la Qualité</h2>
            <p>
                Fiers de sélectionner des produits répondant aux normes les plus élevées, choisis pour leur qualité,
                leur authenticité et leur fiabilité. Nos produits sont certifiés et vérifiés avec rigueur pour votre
                satisfaction.
            </p>
            <!--            <h2>Excellence du Service</h2>-->
            <!--            <p>-->
            <!--                Notre équipe s'engage à vous offrir un service exceptionnel, dépassant vos attentes avec une assistance personnalisée et une expérience sans faille, de la commande à la livraison.-->
            <!--            </p>-->
            <h2>Portée Mondiale, Attention Locale</h2>
            <p>
                Tout en nous approvisionnant mondialement, nous accordons une grande importance à notre communauté
                locale en Tunisie. Soutenant les initiatives locales, nous contribuons au développement de notre région.
            </p>
            <h2>Contactez-Nous</h2>
            <p>
                Des questions ou des demandes de produits ? N'hésitez pas à nous contacter. Nous sommes là pour vous
                aider et répondre à vos besoins.
            </p>
            <!-- Add other sections following a similar structure -->
            <!-- Feel free to customize and add more content as needed -->
        </div>
    </div>
</template>

<script>
export default {
    name: 'About',
    // Add any necessary scripts or data for the About page
}
</script>

<style scoped>
/* Add CSS styles for your About page */
.about-page {
    display: flex;
    justify-content: center;
    align-items: center;
    /*padding-top: 50px;*/
    height: calc(100vh); /* Adjust based on your layout */
    background-color: #f1efe9;
    font-family: 'Lilita One', sans-serif; /* Use your preferred font */
    color: #333; /* Customize text color */
}

.about-content {
    max-width: 800px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.about-content h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #333; /* Customize heading color */
}

.about-content h2 {
    font-size: 1.8em;
    margin-top: 30px;
    margin-bottom: 15px;
    color: #555; /* Customize heading color */
}

.about-content p {
    font-size: 1.1em;
    line-height: 1.6;
    color: #444; /* Customize paragraph text color */
}

/* Customize styles for other elements as needed */
</style>
