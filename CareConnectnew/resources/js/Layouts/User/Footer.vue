<template>
  <footer class="block py-4">
    <div class="container mx-auto px-4">
      <hr class="mb-4 border-b-1 border-blueGray-200" />
      <div
        class="flex flex-wrap items-center md:justify-between justify-center"
      >
        <div class="w-full md:w-4/12 px-4">
          <div
            class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left"
          >
          APIS
            <a
              href="#"
              class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1"
            >
            Technologies
            </a>
          </div>
        </div>

      </div>
    </div>
  </footer>
</template>
<script setup>
import { ref } from 'vue';

const date = ref(new Date().getFullYear());
</script>


