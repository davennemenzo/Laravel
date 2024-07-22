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
    <Header />
    <div>
        <v-container fluid>
            <v-row class="min-h-screen py-6 bg-emerald-100">
                <v-col cols="12" lg="10" class="mx-auto">
                    <v-card class="rounded-xl shadow-lg">
                        <v-row>
                            <v-col cols="12" lg="6" class="py-16 px-12">
                                <v-card class="mx-auto" max-width="500">
                                    <v-card-title class="justify-center">
                                        <h2
                                            class="text-3xl mb-4 font-bold font-dm-serif-display"
                                        >
                                            Log In
                                        </h2>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-form @submit.prevent="submit">
                                            <v-text-field
                                                v-model="form.email"
                                                label="Email"
                                                outlined
                                                dense
                                                class="mb-3"
                                                :error-messages="
                                                    form.errors.email
                                                "
                                            ></v-text-field>

                                            <v-text-field
                                                v-model="form.password"
                                                label="Password"
                                                outlined
                                                dense
                                                type="password"
                                                class="mb-2"
                                                :error-messages="
                                                    form.errors.password
                                                "
                                            ></v-text-field>

                                            <div class="mb-4">
                                                <label>Remember me</label>
                                                <input
                                                    type="checkbox"
                                                    v-model="form.remember"
                                                    class="border border-black"
                                                />
                                            </div>

                                            <p class="text-center mb-4">
                                                Need an Account?
                                                <a
                                                    :href="route('register')"
                                                    class="text-teal-accent-4"
                                                    >Register</a
                                                >
                                            </p>

                                            <v-btn
                                                class="w-full py-4 pb-8 hover:opacity-80 bg-teal-lighten-1 text-center"
                                                type="submit"
                                                :disabled="form.processing"
                                            >
                                                Submit
                                            </v-btn>
                                        </v-form>
                                    </v-card-text>
                                </v-card>
                            </v-col>

                            <v-col
                                cols="12"
                                lg="6"
                                class="bg-no-repeat bg-cover bg-center"
                                style="
                                    background-image: url('images/signup.png');
                                    background-size: contain;
                                "
                            ></v-col>
                        </v-row>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
