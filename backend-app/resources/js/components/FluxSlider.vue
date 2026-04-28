<template>
  <div>

    <!-- Client-safe render (Inertia/Vue fix) -->
    <div v-if="isMounted">

      <VueFlux
        :options="options"
        :rscs="images"
        :transitions="transitions"
        ref="$vueFlux"
        class="h-[23vh] md:h-[70vh]"
      >

        <template #preloader="preloaderProps">
          <FluxPreloader v-bind="preloaderProps" />
        </template>

        <!--
        <template #caption="captionProps">
          <FluxCaption v-bind="captionProps" />
        </template>

        <template #controls="controlsProps">
          <FluxControls v-bind="controlsProps" />
        </template>
        -->

        <template #pagination="paginationProps">
          <FluxPagination v-bind="paginationProps" />
        </template>

      </VueFlux>

    </div>

  </div>
</template>

<script setup>
import { ref, shallowReactive, onMounted } from "vue"

import img_1 from "../assets/images/slider/1.jpg"
import img_2 from "../assets/images/slider/2.jpg"
import img_3 from "../assets/images/slider/3.jpg"
import img_4 from "../assets/images/slider/4.jpg"

import {
  VueFlux,
  FluxCaption,
  FluxControls,
  FluxPagination,
  FluxPreloader,
  Img,
  Book,
  Zip,
  Blinds3D,
  Blinds2D,
  Waterfall,
  Cube,
  Blocks1,
  Blocks2,
  Wave,
  Fall,
  Explode,
  Camera,
  Warp,
  Slide,
  Swipe,
  Concentric
} from "vue-flux"

import "vue-flux/style.css"

const $vueFlux = ref(null)

const isMounted = ref(false)

onMounted(() => {
  isMounted.value = true
})

const transitions = shallowReactive([
  Book,
  Zip,
  Blinds3D,
  Blinds2D,
  Waterfall,
  Cube,
  Blocks1,
  Blocks2,
  Wave,
  Fall,
  Explode,
  Camera,
  Warp,
  Slide,
  Swipe,
  Concentric
])

const options = shallowReactive({
  autoplay: true,
  delay: 3000
})

const images = shallowReactive([
  new Img(img_1, "First slide"),
  new Img(img_2, "Second slide"),
  new Img(img_3, "Third slide"),
  new Img(img_4, "Fourth slide")
])
</script>
