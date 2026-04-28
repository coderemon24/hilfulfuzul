<template>
  <div
    class="card
      w-full md:w-[calc(33.333%_-_1.5rem)]
      lg:w-[calc(33.333%_-_1.5rem)]
      bg-white
      shadow-md hover:shadow-lg
      transition-shadow duration-300
      rounded-xl overflow-hidden
      flex flex-col
      h-full
      border
      border-gray-300
    "
  >

    <div class="card-image">
      <img
        class="w-full object-cover"
        :src="image"
        alt="প্রজেক্ট ইমেজ"
      />
    </div>

    <div class="card-content text-center p-6 flex-grow flex flex-col">

      <h2 class="text-green-700 text-xl font-bold mb-3">
        কুরআন-শিক্ষা রমজান
      </h2>

      <p class="text-gray-600 text-sm mb-4 flex-grow">
        কুরআন-শিক্ষা রমজান মানে- যে দানের উপকারিতা শুধু এককালীন নয়; বরং চলমান ও দীর্ঘদিন অব্যাহত থাকে।
        যে দানের উপকারিতা একবারই অর্জিত হয় সেগুলোর সওয়াবও একবারই হয়।
        পক্ষান্তরে যে দানের উপকারিতা দীর্ঘদিন অব্যাহত থাকে সেগুলোর সওয়াব তথা বিনিময়ও মহান আল্লাহ দীর্ঘ দিন পর্যন্ত অব্যাহত রাখেন।
      </p>

      <button
        class="bg-green-700 cursor-pointer hover:bg-green-700 text-white py-2 px-4 rounded-lg transition-colors duration-300"
      >
        আরও জানুন
      </button>

    </div>

  </div>
</template>

<script setup>
import image from "@/assets/images/project.jpg"
</script>
