<template>
    <Header />
    <v-container fluid>
        <v-row class="min-h-screen py-6 bg-emerald-100">
            <v-col cols="12" lg="10" class="mx-auto">
                <v-card class="rounded-xl shadow-lg">
                    <v-row>
                        <v-col cols="12" lg="6" class="py-16 px-12">
                            <h2 class="text-3xl mb-4 font-bold">Log In</h2>
                            <p class="mb-4">
                                Create your account. It’s free and only takes a
                                minute
                            </p>
                            <v-form @submit.prevent="registerUser">
                                <v-row>
                                    <v-col cols="6">
                                        <v-text-field
                                            v-model="firstName"
                                            label="Firstname"
                                            outlined
                                        ></v-text-field>
                                    </v-col>
                                    <v-col cols="6">
                                        <v-text-field
                                            v-model="lastName"
                                            label="Surname"
                                            outlined
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-text-field
                                    v-model="email"
                                    label="Email"
                                    type="email"
                                    outlined
                                ></v-text-field>
                                <v-text-field
                                    v-model="password"
                                    label="Password"
                                    type="password"
                                    outlined
                                ></v-text-field>
                                <v-text-field
                                    v-model="confirmPassword"
                                    label="Confirm Password"
                                    type="password"
                                    outlined
                                ></v-text-field>
                                <v-row class="mt-5">
                                    <v-col cols="12">
                                        <v-checkbox
                                            v-model="acceptTerms"
                                            label="I accept the Terms of Use & Privacy Policy"
                                        ></v-checkbox>
                                    </v-col>
                                </v-row>
                                <v-row class="mt-5">
                                    <v-col cols="12">
                                        <v-btn
                                            color="teal"
                                            dark
                                            @click="registerUser"
                                            >Register Now</v-btn
                                        >
                                    </v-col>
                                </v-row>
                            </v-form>
                        </v-col>
                        <v-col
                            cols="12"
                            lg="6"
                            class="bg-no-repeat bg-cover bg-center"
                            style="background-image: url('images/signup.png')"
                        >
                            <!-- Image will cover this entire column -->
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup>
import Header from "@/Layouts/Header.vue";
import { ref } from "vue";

const firstName = ref("");
const lastName = ref("");
const email = ref("");
const password = ref("");
const confirmPassword = ref("");
const acceptTerms = ref(false);

const registerUser = () => {
    // Handle registration logic here
    console.log("Registering user...");
};
</script>
