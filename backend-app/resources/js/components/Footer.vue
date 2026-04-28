<template>
  <footer class="bg-white border-t border-gray-400">

    <div class="container w-11/12 mx-auto py-6 text-md">

      <!-- Main Text -->
      <p class="text-center">
        স্বত্ব &copy; {{ year }}

        <Link href="/" class="text-green-700">
          হিলফুল ফুজুল ফাউন্ডেশন
        </Link>

        - সর্ব স্বত্ব সংরক্ষিত | কারিগরি সহায়তায় -

        <a
          href="https://temdevs.com/"
          class="text-green-700 underline font-semibold"
          target="_blank"
        >
          TemDevs
        </a>.
      </p>

      <!-- Links -->
      <p class="flex gap-3 items-center justify-center mt-3 text-center">

        <Link href="#" class="text-green-700">
          পরিষেবার শর্তাবলী
        </Link>

        |

        <Link href="#" class="text-green-700">
          গোপনীয়তা নীতি
        </Link>

      </p>

    </div>

    <!-- Scroll to Top -->
    <button
      v-show="scrollButton"
      @click="scrollToTop"
      class="h-[50px] w-[50px] bg-green-600 text-white rounded-full flex items-center justify-center fixed bottom-5 right-5"
    >
      ↑
    </button>

  </footer>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Link } from '@inertiajs/vue3'

// current year
const year = new Date().getFullYear()

// scroll button state
const scrollButton = ref(false)

// scroll handler
const handleScroll = () => {
  scrollButton.value = window.scrollY > 100
}

// lifecycle
onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})

// scroll to top
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}
</script>
