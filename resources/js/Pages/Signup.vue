<template>

<Header/>

    <div class="min-h-screen py-40 bg-emerald-100">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('images/signup.png'); background-size: cover;">
            <!-- Image will cover this entire div -->
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2 class="text-3xl mb-4 font-dm-serif-display font-bold">Register</h2>
            <p class="mb-4">
              Create your account. It’s free and only takes a minute
            </p>
            <form action="#">
              <div class="grid grid-cols-2 gap-5">
                <input type="text" placeholder="Firstname" class="border border-gray-400 py-1 px-2">
                <input type="text" placeholder="Surname" class="border border-gray-400 py-1 px-2">
              </div>
              <div class="mt-5">
                <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="checkbox" class="border border-gray-400">
                <span>
                  I accept the <a href="#" class="text-teal-400 font-semibold">Terms of Use</a> & <a href="#" class="text-teal-400 font-semibold">Privacy Policy</a>
                </span>
              </div>
              <div class="mt-5">
                <button class="border-2 border-teal-500 bg-teal-500 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-teal-500 font-semibold">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script setup>
  import Header from "@/Layouts/Header.vue";
  </script>
  