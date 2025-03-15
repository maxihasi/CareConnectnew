<script setup>
import logo from "@/assets/img/logo.png";
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <img :src="logo" alt="Emily Johnson" class="w-22 h-20 mx-auto rounded-full" />
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-green-200 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
