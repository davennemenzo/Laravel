<template>

    <Header />
        <h1 class="title">Register Account</h1>
        <div class="w-2/4 mx-auto">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label>First Name</label>
                    <input type="text" v-model="form.firstname">
                </div>
                <div class="mb-6">
                    <label>Last Name</label>
                    <input type="text" v-model="form.lastname">
                </div>
                <div class="mb-6">
                    <label>Email</label>
                    <input type="text" v-model="form.email">
                </div>
                <div class="mb-6">
                    <label>Password</label>
                    <input type="password" v-model="form.password">
                </div>
                <div class="mb-6">
                    <label>Confirm Password</label>
                    <input type="password" v-model="form.confirmPassword">
                </div>
                <div>
                    <p class="text-slate-600 mb-2">Already a user? <a href="#" class="text-link"></a></p>
                    <button class="primary-button">Register</button>
                </div>
            </form>
        </div>
</template>
<script setup>
import Header from "@/Layouts/Header.vue";
import {reactive} from 'vue';
import {router} from '@inertiajs/vue3';

const form = reactive({
    firstname: null,
    lastname: null,
    email: null,
    password: null,
    confirmPassword: null,
});

const submit = () =>{
    router.post('/register', form);
};

</script>
