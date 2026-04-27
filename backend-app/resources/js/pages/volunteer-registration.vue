<template>
  <div class="py-8 pb-0">
    <div class="container w-11/12 mx-auto">
      <!----- Breadcrumb ------->
      <div class="breadcrumb flex items-center gap-2 text-sm mb-6">
        <NuxtLink class="text-green-700 hover:underline" to="/">হোম</NuxtLink>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
        <span class="text-gray-600">স্বেচ্ছাসেবী নিবন্ধন</span>
      </div>
      <!---page title-->
      <div class="content bg-white p-3 rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800 text-center">স্বেচ্ছাসেবী নিবন্ধন</h1>
      </div>
      <!----- page contents ----->
      <div class="mt-5 flex shadow-md
      rounded-lg
      bg-white
      p-10
      flex-col
      mb-10
      ">
        <form action="" class="
        
        ">
          <div>
            <h1 class="text-xl font-bold text-gray-800 text-center
            mb-5
            ">ব্যক্তিগত তথ্য</h1>
          </div>

          <div class="
          flex flex-col
        gap-4
        md:flex-row
        md:gap-10
          ">
            <div class="
          flex
          flex-col
          gap-6
          md:w-1/2
          ">
              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">নাম
                  <span class="
              text-red-600
              text-xl
              ">*</span>
                </label>
                <input type="text" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="মোঃ ইমন আহমেদ">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-row-reverse
          gap-2
          justify-end
          items-center
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">প্রবাসী

                </label>
                <input type="checkbox" class="
          w-[20px]
          h-[20px]
          border
          border-green-700
          rounded-md
          focus:outline-none
          focus:ring-2
          appearance-none
          focus:ring-green-700
          checked:bg-green-700
          relative
          after:content-['']
            after:absolute
            after:hidden
            checked:after:block
            after:border-white
            after:border-r-2
            after:border-b-2
            after:w-[6px]
            after:h-[12px]
            after:rotate-45
            after:left-1/2
            after:top-1/2
            after:-translate-x-1/2
            after:-translate-y-1/2
          " aria-label="মোঃ ইমন আহমেদ" />
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">ফোন
                  <span class="
              text-red-600
              text-xl
              ">*</span>
                </label>
                <input type="number" class="
                  w-full
                  border
                  border-green-700
                  p-2
                  rounded-md
                  focus:outline-green-700
                  [-moz-appearance:_textfield] 
                  [&::-webkit-outer-spin-button]:appearance-none 
                  [&::-webkit-inner-spin-button]:appearance-none 
                " placeholder="+880 18xx-xxxxxx">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">ইমেইল

                </label>
                <input type="email" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="example@gmail.com">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">ফেসবুক আইডি লিংক

                </label>
                <input type="url" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="https://www.facebook.com/coderemon24">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">
                  এনআইডি নম্বর
                </label>
                <input type="number" class="
                  w-full
                  border
                  border-green-700
                  p-2
                  rounded-md
                  focus:outline-green-700
                  [-moz-appearance:_textfield] 
                  [&::-webkit-outer-spin-button]:appearance-none 
                  [&::-webkit-inner-spin-button]:appearance-none 
                " placeholder="9982463266">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">শিক্ষাগত যোগ্যতা
                  <span class="
              text-red-600
              text-xl
              ">*</span>
                </label>
                <input type="text" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="এসএসসি, ডিপ্লোমা, অনার্স, মাস্টার্স, পিএইচডি">
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">পেশা
                  <span class="
              text-red-600
              text-xl
              ">*</span>
                </label>
                <input type="text" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="প্রকৌশলী, ডাক্তার, শিক্ষকতা">
              </div>

              
            </div>

            <div class="
          md:w-1/2
          ">
              <div class="
            flex
            flex-col
            gap-4
            ">
            
            <!----- item ---->
            <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">যে ক্ষেত্রে স্বেচ্ছাশ্রম দিতে ইচ্ছুক
                  <span class="
              text-red-600
              text-xl
              ">*</span>
                </label>
                <textarea class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="প্রকৌশলী, ডাক্তার, শিক্ষকতা"></textarea>
              </div>

              <!----- item ---->
              <div class="
          w-full
          flex flex-col
          gap-2
          ">
                <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">বিশেষ দক্ষতা
                </label>
                <textarea class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="প্রকৌশলী, ডাক্তার, ডেভেলপার"></textarea>
              </div>
            
                <span class="
              mt-8
              md:mt-0
              -mb-2
              ">
                  স্থায়ী ঠিকানা
                </span>

                <!----- item ---->
                <div class="
          w-full
          flex flex-col
          gap-2
          ">
                  <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">জেলা/উপজেলা
                    <span class="
              text-red-600
              text-xl
              ">*</span>
                  </label>
                  <input type="text" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="পাবনা/সাথিয়া">
                </div>

                <!----- item ---->
                <div class="
          w-full
          flex flex-col
          gap-2
          ">
                  <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">ঠিকানা
                    <span class="
              text-red-600
              text-xl
              ">*</span>
                  </label>
                  <textarea class="
                w-[100%]
                border
                border-green-700
                p-2
                rounded-md
                focus:outline-green-700
                " placeholder="সোনাতলা, সাথিয়া, পাবনা"></textarea>
                </div>

              </div>

              <div class="
            flex
            flex-col
            gap-4
            ">
                <span class="
              mt-8
              -mb-2
              ">
                  বর্তমান ঠিকানা
                </span>

                <!----- item ---->
                <div class="
          w-full
          flex flex-col
          gap-2
          ">
                  <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">জেলা/উপজেলা
                    <span class="
              text-red-600
              text-xl
              ">*</span>
                  </label>
                  <input type="text" class="
            w-[100%]
            border
            border-green-700
            p-2
            rounded-md
            focus:outline-green-700
            " placeholder="পাবনা/সাথিয়া">
                </div>


                <!----- item ---->
                <div class="
          w-full
          flex flex-col
          gap-2
          ">
                  <label class="
            flex
            items-center
            gap-1
            justify-start
            text-md
            " for="name">ঠিকানা
                    <span class="
              text-red-600
              text-xl
              ">*</span>
                  </label>
                  
                <textarea class="
                w-[100%]
                border
                border-green-700
                p-2
                rounded-md
                focus:outline-green-700
                " placeholder="সোনাতলা, সাথিয়া, পাবনা"></textarea>
                </div>
              </div>

            </div>
          </div>

          <div class="
          w-full
          flex
          ">
            <button class="
            w-full
            bg-green-700
            p-2
            rounded-md
            mt-5
            cursor-pointer
            md:w-[25%]
            md:mx-auto
            text-white
            " type="submit">
              আপনার আবেদনটি সংরক্ষণ করুন
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>

<style scoped></style>