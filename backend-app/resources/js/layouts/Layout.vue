<template>
  <div class="min-h-screen flex flex-col">

    <!-- Header -->
    <Header />

    <!-- Page Content -->
    <main class="flex-grow">
      <slot />
    </main>

    <!-- Footer -->
    <Footer />

  </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'

import { useHead } from '@vueuse/head'

useHead({
  title: 'হিলফুল ফুজুল ফাউন্ডেশন',
  meta: [
    {
      name: 'description',
      content: 'হিলফুল ফুজুল ফাউন্ডেশন'
    }
  ]
})
</script>
