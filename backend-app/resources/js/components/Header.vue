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
            <div class="
            flex
            items-center
            justify-between
            ">
                <div class="
                flex
                items-center
                ">
                    <div class="icon 
                    md:hidden
                    ">
                        <button type="button" @click="toggleMenu" :aria-expanded="isOpen">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-8">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75H12a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <NuxtLink to="/" class="logo
                        w-[70px]
                        md:w-[10rem]
                    ">
                        <img class="w-full" src="@/assets/images/logo/logo-main.png" alt="">
                </NuxtLink>
                </div>

                <div class="flex-1 mx-4 
                
                md:flex
                hidden
                py-3
                ">
                    <div class="recent-news w-full">
                        <Carousel v-bind="carouselConfig" :wrap-around="true">
                            <Slide v-for="(item, index) in hadiths" :key="index">
                                <div class="carousel__item">
                                    <HadithCard :text="item.text" :reference="item.reference" />
                                </div>
                            </Slide>
                            <!-- <template #addons>
                                <Navigation />
                            </template> -->
                        </Carousel>
                    </div>
                </div>

                <div>
                    <div class="
                    flex
                    items-center
                    gap-4
                    justify-end
                    ">
                        <ul class="
                        flex
                        gap-3
                        mb-4
                        ">
                            <li><a class="
                                bg-blue-800
                                text-white
                                px-2
                                py-0.5
                                pt-2
                                rounded
                                " href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="
                                bg-red-500
                                text-white
                                px-1.5
                                py-0.5
                                pt-1.5
                                rounded
                                " href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="
                                bg-green-600
                                text-white
                                px-1.5
                                py-0.5
                                pt-1.5
                                rounded
                                " href="#"><i class="fa-solid fa-envelope"></i></a></li>
                            <li><a class="
                                bg-gray-700
                                text-white
                                py-0.5
                                pt-1.5
                                px-1.5
                                rounded
                                " href="#"><i class="fa-solid fa-phone"></i></a></li>
                        </ul>
                        <div class="lang">
                            <select name="lang" id="lang">
                                <option value="bangla">বাংলা</option>
                                <option value="english">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="
                    mt-3
                    ">
                        <ul class="
                         flex
                        gap-3
                        text-sm
                        md:text-md
                        ">
                            <li>
                                <NuxtLink class="
                                bg-green-700
                                px-3
                                text-center
                                py-2
                                md:py-3
                                md:px-6
                                text-white
                                rounded-md
                                " to="#">আমার অ্যাকাউন্ট</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink class="
                                bg-green-700
                                px-3
                                text-center
                                py-2
                                md:py-3
                                md:px-6
                                text-white
                                rounded-md
                                " to="#">ডোনেট করুন</NuxtLink>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---- Header Menu -->
    <div class="
    bg-white
    md:bg-green-700
    md:border-b-0
    ">
        <div class="header container w-11/12 mx-auto">
            <nav class="
            block
            w-full
            md:flex
            md:justify-between
            md:items-center
            ">

                <div class="
                bg-black
                w-full
                h-[100%]
                fixed
                z-50
                right-0
                top-0
                bottom-0
                opacity-50
                md:hidden
                " @click="closeMenu" v-show="isOpen"></div>
                <div id="menu" class="
            bg-white
            text-green-700
            md:text-white
            text-md
            top-0
            fixed
            z-50
            w-full
            flex
            flex-col
            gap-2
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
            " :class="isOpen ? 'max-w-[60vw] left-0' : 'max-w-0 -left-60'">

                    <div class="
                md:hidden
                text-center
                shadow-md
                p-3
                ">
                        <h2 class="
                   font-bold
                   text-black
                   mb-1
                   ">হিলফুল ফুজুল ফাউন্ডেশন</h2>
                        <p class="
                   text-[10px]
                   ">ইসলামের আদর্শে, সমাজের কল্যাণে</p>
                    </div>

                    <ul class="
            py-2
             px-6
             flex
             flex-col
             gap-1
             md:flex-row
             md:gap-1
             md:py-1
             
             text-lg
            ">
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/" @click="closeMenu">
                                হোম
                            </NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/about')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/about"  @click="closeMenu">আমাদের
                                সম্পর্কে </NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/our-works')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/our-works"  @click="closeMenu">
                                আমাদের কার্যক্রম </NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/volunteer-registration')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/volunteer-registration"

                                @click="closeMenu">স্বেচ্ছাসেবী নিবন্ধন</NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/gallery')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/gallery" @click="closeMenu">
                                গ্যালারি</NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/recent-news')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/recent-news" @click="closeMenu"
                                >সাম্প্রতিক সংবাদ</NuxtLink>
                        </li>
                        <li class="
                    relative
                    ">
                            <NuxtLink :class="[
                                navLinkBaseClasses,
                                isActive('/contact')
                                    ? 'activeRoute'
                                    : navLinkHoverClasses
                            ]" to="/contact" @click="closeMenu">
                                যোগাযোগ</NuxtLink>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</template>

