<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <Link class="text-green-700 hover:underline" href="/">
          হোম
        </Link>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">স্বেচ্ছাসেবী নিবন্ধন</span>
      </div>

      <!-- Page Title -->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">
          স্বেচ্ছাসেবী নিবন্ধন
        </h1>
      </div>

      <!-- Form Section -->
      <div class="mt-5 flex shadow-md rounded-lg bg-white p-10 flex-col mb-10">

        <form>

          <h1 class="text-xl font-bold text-gray-800 text-center mb-5">
            ব্যক্তিগত তথ্য
          </h1>

          <div class="flex flex-col gap-4 md:flex-row md:gap-10">

            <!-- LEFT SIDE -->
            <div class="flex flex-col gap-6 md:w-1/2">

              <div class="w-full flex flex-col gap-2">
                <label class="flex items-center gap-1 text-md">
                  নাম <span class="text-red-600 text-xl">*</span>
                </label>
                <input type="text" class="input" placeholder="মোঃ ইমন আহমেদ">
              </div>

              <div class="w-full flex flex-row-reverse gap-2 justify-end items-center">
                <label class="text-md">প্রবাসী</label>
                <input type="checkbox" class="checkbox">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">ফোন <span class="text-red-600">*</span></label>
                <input type="number" class="input" placeholder="+880 18xx-xxxxxx">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">ইমেইল</label>
                <input type="email" class="input" placeholder="ahmedemon.dev24@gmail.com">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">ফেসবুক আইডি লিংক</label>
                <input type="url" class="input" placeholder="https://facebook.com/coderemon24">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">এনআইডি নম্বর</label>
                <input placeholder="এনআইডি নম্বর লিখুন" type="number" class="input">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">
                  শিক্ষাগত যোগ্যতা <span class="text-red-600">*</span>
                </label>
                <input placeholder="শিক্ষাগত যোগ্যতা নির্বাচন করুন" type="text" class="input">
              </div>

              <div class="w-full flex flex-col gap-2">
                <label class="text-md">
                  পেশা <span class="text-red-600">*</span>
                </label>
                <input placeholder="পেশা নির্বাচন করুন" type="text" class="input">
              </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="md:w-1/2">

              <div class="flex flex-col gap-2">
                <label class="text-md">
                  যে ক্ষেত্রে স্বেচ্ছাশ্রম দিতে ইচ্ছুক
                  <span class="text-red-600">*</span>
                </label>
                <textarea placeholder="যে ক্ষেত্রে স্বেচ্ছাশ্রম দিতে ইচ্ছুক" class="input"></textarea>
              </div>

              <div class="flex flex-col gap-2 mt-4">
                <label class="text-md">বিশেষ দক্ষতা</label>
                <textarea placeholder="বিশেষ দক্ষতা লিখুন" class="input"></textarea>
              </div>

              <span class="mt-8 block">স্থায়ী ঠিকানা</span>

              <div class="flex flex-col gap-2 mt-2">
                <label class="text-md">জেলা/উপজেলা <span class="text-red-600">*</span></label>

                <input placeholder="জেলা/উপজেলা" type="text" class="input">
              </div>

              <div class="flex flex-col gap-2 mt-2">
                <label class="text-md">ঠিকানা <span class="text-red-600">*</span></label>
                <textarea placeholder="ঠিকানা" class="input"></textarea>
              </div>

              <span class="mt-8 block">বর্তমান ঠিকানা</span>

              <div class="flex flex-col gap-2 mt-2">
                <label class="text-md">জেলা/উপজেলা <span class="text-red-600">*</span></label>
                <!-- every placeholder in bangla -->
                <input placeholder="জেলা/উপজেলা" type="text" class="input">
              </div>

              <div class="flex flex-col gap-2 mt-2">
                <label class="text-md">ঠিকানা <span class="text-red-600">*</span></label>
                <textarea placeholder="ঠিকানা" class="input"></textarea>
              </div>

            </div>

          </div>

          <div class="w-full flex">
            <button
              type="submit"
              class="w-full bg-green-700 cursor-pointer p-2 rounded-md mt-5 text-white md:w-[25%] md:mx-auto"
            >
              আপনার আবেদনটি সংরক্ষণ করুন
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
.input {
  width: 100%;
  border: 1px solid #15803d;
  padding: 8px;
  border-radius: 6px;
  outline: none;
}

.checkbox {
  width: 20px;
  height: 20px;
}
</style>
