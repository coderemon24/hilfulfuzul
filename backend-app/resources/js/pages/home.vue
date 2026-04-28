<template>
  <div>

    <!----- Slider Section ---->
    <div class="container mx-auto w-11/12">
      <FluxSlider />
    </div>

    <!----- About Section ---->
    <div class="bg-white">
      <About />
    </div>

    <!----- Donation Section ---->
    <section class="py-10">
      <div class="container w-11/12 mx-auto">

        <h2 class="text-black text-center text-2xl font-semibold mb-8">
          চলুন একসাথে একটি পরিবর্তন আনি
        </h2>

        <div class="donations flex flex-wrap justify-center gap-7">
          <DonationCard v-for="card in cards" :key="card" />
        </div>

        <div class="pt-10">
          <Link
            class="bg-green-700 cursor-pointer hover:bg-green-700 text-white py-2 px-8 md:px-10 rounded-lg transition-colors duration-300 block w-fit text-center mx-auto group"
            href="#"
          >
            আরো দেখুন &nbsp;
            <i class="fa-solid fa-arrow-right-long group-hover:pl-4 transition-all ease-in-out duration-200"></i>
          </Link>
        </div>

      </div>
    </section>

    <!----- Project Section ---->
    <section class="py-10 bg-white">
      <div class="container w-11/12 mx-auto">

        <h2 class="text-black text-center text-2xl font-semibold mb-8">
          আমাদের চলমান প্রজেক্ট
        </h2>

        <div class="donations flex flex-wrap justify-center gap-7">
          <ProjectCard v-for="card in cards" :key="card" />
        </div>

        <div class="pt-10">
          <Link
            class="bg-green-700 cursor-pointer hover:bg-green-700 text-white py-2 px-8 md:px-10 rounded-lg transition-colors duration-300 block w-fit text-center mx-auto group"
            href="#"
          >
            আরো দেখুন &nbsp;
            <i class="fa-solid fa-arrow-right-long group-hover:pl-4 transition-all ease-in-out duration-200"></i>
          </Link>
        </div>

      </div>
    </section>

    <!----- Recent News Section ---->
    <section class="py-10">
      <div class="container w-11/12 mx-auto">

        <h2 class="text-black text-center text-2xl font-semibold mb-8">
          সর্বশেষ খবর
        </h2>

        <div class="recent-news w-full">
          <Carousel v-bind="carouselConfig">
            <Slide v-for="item in 10" :key="item">
              <div class="carousel__item">
                <NewsCard />
              </div>
            </Slide>

            <template #addons>
              <Navigation />
            </template>

          </Carousel>
        </div>

        <div class="pt-10">
          <Link
            class="bg-green-700 cursor-pointer hover:bg-green-700 text-white py-2 px-8 md:px-10 rounded-lg transition-colors duration-300 block w-fit text-center mx-auto group"
            href="#"
          >
            আরো দেখুন &nbsp;
            <i class="fa-solid fa-arrow-right-long group-hover:pl-4 transition-all ease-in-out duration-200"></i>
          </Link>
        </div>

      </div>
    </section>

    <!----- Our Works Section ---->
    <section class="py-10 bg-white">
      <div class="container w-11/12 mx-auto">

        <h2 class="text-black text-center text-2xl font-semibold mb-8">
          আমাদের কার্যক্রম
        </h2>

        <div class="donations flex flex-wrap justify-center gap-7">
          <WorkCard v-for="work in 5" :key="work" />
        </div>

        <div class="pt-10">
          <Link
            class="bg-green-700 cursor-pointer hover:bg-green-700 text-white py-2 px-8 md:px-10 rounded-lg transition-colors duration-300 block w-fit text-center mx-auto group"
            href="#"
          >
            আরো দেখুন &nbsp;
            <i class="fa-solid fa-arrow-right-long group-hover:pl-4 transition-all ease-in-out duration-200"></i>
          </Link>
        </div>

      </div>
    </section>

  </div>
</template>

<script setup>
import "vue3-carousel/carousel.css"
import { Carousel, Slide, Navigation } from "vue3-carousel"

import FluxSlider from "@/components/FluxSlider.vue"
import About from "@/components/About.vue"
import DonationCard from "@/components/DonationCard.vue"
import ProjectCard from "@/components/ProjectCard.vue"
import NewsCard from "@/components/NewsCard.vue"
import WorkCard from "@/components/WorkCard.vue"

import { Link } from "@inertiajs/vue3"
import Layout from "@/layouts/Layout.vue"

defineOptions({
  name: "Home",
  layout: Layout
})

const cards = Array.from({ length: 6 }, (_, i) => i + 1)

const carouselConfig = {
  itemsToShow: 1,
  wrapAround: true,
  autoplay: 3000,
  pauseAutoplayOnHover: true,
  mouseWheel: true,
  gap: 35,
  snapAlign: "center",
  breakpoints: {
    1200: { itemsToShow: 3 },
    900: { itemsToShow: 2 },
    700: { itemsToShow: 2 },
    400: { itemsToShow: 1 }
  }
}
</script>

<style scoped>
.carousel__item {
  padding: 0 10px;
}
</style>
