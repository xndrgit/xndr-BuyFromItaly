<!--<template>-->
<!--    <div class="home-page">-->
<!--        <div class="container-lg">-->
<!--            <div class="row">-->
<!--                <div class="col-6">-->
<!--                    <div class="square twitch">-->
<!--                        <div class="one"></div>-->
<!--                        <div class="two"></div>-->
<!--                        <div class="three"></div>-->
<!--                        <div class="circle">-->
<!--                            <h1 class="DrugRadar">Tunis Sans Frontièr</h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--&lt;!&ndash;                <div class="col-6">&ndash;&gt;-->
<!--&lt;!&ndash;                    <p>TSF has imported products from around the world, including Europe, China, America, and more. Our goal is to provide you with access to an extensive catalog, enabling you to find and purchase products that suit your needs, making your shopping experience convenient and fulfilling.</p>&ndash;&gt;-->
<!--                    <p>Discover TSF curated collection of imported goods, featuring:</p>-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--            </div>-->
<!--        </div>-->

<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    // Your Vue component logic-->
<!--}-->
<!--</script>-->

<!--<style lang="scss" scoped>-->


<!--.content{-->
<!--    width: 100%;-->
<!--    min-height: 100vh;-->
<!--    position: absolute;-->
<!--    top:0;-->
<!--    left:0;-->
<!--    display: flex;-->
<!--    flex-direction: column;-->
<!--    justify-content: center;-->
<!--    align-items: center;-->
<!--}-->

<!--.content h1{-->
<!--    font-size: 45px;-->
<!--    color: #fff;-->
<!--    font-weight: 400;-->
<!--    margin-bottom: 20px;-->
<!--}-->

<!--.content p{-->
<!--    font-size: 16px;-->
<!--    color: #fff;-->
<!--}-->

<!--/* === removing default button style ===*/-->
<!--.button {-->
<!--    margin: 0;-->
<!--    height: auto;-->
<!--    background: transparent;-->
<!--    padding: 0;-->
<!--    border: none;-->
<!--}-->

<!--/* button styling */-->
<!--.button {-->
<!--    &#45;&#45;border-right: 6px;-->
<!--    &#45;&#45;text-stroke-color: rgba(255,255,255,0.6);-->
<!--    &#45;&#45;animation-color:rgb(20, 36, 50);-->
<!--    &#45;&#45;fs-size: 2em;-->
<!--    letter-spacing: 3px;-->
<!--    text-decoration: none;-->
<!--    font-size: var(&#45;&#45;fs-size);-->
<!--    font-family: "Arial";-->
<!--    position: relative;-->
<!--    text-transform: uppercase;-->
<!--    color: transparent;-->
<!--    -webkit-text-stroke: 1px var(&#45;&#45;text-stroke-color);-->
<!--}-->
<!--/* this is the text, when you hover on button */-->
<!--.hover-text {-->
<!--    position: absolute;-->
<!--    box-sizing: border-box;-->
<!--    content: attr(data-text);-->
<!--    color: var(&#45;&#45;animation-color);-->
<!--    width: 0%;-->
<!--    inset: 0;-->
<!--    border-right: var(&#45;&#45;border-right) solid var(&#45;&#45;animation-color);-->
<!--    overflow: hidden;-->
<!--    transition: 0.5s;-->
<!--    -webkit-text-stroke: 1px var(&#45;&#45;animation-color);-->
<!--}-->
<!--/* hover */-->
<!--.button:hover .hover-text {-->
<!--    width: 100%;-->
<!--    filter: drop-shadow(0 0 23px var(&#45;&#45;animation-color))-->
<!--}-->


<!--/*  */-->

<!--.square {-->
<!--    position: relative;-->
<!--    margin: 0 10px;-->
<!--    width: 200px; height: 200px;-->
<!--    display: flex;-->
<!--    justify-content: center;-->
<!--    align-items: center;-->
<!--}-->

<!--.square .one {-->
<!--    position: absolute;-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    border: 2px solid black;-->
<!--    border-radius: 32% 58% 69% 43% / 48% 32% 59% 55%;-->
<!--    transition: 0.5s;-->
<!--    animation: animate 6s linear infinite;-->

<!--}-->

<!--.twitch:hover .one {-->
<!--    border: none;-->
<!--    background:rgb(20, 36, 50);;-->
<!--}-->

<!--.square .two {-->
<!--    position: absolute;-->
<!--    top: 0;-->
<!--    left: 0;-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    border: 2px solid black;-->
<!--    border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;-->
<!--    transition: 0.5s;-->
<!--    animation: animate 6s linear infinite;-->
<!--}-->

<!--.twitch:hover .two {-->
<!--    border: none;-->
<!--    background: rgb(20, 36, 50);;-->

<!--}-->


<!--.square .three {-->
<!--    position: absolute;-->
<!--    top: 0;-->
<!--    left: 0;-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    border: 2px solid black;-->
<!--    border-radius: 31% 45% 74% 35% / 38% 56% 51% 37%;-->
<!--    transition: 0.5s;-->
<!--    animation: animate2 10s linear infinite;-->
<!--}-->
<!--.twitch:hover .three {-->
<!--    border: none;-->
<!--    background:rgb(20, 36, 50);;-->
<!--}-->

<!--.circle {-->
<!--    position: relative;-->
<!--    padding: 40px 60px;-->
<!--    text-align: center;-->
<!--    transition: 0.5s;-->
<!--    z-index: 1000;-->
<!--}-->

<!--.square:hover{-->
<!--    color: white;-->
<!--}-->

<!--.content:hover {-->

<!--    color: #ffffff;-->
<!--}-->

<!--@keyframes animate {-->
<!--    0% {-->
<!--        transform: rotate(0deg);-->
<!--    }-->
<!--    100% {-->
<!--        transform: rotate(360deg);-->
<!--    }-->
<!--}-->

<!--@keyframes animate2 {-->
<!--    0% {-->
<!--        transform: rotate(360deg);-->
<!--    }-->
<!--    100% {-->
<!--        transform: rotate(0deg);-->
<!--    }-->

<!--}-->

<!--.DrugRadar{-->
<!--    font-size: 50px;-->
<!--}-->
<!--</style>-->
