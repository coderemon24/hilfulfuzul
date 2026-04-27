<template>
  <div class="
  bg-white
  border-t
  border-gray-400
  ">
    <div class="container w-11/12 mx-auto">
        <div class="wrapper
        text-md
        py-6
        ">
            <p class="
            text-center
            ">
                স্বত্ব &copy; {{ year }} 
                <NuxtLink class="text-green-700" to="/">হিলফুল ফুজুল ফাউন্ডেশন</NuxtLink> - সর্ব স্বত্ব সংরক্ষিত | কারিগরি সহায়তায় - <a href="https://temdevs.com/" class="
                text-green-700
                underline
                font-semibold
                "
                target="_blank"
                >TemDevs</a>.
            </p>
            <p class="
            flex gap-3
            items-center
            text-center
            justify-center
            mt-3
            ">
                <NuxtLink class="
                text-green-700
                " to="#">পরিষেবার শর্তাবলী </NuxtLink>| 
                <NuxtLink class="
                text-green-700
                " to="#">গোপনীয়তা নীতি</NuxtLink>
            </p>
        </div>
        
        <div class="">
            <a href="#body" class="
            h-[50px]
            w-[50px]
            bg-green-600
            text-white
            rounded-full
            flex
            items-center
            justify-center
            fixed
            bottom-5
            right-5
            " 
            @click="scrollToTop"
            v-show="scrollButton"
            >
                <i class="fa-solid fa-angle-up"></i>
            </a>
        </div>
        
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted, onUnmounted, ref } from 'vue';

const year = new Date().getFullYear();

const scrollButton = ref(false);

const handleScroll = () => {
    scrollButton.value = window.scrollY > 100;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
})

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>

<style>

</style>
