
<template>
  
<Header/>

    <div class="flex justify-center items-center h-screen bg-emerald-100">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center font-bold "><i class="font-dm-serif-display"></i> Login</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" id="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 rounded-xl" placeholder="Enter Username..." />
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 rounded-xl" placeholder="Enter Password..." />
            </div>
            <div class="mt-3 flex justify-between items-center">
                <div>
                    <input type="checkbox">
                    <label>  Remember Me</label>
                </div>
                <div>
                    <a href="#" class="text-teal-500 font-semibold hover:text-emerald-400">Forgot Password?</a>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="border-2 border-teal-500 bg-teal-500 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-teal-500 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login</button>
            </div>
        </div>
    </div>
    
</template>
<script setup>
import Header from "@/Layouts/Header.vue";
</script>