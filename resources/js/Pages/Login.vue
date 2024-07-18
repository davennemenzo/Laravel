
<template>

<Header/>


  <v-card
  class="mx-auto"
  max-width="425"
  style="margin-top: 80px; height: 50vh;"
  >
  <h1 class="text-h5 text-teal-500 text-center p-5  ">Log In</h1>
  <v-responsive
    class="mx-auto"
    max-width="344"
  >
    <v-text-field
      hide-details="auto"
      label="Email address"
      placeholder="Enter Email Address"
      type="email"
      rounded="xl"
    ></v-text-field>

    <v-text-field
    class="mt-6 mb-3"
      hint-details="auto"
      label="Password"
      placeholder="Enter Password"
      type="password"
      rounded="xl"
    ></v-text-field>
  </v-responsive>


  <v-row class="justify-end ">
    <v-col cols="auto" class="mr-10">
      <a href="#" class="text-teal-500 font-semibold hover:text-emerald-400">Forgot Password?</a>
    </v-col>
  </v-row>

  <v-row justify="center">
    <v-btn density="default" >Sign In</v-btn>
</v-row>

<v-row justify="center">
    <v-col cols="auto">
        <a href="">Dont have an account?</a>
        <a href="" class="">Sign Up</a>
      </v-col>
    </v-row>

  </v-card>

</template>
<script setup>
import Header from "@/Layouts/Header.vue";
</script>
