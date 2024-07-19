<script setup>
import Header from "@/Layouts/Header.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    form.post(route("register"), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
</script>

<template>
    <Header />

    <div class="w-2/4 mx-auto my-10 ">
        <v-card >
            <v-card-title class="text-center " >Register Account</v-card-title>

            <v-form @submit.prevent="submit" class="p-5 ">
                <div class="mb-6">
                    <v-text-field
                        type="text"
                        v-model="form.name"
                        label="Name"
                    />
                    <small class="text-red-400">{{ form.errors.name }}</small>
                </div>
                <div class="mb-6">
                    <v-text-field
                        type="text"
                        v-model="form.email"
                        label="Email"
                    />
                    <small class="text-red-400">{{ form.errors.email }}</small>
                </div>
                <div class="mb-6">
                    <v-text-field
                        type="password"
                        v-model="form.password"
                        label="Password"
                    />
                    <small class="text-red-400">{{
                        form.errors.password
                    }}</small>
                </div>
                <div class="mb-6">

                    <v-text-field
                        type="password"
                        v-model="form.password_confirmation"
                        label="Confirm Password"
                    />
                </div>

                <div>
                    <p class="text-slate-600 mb-2 text-center">
                        Already a have an account?
                        <a :href="route('login')" class="hover">Log in</a>
                    </p>
                    <v-btn class="w-100 bg-primary">Register</v-btn>
                </div>
            </v-form>
        </v-card>
    </div>
</template>
