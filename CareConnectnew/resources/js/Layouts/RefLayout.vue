<template>
    <div>
      <Sidebar />
      <div class="relative md:ml-64 bg-blueGray-100">
        <Navbar />
  <slot name="header"/>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <slot/>

          <Footer />
        </div>
      </div>
    </div>
  </template>
<script setup>
import Navbar from "./Admin/Navbar.vue";
import Sidebar from "./Ref/Sidebar.vue";
import Footer from "./Public/Footer.vue";
</script>
