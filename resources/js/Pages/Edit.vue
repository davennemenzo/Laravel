<script setup>
import Header from "@/Layouts/Header.vue";
import { useForm } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    errors: Object,
    user: Object,
});
const form = useForm({
    name: props.user.name,
    email: props.user.email,
});

function submit(id) {
    router.put("/user/" + id, form);
}
</script>

<template>
    <Header />

    <div class="w-2/4 mx-auto my-10">
        <v-card>
            <v-card-title class="text-center">Update Account</v-card-title>

            <v-form @submit.prevent="submit(user.id)" class="p-5">
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

                <div>
                    <v-btn type="submit" class="w-100 bg-primary"
                        >Register</v-btn
                    >
                </div>
            </v-form>
        </v-card>
    </div>
</template>
