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

    <v-row class="min-h-screen py-6 bg-emerald-100">
        <v-row class="justify-center">
            <v-col cols="12" lg="10" class="mx-auto">
                <v-card class="rounded-xl shadow-lg mt-1">
                    <v-row>
                        <v-col cols="12" lg="6" class="py-16 px-12">
                            <v-card class="mx-auto" max-width="500">
                                <v-card-title class="justify-center">
                                    <h2 class="text-3xl mb-4 font-bold">
                                        Register Account
                                    </h2>
                                </v-card-title>
                                <v-card-text>
                                    <v-form @submit.prevent="submit">
                                        <v-text-field
                                            v-model="form.name"
                                            label="Name"
                                            outlined
                                            dense
                                            class="mb-3"
                                            :error-messages="form.errors.name"
                                        ></v-text-field>

                                        <v-text-field
                                            v-model="form.email"
                                            label="Email"
                                            outlined
                                            dense
                                            class="mb-3"
                                            :error-messages="form.errors.email"
                                        ></v-text-field>

                                        <v-text-field
                                            v-model="form.password"
                                            label="Password"
                                            outlined
                                            dense
                                            type="password"
                                            class="mb-3"
                                            :error-messages="
                                                form.errors.password
                                            "
                                        ></v-text-field>

                                        <v-text-field
                                            v-model="form.password_confirmation"
                                            label="Confirm Password"
                                            outlined
                                            dense
                                            type="password"
                                            class="mb-3"
                                        ></v-text-field>

                                        <p class="text-center mb-2">
                                            Already have an account?
                                            <a
                                                :href="route('login')"
                                                class="text-teal-accent-4"
                                                >Log in</a
                                            >
                                        </p>

                                        <v-btn
                                            type="submit"
                                            class="me-4 w-full py-4 pb-8 hover:opacity-80 bg-teal-lighten-1 text-center"
                                            :disabled="form.processing"
                                        >
                                            Register
                                        </v-btn>
                                    </v-form>
                                </v-card-text>
                            </v-card>
                        </v-col>

                        <v-col
                            cols="12"
                            lg="6"
                            class="bg-no-repeat bg-center"
                            style="
                                background-image: url('images/register.png');
                                background-size: contain;
                            "
                        >
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
        </v-row>
    </v-row>
</template>
