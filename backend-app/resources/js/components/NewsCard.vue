<template>
  <Link
    href="#"
    class="card w-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 rounded-xl overflow-hidden flex flex-col p-4 group"
  >

    <div
      class="card-image overflow-hidden rounded-lg border border-gray-300 group-hover:border-green-700"
    >
      <img
        class="w-full object-cover"
        :src="image"
        alt="নিউজ ইমেজ"
      />
    </div>

    <div class="card-content text-left px-1 flex-grow flex flex-col">

      <span class="py-2 font-semibold text-sm">
        ৬/১০/২০২৪, ৩:১৮:২৮ PM
      </span>

      <h2 class="text-black text-lg font-semibold">
        বাণিজ্য–সুবিধা বাড়ানোর আশ্বাস দিয়ে ইউএসটিআরকে চিঠি দিলেন বাণিজ্য উপদেষ্টা।
      </h2>

    </div>

  </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import image from "@/assets/images/news.jpg"
</script>
