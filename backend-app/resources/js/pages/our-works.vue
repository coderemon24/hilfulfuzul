<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <RouterLink class="text-green-700 hover:underline" to="/">হোম</RouterLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">আমাদের কার্যক্রম</span>
      </div>

      <!-- Page Title -->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">
          আমাদের কার্যক্রম
        </h1>
      </div>

      <!-- Page Content -->
      <div class="mt-5 flex">

        <!-- Tabs -->
        <div class="tabs min-w-1/3 md:min-w-1/5 pb-8">
          <ul class="flex flex-col gap-6 text-md">
            <li
              v-for="(tab, index) in tabs"
              :key="index"
              :class="[
                'group cursor-pointer',
                { activeTab: activeTab === tab.id }
              ]"
              @click="setActiveTab(tab.id)"
            >
              <a href="#" class="group-hover:text-green-700 group-hover:cursor-pointer">
                {{ tab.title }}
              </a>
            </li>
          </ul>
        </div>

        <!-- Content -->
        <div class="border-l border-gray-300 pl-5 md:w-4/5 w-2/3 pb-8">
          <div
            v-for="(tab, index) in tabs"
            :key="index"
            class="shadow-md bg-white p-6 rounded-lg mb-5"
            :class="{ hidden: activeTab !== tab.id }"
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
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const tabs = [
  {
    id: "introduction",
    title: "সাদাকাহ জারিয়াহ",
    content:
      "হিলফুল ফুজুল ফাউন্ডেশন একটি অরাজনৈতিক, অলাভজনক ও সেবামূলক প্রতিষ্ঠান যা শিক্ষা, দাওয়াহ, সমাজসেবা এবং মানব কল্যাণে নিবেদিতভাবে কাজ করে যাচ্ছে। প্রতিষ্ঠার পর থেকে এই ফাউন্ডেশন মানুষের নৈতিক উন্নয়ন, সামাজিক সচেতনতা এবং আত্মিক পরিশুদ্ধির লক্ষ্যে বিভিন্ন কার্যক্রম পরিচালনা করছে। এই সংগঠনটি কুরআন ও সুন্নাহর আদর্শকে ভিত্তি করে একটি ভারসাম্যপূর্ণ ও ন্যায়ভিত্তিক সমাজ গঠনের প্রয়াস চালিয়ে যাচ্ছে।",
  },
  {
    id: "policy",
    title: "এতিমদের লালন-পালন ও শিক্ষাদান",
    content: "এই অংশে এতিমদের লালন-পালন ও শিক্ষাদান সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
  {
    id: "goals",
    title: "শীতবস্ত্র বিতরণ",
    content: "এই অংশে লক্ষ ও উদ্দেশ্য সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
  {
    id: "activities",
    title: "বৃক্ষরোপণ কর্মসূচি",
    content: "এই অংশে বৃক্ষরোপণ কর্মসূচি সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
  {
    id: "funding",
    title: "তহবিল ও আয়ের এর উৎস",
    content: "এই অংশে তহবিল ও আয়ের উৎস সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
  {
    id: "expenditure",
    title: "ইসলাম প্রচার",
    content: "এই অংশে ইসলাম প্রচার সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
  {
    id: "achievements",
    title: "বই-পুস্তক লিফলেট বিতরণ",
    content: "এই অংশে বই-পুস্তক লিফলেট বিতরণ সম্পর্কিত বিষয়বস্তু থাকবে।",
  },
];

const activeTab = ref("introduction");

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
