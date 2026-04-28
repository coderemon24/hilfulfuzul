<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <RouterLink class="text-green-700 hover:underline" to="/">
          হোম
        </RouterLink>

        <i class="fa-solid fa-chevron-right text-gray-500"></i>

        <span class="text-gray-600">সাম্প্রতিক সংবাদ</span>
      </div>

      <!-- Page Title -->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">
          সাম্প্রতিক সংবাদ
        </h1>
      </div>

      <!-- Page Content -->
      <div class="py-5">
        <div class="flex gap-5 md:flex-wrap flex-col md:flex-row md:justify-center">

          <NewsCard
            v-for="card in 5"
            :key="card"
            class="md:w-[calc(33.333%_-_1.5rem)] w-full"
          />

        </div>
      </div>

    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import NewsCard from "@/components/NewsCard.vue";
</script>

<style></style>
