<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <RouterLink class="text-green-700 hover:underline" to="/">
          হোম
        </RouterLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">গ্যালারী</span>
      </div>

      <!-- Page Title -->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">
          গ্যালারী
        </h1>
      </div>

      <!-- Content -->
      <div class="mt-5 flex">

        <!-- Tabs -->
        <div class="tabs min-w-1/3 md:min-w-1/5 pb-8">
          <ul class="flex flex-col gap-6 text-md">
            <li
              v-for="tab in tabs"
              :key="tab.id"
              :class="[
                'group cursor-pointer',
                { activeTab: activeTab === tab.id }
              ]"
              @click="setActiveTab(tab.id)"
            >
              <span class="group-hover:text-green-700">
                {{ tab.title }}
              </span>
            </li>
          </ul>
        </div>

        <!-- Gallery -->
        <div class="border-l border-gray-300 pl-5 md:w-4/5 w-2/3 pb-8">

          <div
            v-for="tab in tabs"
            :key="tab.id"
            v-show="activeTab === tab.id"
            class="shadow-md bg-white p-6 rounded-lg mb-5"
          >

            <div class="flex flex-col md:flex-row flex-wrap gap-4 gallery">

              <div
                v-for="(img, i) in tab.content"
                :key="i"
                class="w-full md:w-[calc(33.333%_-_1.5rem)] overflow-hidden"
              >
                <a
                  :href="img"
                  data-fancybox="gallery"
                  :data-caption="`Image ${i + 1}`"
                  class="block"
                >
                  <img
                    :src="img"
                    :alt="`Gallery image ${i + 1}`"
                    class="w-full object-cover rounded transition-transform duration-300 hover:scale-105"
                  />
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
import { ref, onMounted, nextTick } from 'vue'
import { Fancybox } from '@fancyapps/ui'
import '@fancyapps/ui/dist/fancybox/fancybox.css'

import image1 from '@/assets/images/gallery/flower.jpeg'
import image2 from '@/assets/images/gallery/flower-1.jpg'
import image3 from '@/assets/images/gallery/flower-2.jpg'
import image4 from '@/assets/images/gallery/flower-3.jpg'

const tabs = [
  {
    id: 'intro',
    title: 'সাদাকাহ জারিয়াহ',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'orphan',
    title: 'এতিমদের লালন-পালন',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'winter',
    title: 'শীতবস্ত্র বিতরণ',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'tree',
    title: 'বৃক্ষরোপণ',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'dawah',
    title: 'ইসলাম প্রচার',
    content: [image1, image2, image3, image4]
  },
  {
    id: 'books',
    title: 'বই বিতরণ',
    content: [image1, image2, image3, image4]
  }
]

const activeTab = ref('intro')

const setActiveTab = async (id) => {
  activeTab.value = id

  await nextTick()

  Fancybox.destroy()

  Fancybox.bind('[data-fancybox="gallery"]', {
    animated: true,
    wheel: false,
    transitionEffect: 'slide',
    Thumbs: { type: 'modern' },
    Toolbar: {
      display: {
        left: [],
        middle: [],
        right: ['close']
      }
    }
  })
}

onMounted(() => {
  Fancybox.bind('[data-fancybox="gallery"]', {
    animated: true,
    wheel: false,
    transitionEffect: 'slide'
  })
})
</script>

<style scoped>
.activeTab span {
  color: #166534;
  font-weight: bold;
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
