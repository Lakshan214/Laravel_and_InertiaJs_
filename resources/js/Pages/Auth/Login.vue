<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <br><center><h1 style="color: #4c53af;">Signup </h1></center>
    <form @submit.prevent="submit" class="w-50 mx-auto mt-5">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          id="email"
          type="email"
          class="form-control"
          v-model="form.email"
          required
          autofocus
          autocomplete="username"
        />
        <div class="invalid-feedback">{{ form.errors.email }}</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
          id="password"
          type="password"
          class="form-control"
          v-model="form.password"
          required
          autocomplete="current-password"
        />
        <div class="invalid-feedback">{{ form.errors.password }}</div>
      </div>

      <div class="mb-3 form-check">
        <input
          type="checkbox"
          id="remember"
          class="form-check-input"
          v-model="form.remember"
        />
        <label for="remember" class="form-check-label">Remember me</label>
      </div>

      <div class="d-flex justify-content-end">
        <a
          v-if="canResetPassword"
          :href="route('password.request')"
          class="text-decoration-none text-muted"
        >
          Forgot your password?
        </a>

        <button
          class="btn btn-primary ms-4"
          :class="{ 'disabled': form.processing }"
          :disabled="form.processing"
        >
          Log in
        </button>
      </div>
    </form>
 
</template>