<script lang="ts" setup>
import "vue3-carousel/carousel.css";
import { computed, ref } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { Carousel, Slide } from "vue3-carousel";

// Import HadithCard component
import HadithCard from '@/components/HadithCard.vue';

const page = usePage();

const isOpen = ref(false);
const navLinkBaseClasses = 'transition-all ease-in-out duration-300 py-3 md:px-6 pl-3 w-full block';
const navLinkHoverClasses = 'hover:bg-green-700 hover:text-white hover:rounded-md md:hover:bg-green-100/20 md:hover:text-white';
const currentPath = computed(() => {
  const url = typeof page.url === 'string' ? page.url : page.url.value;
  return url.split('?')[0] || '/';
});

// Sample hadith data - replace with your actual data source
const hadiths = [
  {
    text: "’আলক্বামাহ ইবনু ওয়াক্কাস আল-লায়সী (রহ.) হতে বর্ণিত। আমি ’উমার ইবনুল খাত্তাব (রাঃ)-কে মিম্বারের উপর দাঁড়িয়ে বলতে শুনেছিঃ আমি আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম-কে বলতে শুনেছিঃ কাজ (এর প্রাপ্য হবে) নিয়্যাত অনুযায়ী। আর মানুষ তার নিয়্যাত অনুযায়ী প্রতিফল পাবে। তাই যার হিজরত হবে ইহকাল লাভের অথবা কোন মহিলাকে বিবাহ করার উদ্দেশে- তবে তার হিজরত সে উদ্দেশেই হবে, যে জন্যে, সে হিজরত করেছে।",
    reference: "ইসলামিক ফাউন্ডেশন"
  },
  {
    text: "A Muslim is the one from whose tongue and hand the Muslims are safe.",
    reference: "Sahih al-Bukhari"
  },
  {
    text: "The strong is not the one who overcomes the people by his strength, but the strong is the one who controls himself while in anger.",
    reference: "Sahih al-Bukhari"
  },
  // Add more hadiths as needed
];

const toggleMenu = () => {
    isOpen.value = !isOpen.value;
};

const closeMenu = () => {
    isOpen.value = false;
};

const isActive = (path: string) => currentPath.value === path;

const carouselConfig = {
  itemsToShow: 1,
  autoplay: 3000,
  pauseAutoplayOnHover: true,
  snapAlign: 'center',
  wrapAround: true,
  transition: 3000,
  easing: 'linear',
};
</script>

<style>
.carousel__item {
  padding: 0 10px;
  min-height: 120px; /* Adjust based on your content */
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Adjust carousel navigation buttons if needed */
.carousel__prev,
.carousel__next {
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: none;
}

.carousel__prev:hover,
.carousel__next:hover {
  background-color: rgba(0, 0, 0, 0.7);
}
</style>
