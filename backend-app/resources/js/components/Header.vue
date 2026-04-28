<template>
    <!---- Topbar -->
    <div class="
    bg-white
    py-6
    md:py-0
    shadow-md
    border-b
    border-gray-400
    md:border-b-0
    md:shadow-none
    ">
        <div class="container w-11/12 mx-auto">
            <div class="flex items-center justify-between">

                <div class="flex items-center">

                    <div class="icon md:hidden">
                        <a href="javascript:void(0)" @click="toggleMenu">
                            ☰
                        </a>
                    </div>

                    <!-- FIX: NuxtLink → Inertia Link -->
                    <Link href="/" class="logo w-[70px] md:w-[10rem]">
                        <img class="w-full" src="@/assets/images/logo/logo-main.png" alt="">
                    </Link>

                </div>

                <!-- Carousel (UNCHANGED) -->
                <div class="flex-1 mx-4 md:flex hidden py-3">
                    <div class="recent-news w-full">
                        <Carousel v-bind="carouselConfig" :wrap-around="true">
                            <Slide v-for="(item, index) in hadiths" :key="index">
                                <div class="carousel__item">
                                    <HadithCard :text="item.text" :reference="item.reference" />
                                </div>
                            </Slide>
                        </Carousel>
                    </div>
                </div>

                <!-- Right section (UNCHANGED UI) -->
                <div>
                    <div class="flex items-center gap-4 justify-end">

                        <ul class="flex gap-3 mb-4">
                            <li><a class="bg-blue-800 text-white px-3 py-2  rounded" href="#">
                                <i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="bg-red-500 text-white px-2 py-2 rounded" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="bg-green-600 text-white px-2 py-2 rounded" href="#"><i class="fa-solid fa-envelope"></i></a></li>
                            <li><a class="bg-gray-700 text-white py-2  px-2 rounded" href="#"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>

                    </div>

                    <div class="mt-3">
                        <ul class="flex gap-3 text-sm md:text-md">

                            <li>
                                <Link href="#" class="bg-green-700 px-3 py-2 md:py-3 md:px-6 text-white rounded-md">
                                    আমার অ্যাকাউন্ট
                                </Link>
                            </li>

                            <li>
                                <Link href="#" class="bg-green-700 px-3 py-2 md:py-3 md:px-6 text-white rounded-md">
                                    ডোনেট করুন
                                </Link>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!---- Header Menu -->
    <div class="bg-white md:bg-green-700 md:border-b-0">

        <div class="header container w-11/12 mx-auto">

            <nav class="block w-full md:flex md:justify-between md:items-center">

                <!-- Overlay -->
                <div
                    class="bg-black w-full h-full fixed z-50 right-0 top-0 bottom-0 opacity-50 md:hidden"
                    v-show="isOpen"
                    @click="closeMenu"
                ></div>

                <!-- MENU -->
                <div
                    id="menu"
                    class="
                    bg-white
                    text-green-700
                    md:text-white
                    text-md
                    top-0
                    fixed
                    z-50
                    -left-60
                    w-full
                    flex
                    flex-col
                    gap-2
                    max-w-0
                    h-[100%]
                    transition-all
                    duration-500
                    overflow-hidden
                    ease-in-out
                    md:static
                    md:flex-row
                    md:max-w-full
                    md:h-auto
                    md:bg-transparent
                    md:justify-center
                    md:gap-4
                    "
                >

                    <div class="md:hidden text-center shadow-md p-3">
                        <h2 class="font-bold text-black mb-1">
                            হিলফুল ফুজুল ফাউন্ডেশন
                        </h2>
                        <p class="text-[10px]">
                            ইসলামের আদর্শে, সমাজের কল্যাণে
                        </p>
                    </div>

                    <ul class="py-2 px-6 flex flex-col md:flex-row gap-1 text-lg">

                        <li v-for="item in menu" :key="item.path">

                            <Link
                                :href="item.path"
                                class="transition-all ease-in-out duration-300 py-3 md:px-6 pl-3 w-full block"
                                :class="isActive(item.path)
                                    ? 'activeRoute'
                                    : 'hover:bg-green-700 hover:text-white md:hover:bg-green-100/20 md:hover:text-white'"
                                @click="closeMenu"
                            >
                                {{ item.label }}
                            </Link>

                        </li>

                    </ul>

                </div>

            </nav>
        </div>
    </div>
</template>

<script setup>
import "vue3-carousel/carousel.css"
import { Carousel, Slide } from "vue3-carousel"
import HadithCard from '@/components/HadithCard.vue'

import { ref } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const isOpen = ref(false)
const page = usePage()

// menu (UNCHANGED DATA STRUCTURE)
const menu = [
    { path: '/', label: 'হোম' },
    { path: '/about', label: 'আমাদের সম্পর্কে' },
    { path: '/our-works', label: 'আমাদের কার্যক্রম' },
    { path: '/volunteer-registration', label: 'স্বেচ্ছাসেবী নিবন্ধন' },
    { path: '/gallery', label: 'গ্যালারি' },
    { path: '/recent-news', label: 'সাম্প্রতিক সংবাদ' },
    { path: '/contact', label: 'যোগাযোগ' },
]

// hadith (UNCHANGED)
const hadiths = [
    {
        text: "আলক্বামাহ ইবনু ওয়াক্কাস আল-লায়সী (রহ.) হতে বর্ণিত। আমি ’উমার ইবনুল খাত্তাব (রাঃ)-কে মিম্বারের উপর দাঁড়িয়ে বলতে শুনেছিঃ আমি আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম-কে বলতে শুনেছিঃ কাজ (এর প্রাপ্য হবে) নিয়্যাত অনুযায়ী। আর মানুষ তার নিয়্যাত অনুযায়ী প্রতিফল পাবে। তাই যার হিজরত হবে ইহকাল লাভের অথবা কোন মহিলাকে বিবাহ করার উদ্দেশে- তবে তার হিজরত সে উদ্দেশেই হবে, যে জন্যে, সে হিজরত করেছে।",
        reference: "ইসলামিক ফাউন্ডেশন"
    },
    {
        text: "The strong is not the one who overcomes the people by his strength, but the strong is the one who controls himself while in anger.",
        reference: "Sahih Al-Bukhari"
    },
    {
        text: "The best among you are those who have the best manners and character.",
        reference: "Sahih Al-Bukhari"
    }
]

// toggle menu (UNCHANGED LOGIC)
const toggleMenu = () => {
    const menuEl = document.querySelector('#menu')
    if (!menuEl) return

    isOpen.value = !isOpen.value

    menuEl.classList.toggle('max-w-0')
    menuEl.classList.toggle('max-w-[60vw]')
    menuEl.classList.toggle('-left-60')
    menuEl.classList.toggle('left-0')
}

const closeMenu = () => {
    const menuEl = document.querySelector('#menu')
    if (!menuEl) return

    isOpen.value = false

    menuEl.classList.add('max-w-0')
    menuEl.classList.remove('max-w-[60vw]')
    menuEl.classList.add('-left-60')
    menuEl.classList.remove('left-0')
}

// FIX: Nuxt $route → Inertia
const isActive = (path) => {
    return page.url === path
}

// carousel config (UNCHANGED)
const carouselConfig = {
    itemsToShow: 1,
    autoplay: 3000,
    pauseAutoplayOnHover: true,
    wrapAround: true,
    transition: 3000,
    easing: 'linear',
}
</script>
