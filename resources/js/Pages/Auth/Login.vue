<script setup>
import Header from "@/Layouts/Header.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
    remember: null,
});

const submit = () => {
    form.post(route("login"), {
        onError: () => form.reset("password"),
    });
};
</script>

<template>
    <Header/>
    <div>
        <v-container fluid>
            <v-row class="min-h-screen py-6 bg-emerald-100">
                <v-col cols="12" lg="10" class="mx-auto">
                    <v-card class="rounded-xl shadow-lg">
                        <v-row>
                            <v-col cols="12" lg="6" class="py-16 px-12">
                                <h2 class="text-3xl mb-4 font-bold">Log In</h2>
                                <div class="w-2/4 mx-auto">
                                    <form @submit.prevent="submit">
                                        <div>
                                            <v-text-field
                                                v-model="form.email"
                                                label="Email"
                                                class="text-bold"
                                            ></v-text-field>
                                            <small class="text-red-400">{{
                                                form.errors.email
                                            }}</small>
                                            <v-text-field
                                                v-model="form.password"
                                                label="Password"
                                                class="text-bold"
                                                type="password"
                                            ></v-text-field>
                                            <small class="text-red-400">{{
                                                form.errors.password
                                            }}</small>
                                        </div>

                                        <div>
                                            <div>
                                                <label>Remember me </label>
                                                <input
                                                    type="checkbox"
                                                    v-model="form.remember"
                                                    class="border border-black"
                                                />
                                            </div>
                                            <p class="text-slate-600 mb-2">
                                                Need an Account?
                                                <a
                                                    :href="route('register')"
                                                    class="text-link"
                                                    >Register</a
                                                >
                                            </p>
                                        </div>

                                        <div>
                                            <v-btn
                                                class="me-4 w-full py-4 pb-8 text-primary hover:opacity-80"
                                                type="submit"
                                                :disabled="form.processing"
                                            >
                                                submit
                                            </v-btn>
                                        </div>
                                    </form>
                                </div>
                            </v-col>

                            <v-col
                                cols="12"
                                lg="6"
                                class="bg-no-repeat bg-cover bg-center"
                                style="
                                    background-image: url('images/signup.png');
                                "
                            >
                                <!-- Image will cover this entire column -->
                            </v-col>
                        </v-row>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
