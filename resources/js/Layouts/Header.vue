<template>
    <nav class="bg-emerald-200 p-2 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-semibold">
                <a href="#" class="text-teal-500 hover:text-gray-600 font-bold"
                    ><span
                        class="text-emerald-500 text-3xl hover:text-gray-600 font-bold"
                        >D</span
                    >code</a
                >
            </div>
            <div class="hidden md:flex space-x-8">
                <Link
                    :href="route('home')"
                    class="text-black hover:text-gray-600 font-bold"
                    >Home</Link
                >
                <Link
                    :href="route('dashboard')"
                    class="text-black hover:text-gray-600 font-bold"
                    >Dashboard</Link
                >
                <Link
                    :href="route('services')"
                    class="text-black hover:text-gray-600 font-bold"
                    >Services  </Link
                >

                

                <Link
                    :href="route('login')"
                    class="text-black hover:text-gray-600 font-bold"
                    >Log In</Link
                >
                <Link
                    :href="route('register')"
                    class="text-black hover:text-gray-600 font-bold"
                    >Register</Link
                >
            </div>
            <div class="md:hidden">
                <button
                    @click="toggleMenu"
                    class="text-gray-800 hover:text-gray-600 focus:outline-none"
                >
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
