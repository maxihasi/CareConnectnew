<script setup>
import Navbar from "./Public/Navbar.vue";
import Footer from "./Public/Footer.vue";
</script>
<template>
    <Navbar />
        <slot></slot>
    <Footer />
</template>
