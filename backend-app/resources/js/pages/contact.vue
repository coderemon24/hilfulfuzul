<template>
  <div class="py-8">
      <div class="container w-11/12 mx-auto">
          <!----- Breadcrumb ------->
          <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
            <NuxtLink class="text-green-700 hover:underline" to="/">হোম</NuxtLink>
            <i class="fa-solid fa-chevron-right text-gray-500"></i>
            <span class="text-gray-600">যোগাযোগ</span>
          </div>
          <!---page title-->
          <div class="content bg-white p-3 rounded-lg shadow">
            <h1 class="text-2xl font-bold text-gray-800 text-center">যোগাযোগ</h1>
          </div>
          <!----- page contents ----->
          <div class="
          md:flex
          gap-5
          ">
            
            <div class="
            my-6
            bg-white
            p-6
            rounded-lg
            w-full
            md:w-1/2
            shadow-md
            ">
               <form action="#" class="
               flex
               flex-col
               gap-5
               ">
                  <div class="
                  ">
                     <label for="name" class="">
                        আপনার নাম <span class="text-red-600">*</span>
                     </label>
                     <input type="text" class="
                     w-full 
                     border
                      border-green-700 p-2 
                      rounded-md 
                      focus:outline-green-700"
                      placeholder="মোঃ ইমন আহমেদ"
                      >
                  </div>
                  
                  <div class="
                  ">
                     <label for="name" class="">
                        আপনার মোবাইল <span class="text-red-600">*</span>
                     </label>
                     <input type="number" class="
                     w-full 
                     border
                      border-green-700 p-2 
                      rounded-md 
                      focus:outline-green-700
                      appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none 
              [&::-webkit-inner-spin-button]:m-0 [&::-webkit-outer-spin-button]:m-0
                      "
                      placeholder="+880 18xx-xxxxxx"
                      >
                  </div>
                  
                  <div class="
                  ">
                     <label for="name" class="">
                        আপনার ই-মেইল <span class="text-red-600"></span>
                     </label>
                     <input type="text" class="
                     w-full 
                     border
                      border-green-700 p-2 
                      rounded-md 
                      focus:outline-green-700"
                      placeholder="ahmedemon.dev24@gmail.com"
                      >
                  </div>
                  
                  <div class="
                  ">
                     <label for="name" class="">
                        বিষয় <span class="text-red-600">*</span>
                     </label>
                     <input type="text" class="
                     w-full 
                     border
                      border-green-700 p-2 
                      rounded-md 
                      focus:outline-green-700"
                      placeholder="বিষয় নির্বাচন করুন"
                      >
                  </div>
                  
                  <div class="
                  ">
                     <label for="name" class="">
                        বার্তা <span class="text-red-600">*</span>
                     </label>
                     <textarea class="
                     w-full 
                     border
                      border-green-700 p-2 
                      rounded-md 
                      focus:outline-green-700"
                      placeholder="আপনার বার্তা লিখুন"
                      ></textarea>
                  </div>
                  
                  
                  <div class="
                  ">
                     <button class="
                     bg-green-700
                     text-white
                     w-full
                     p-2
                     rounded-md
                     hover:bg-green-600
                     hover:text-white
                     cursor-pointer
                     transition-all
                     ease-in-out
                     duration-300
                     ">প্রেরণ করুন</button>
                  </div>
                  
               </form>
            </div>
            
            <div class="
            py-2
            w-full
            md:w-1/2
            ">
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.2718876048248!2d89.56152357508219!3d24.091932275579566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe77742671ee09%3A0x4ed33605250c246a!2sSonatala%20High%20School!5e0!3m2!1sen!2sbd!4v1744865798538!5m2!1sen!2sbd" width="100%" style="border:0;"  class="
                h-[400px]
                md:h-[500px]
                md:mt-4
                rounded-lg
                " loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
      </div>
  </div>
</template>

<script lang="ts" setup>

</script>

<style>

</style>