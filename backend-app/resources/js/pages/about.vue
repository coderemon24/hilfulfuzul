<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <RouterLink class="text-green-700 hover:underline" to="/">হোম</RouterLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">আমাদের সম্পর্কে</span>
      </div>

      <!-- Page Title -->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">
          আমাদের সম্পর্কে
        </h1>
      </div>

      <!-- Page Content -->
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

        <!-- Content -->
        <div class="border-l border-gray-300 pl-5 md:w-4/5 w-2/3 pb-8">
          <div
            v-for="tab in tabs"
            :key="tab.id"
            class="shadow-md bg-white p-6 rounded-lg mb-5"
            v-show="activeTab === tab.id"
          >
            <h2 class="text-md text-gray-800 text-left font-semibold mb-3">
              {{ tab.title }}
            </h2>
            <p class="text-sm text-gray-600">
              {{ tab.content }}
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const tabs = [
  {
    id: 'introduction',
    title: 'পরিচিতি',
    content:
      'হিলফুল ফুজুল ফাউন্ডেশন একটি অরাজনৈতিক, অলাভজনক ও সেবামূলক প্রতিষ্ঠান...'
  },
  {
    id: 'policy',
    title: 'নীতি ও আদর্শ',
    content: 'এই অংশে নীতি ও আদর্শ সম্পর্কিত বিষয়বস্তু থাকবে।'
  },
  {
    id: 'goals',
    title: 'লক্ষ ও উদ্দেশ্য',
    content: 'এই অংশে লক্ষ ও উদ্দেশ্য সম্পর্কিত বিষয়বস্তু থাকবে।'
  },
  {
    id: 'activities',
    title: 'কার্যক্রম',
    content: 'এই অংশে কার্যক্রম সম্পর্কিত বিষয়বস্তু থাকবে।'
  },
  {
    id: 'funding',
    title: 'তহবিল ও আয়ের উৎস',
    content: 'এই অংশে তহবিল ও আয়ের উৎস সম্পর্কিত বিষয়বস্তু থাকবে।'
  },
  {
    id: 'expenditure',
    title: 'ব্যয়ের নীতিমালা',
    content: 'এই অংশে ব্যয়ের নীতিমালা সম্পর্কিত বিষয়বস্তু থাকবে।'
  },
  {
    id: 'achievements',
    title: 'অর্জনসমূহ',
    content: 'এই অংশে অর্জনসমূহ সম্পর্কিত বিষয়বস্তু থাকবে।'
  }
]

const activeTab = ref('introduction')

const setActiveTab = (id) => {
  activeTab.value = id
}
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
