<template>
    <Header />
    <v-container fluid>
      <v-row class="min-h-screen py-6 bg-emerald-100">
        <v-col cols="12" lg="10" class="mx-auto">
          <v-card class="rounded-xl shadow-lg">
            <v-row>
              <v-col cols="12" lg="6" class="bg-no-repeat bg-cover bg-center" style="background-image: url('images/signup.png');">
                <!-- Image will cover this entire column -->
              </v-col>
              <v-col cols="12" lg="6" class="py-16 px-12">
                <h2 class="text-3xl mb-4 font-bold">Register</h2>
                <p class="mb-4">
                  Create your account. It’s free and only takes a minute
                </p>
                <v-form @submit.prevent="registerUser">
                  <v-row>
                    <v-col cols="6">
                      <v-text-field v-model="form.name" label="Name" outlined></v-text-field>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="form.lastName" label="Lastname" outlined></v-text-field>
                    </v-col>
                  </v-row>
                  <v-text-field v-model="form.email" label="Email" type="email" outlined></v-text-field>
                  <v-text-field v-model="form.password" label="Password" type="password" outlined></v-text-field>
                  <v-text-field v-model="form.password_confirmation" label="Confirm Password" type="password" outlined></v-text-field>
                  <v-row class="mt-5">
                    <v-col cols="12">
                      <v-checkbox v-model="form.acceptTerms" label="I accept the Terms of Use & Privacy Policy"></v-checkbox>
                    </v-col>
                  </v-row>
                  <v-row class="mt-5 text-center">
                    <v-col cols="12">
                      <v-btn color="teal" dark type="submit">Register Now</v-btn>
                    </v-col>
                  </v-row>
                </v-form>
              </v-col>
            </v-row>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </template>

  <script>
  import Header from "@/Layouts/Header.vue";
  import { useForm } from '@inertiajs/vue3';

  export default {
    components: {
      Header,
    },
    data() {
      return {
        form: useForm({
          name: '',
          lastName: '',
          email: '',
          password: '',
          password_confirmation: '',
          acceptTerms: false,
        }),
      };
    },
    methods: {
      registerUser() {
        this.form.post('/register');
      },
    },
  };
  </script>
