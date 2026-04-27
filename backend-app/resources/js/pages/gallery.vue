<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">
      <!----- Breadcrumb ------->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <NuxtLink class="text-green-700 hover:underline" to="/">হোম</NuxtLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">গ্যালারী</span>
      </div>
      <!---page title-->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">গ্যালারী</h1>
      </div>
      <!----- page contents ----->
      <div class="mt-5 flex">
        <!----- tabs ----->
        <div class="tabs min-w-1/3 md:min-w-1/5 pb-8">
          <ul class="flex flex-col gap-6 text-md">
            <li 
              v-for="(tab, index) in tabs" 
              :key="index" 
              :class="[
                'group cursor-pointer',
                { 'activeTab': activeTab === tab.id }
              ]" 
              @click="setActiveTab(tab.id)"
            >
              <a href="#" class="group-hover:text-green-700 group-hover:cursor-pointer">
                {{ tab.title }}
              </a>
            </li>
          </ul>
        </div>
        <!----- contents ----->
        <div class="border-l border-gray-300 pl-5 md:w-4/5 w-2/3 pb-8">
          <!----- Dynamic content based on active tab -->
          <div 
            v-for="(tab, index) in tabs" 
            :key="index" 
            class="shadow-md bg-white p-6 rounded-lg mb-5"
            :class="{ 'hidden': activeTab !== tab.id }"
          >
            <div class="flex flex-col md:flex-row flex-wrap gap-4 gallery">
              <div 
                v-for="(item, id) in tab.content" 
                :key="id"
                class="w-full md:w-[calc(33.333%_-_1.5rem)] cursor-pointer overflow-hidden hover:bg-blend-overlay"
              >
                <a 
                  :href="item" 
                  class="block hover:scale-105 transition-all ease-in-out duration-300"
                  data-fancybox="gallery"
                  :data-caption="`Image ${id + 1}`"
                >
                  <img 
                    :src="item" 
                    :alt="`Gallery image ${id + 1}`"
                    loading="lazy"
                    class="w-full h-auto object-cover transition-transform duration-300 hover:scale-105"
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import { ref, onMounted, nextTick } from 'vue';
import _ from 'lodash';
import image1 from '../assets/images/gallery/flower.jpeg';
import image2 from '../assets/images/gallery/flower-1.jpg';
import image3 from '../assets/images/gallery/flower-2.jpg';
import image4 from '../assets/images/gallery/flower-3.jpg';

const tabs = [
  {
    id: 'introduction',
    title: 'সাদাকাহ জারিয়াহ',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'policy',
    title: 'এতিমদের লালন-পালন ও শিক্ষাদান',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'goals',
    title: 'শীতবস্ত্র বিতরণ',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'activities',
    title: 'বৃক্ষরোপণ কর্মসূচি',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'funding',
    title: 'তহবিল ও আয়ের এর উৎস',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'expenditure',
    title: 'ইসলাম প্রচার',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'achievements',
    title: 'বই-পুস্তক লিফলেট বিতরণ',
    content: [image1, image2, image3, image4]
  }
];

const activeTab = ref('introduction');

const setActiveTab = _.debounce((tabId) => {
  activeTab.value = tabId;
  nextTick(() => {
    Fancybox.destroy();
    Fancybox.bind('[data-fancybox="gallery"]', {
      animated: true,
      wheel: false,
      transitionEffect: "slide",
      Thumbs: {
        type: "modern",
      },
      Toolbar: {
        display: {
          left: [],
          middle: [],
          right: ["close"],
        },
      },
    });
  });
}, 200);

onMounted(() => {
  Fancybox.bind('[data-fancybox="gallery"]', {
    animated: true,
    wheel: false,
    transitionEffect: "slide",
  });
});
</script>

<style scoped>
.activeTab a {
  color: #166534;
  font-weight: bold;
}

.gallery img {
  will-change: transform;
  transform: translateZ(0);
  transition: transform 0.3s ease-out;
  max-width: 100%;
  height: auto;
  border-radius: 4px;
}

.gallery a:hover img {
  transform: scale(1.05);
}

.tabs li {
  padding: 8px 12px;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.tabs li:hover {
  background-color: #f0fdf4;
}

.tabs li.activeTab {
  background-color: #dcfce7;
  border-left: 3px solid #166534;
}
</style>