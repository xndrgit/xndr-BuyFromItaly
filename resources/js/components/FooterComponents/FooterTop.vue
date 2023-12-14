<template>
    <div class="FooterTop d-flex justify-content-between">
        <div class="container-lg">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between">
                    <div class="footer-section col-6 col-sm-3">
                        <h3>Nos coordonnées</h3>
                        <ul>
                            <li>TSF Tunis Sans Fronier s.r.l.</li>
                            <li>Vipeveien, 15</li>
                            <li>Norvège</li>
                            <li>Oslo</li>
                            <li>Tel: +216 92 808 117</li>
                        </ul>
                    </div>
                    <div class="footer-section col-6 col-sm-3">
                        <h3>Menu utilisateur</h3>
                        <ul>
                            <li><span href="#">Abonnement TSF</span></li>
                            <li><span href="#">Conditions de vente</span></li>
                            <li><span href="#">Politique de confidentialité et cookies</span></li>
                            <!--                            <li><span href="#">Contributo Conai</span></li>-->
                            <li><span href="#">Contact</span></li>
                        </ul>
                    </div>
                    <div class="footer-section col-6 col-sm-3">
                        <h3>Contacts</h3>
                        <a href="https://t.me/+393880771396"><i aria-hidden="true"
                                                                class="fa-2x fa-brands fa-telegram"></i></a>
                        <a href="https://www.instagram.com/tunisiasansfrontier/"><i aria-hidden="true"
                                                                                    class="fa-2x fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/+393880771396"><i aria-hidden="true"
                                                                 class="fa-2x fa-brands fa-whatsapp"></i></a>
                    </div>
                    <div class="footer-section col-6 col-sm-3">
                        <h3>Newsletter</h3>
                        <p>Restez informé des nouveautés, offres spéciales et bien plus encore.</p>
                        <!--                        <form>-->
                        <!--                            <input placeholder="" type="email"/>-->
                        <!--                            <br/>-->
                        <!--                            <button-->
                        <!--                                class="dark-button"-->
                        <!--                                type="submit"-->
                        <!--                            >-->
                        <!--                                ISCRIVITI-->
                        <!--                            </button>-->
                        <!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>

.FooterTop {
    padding: 3rem 0;
    background-color: #f1efe9;

    input {
        font-size: .6rem;

        padding: .4rem;
        background-color: #f1f1f1;
        border: none;
    }


    button {
        padding: 8px 2rem;
        color: white;
    }

    .footer-section {
        h3 {
            font-weight: bold;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 0.7rem;
            font-weight: 500;
        }

        img {
            height: 30px;
            margin-right: 2px;
        }

        ul {
            list-style: none;
            padding: 0;

            li {
                font-size: 0.7rem;

                font-weight: 500;

                a {
                    color: black;
                    margin: 0 0;
                }
            }
        }


    }
}

@media (max-width: 576px) {
    .FooterTop {
        padding: 3rem 0;
        background-color: white;

        input {
            background-color: transparent;
            border: 1px solid lightgray;
            width: 140px;
        }

        button {
            padding: 8px 2rem;
        }

        .footer-section {
            h3 {
                font-weight: bold;
                font-size: 1rem;
                margin-bottom: 20px;
                white-space: nowrap;
            }

            p {
                font-size: 0.6rem;
                font-weight: 500;
            }

            img {
                height: 30px;
                margin-right: 2px;
            }

            ul {
                list-style: none;
                padding: 0;

                li {
                    font-size: .6rem;
                    max-width: 150px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;

                    margin: 10px 10px 10px 0;


                    a {
                        color: black;
                        margin: 0 0;
                    }
                }
            }


        }
    }
}

</style>
