<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">
      <!----- Breadcrumb ------->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <NuxtLink class="text-green-700 hover:underline" to="/">হোম</NuxtLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">আমাদের সম্পর্কে</span>
      </div>
      <!---page title-->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">আমাদের সম্পর্কে</h1>
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
              <a href="#" class="group-hover:text-green-700
              group-hover:cursor-pointer
              ">{{ tab.title }}</a>
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
            :class="{'hidden': activeTab !== tab.id}"
          >
            <h2 class="text-md text-gray-800 text-left font-semibold mb-3">{{ tab.title }}</h2>
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
import { ref } from 'vue';

const tabs = [
  {
    id: 'introduction',
    title: 'পরিচিতি',
    content: 'হিলফুল ফুজুল ফাউন্ডেশন একটি অরাজনৈতিক, অলাভজনক ও সেবামূলক প্রতিষ্ঠান যা শিক্ষা, দাওয়াহ, সমাজসেবা এবং মানব কল্যাণে নিবেদিতভাবে কাজ করে যাচ্ছে। প্রতিষ্ঠার পর থেকে এই ফাউন্ডেশন মানুষের নৈতিক উন্নয়ন, সামাজিক সচেতনতা এবং আত্মিক পরিশুদ্ধির লক্ষ্যে বিভিন্ন কার্যক্রম পরিচালনা করছে।এই সংগঠনটি কুরআন ও সুন্নাহর আদর্শকে ভিত্তি করে একটি ভারসাম্যপূর্ণ ও ন্যায়ভিত্তিক সমাজ গঠনের প্রয়াস চালিয়ে যাচ্ছে। সমাজের অবহেলিত ও পিছিয়ে পড়া জনগোষ্ঠীর পাশে দাঁড়িয়ে, শিক্ষা, স্বাস্থ্য ও মানবিক সহায়তা প্রদানের মাধ্যমে প্রতিষ্ঠানটি তার দায়িত্ব পালন করে চলেছে। হিলফুল ফুজুল ফাউন্ডেশন বিশ্বাস করে, মানুষকে আলোর পথে ফিরিয়ে আনার অন্যতম উপায় হল বিশুদ্ধ জ্ঞান প্রচার ও নৈতিকতা ভিত্তিক জীবন গঠনের পরিবেশ তৈরি করা। সেই লক্ষ্যেই এই ফাউন্ডেশন নিরলসভাবে কাজ করে যাচ্ছে — একটি কল্যাণময় ও নৈতিক মূল্যবোধসম্পন্ন সমাজ গঠনের প্রত্যয়ে।'
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
    title: 'তহবিল ও আয়ের এর উৎস',
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
];

const activeTab = ref('introduction');

const setActiveTab = (tabId) => {
  activeTab.value = tabId;
};
</script>

<style scoped>
.activeTab a {
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