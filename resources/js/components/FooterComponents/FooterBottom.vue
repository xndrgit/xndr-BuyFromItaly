<template>
    <div class="FooterBottom">
      <div class="d-flex align-items-center justify-content-center p-0">

          <div class="d-flex align-items-center">
              <p class="policy">
                  ©2023 TUNIS SANS FRONTIER SRL - PRIVACY & COOKIES
                  POLICY - MADE WITH <span class="text-danger"> ♥ </span> BY
                  <a href="https://wa.me/+393880771396">xndr</a>
              </p>
          </div>

          <div>
              <!--                <img-->
              <!--                  alt="payment_cards"-->
              <!--                  class="img-fluid"-->
              <!--                  src="../../../../public/Links/carte-di-pagamento.png"-->
              <!--                />-->
          </div>

        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>

.FooterBottom {
    width: 100%;
    background: #f1efe9;
    color: black;

    a {
        font-size: 1rem;
    }


    .policy {
        display: contents;
        font-size: 0.7rem;
    }

    p {
        a {
            text-decoration: none;
            margin-left: 10px;
        }
    }


}

@media (max-width: 1000px) {
  img {
    height: 18px; /* Height for screens less than 1000px */
  }
  .policy {
    font-size: 0.5rem;
    height: 20px;
  }
}

@media (max-width: 576px) {
  img {
    display: none;
  }
  .policy {
      font-size: 0.55rem !important;
      font-weight: bold;
  }
}
</style>
