<template>
  <nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow"
  >
    <div
      class="container px-4 mx-auto flex flex-wrap items-center justify-between"
    >
      <div
        class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
      >
        <Link href="/">
          <a
            class="text-blueGray-900 text-S font-extrabold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
            href="#"
          >
            CareConnect.LK
          </a>
        </Link>
        <button
          class="cursor-pointer text-xl leading-none px-36 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button"
          v-on:click="setNavbarOpen"
        >
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div
        class="lg:flex flex-grow items-center"
        :class="[navbarOpen ? 'block' : 'hidden']"
        id="example-navbar-warning"
      >
        <ul class="flex flex-col lg:flex-row list-none mr-auto">
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              href="/"
            >
              <i
                class="text-blueGray-400 fa fa-home-alt text-lg leading-lg mr-2"
              />
              Home
            </a>
          </li>
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              :href="route('about-us')"
            >
              <i class="text-blueGray-400 fa fa-address-card text-lg leading-lg" />
              <span class=" inline-block ml-2">About us</span>
            </a>
          </li>

          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              :href="route('portfolio')"
            >
              <i class="text-blueGray-400 fas fa-user-friends text-lg leading-lg" />
              <span class=" inline-block ml-2">Caregivers</span>
            </a>
          </li>

          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              :href="route('contact')"
            >
              <i class="text-blueGray-400 fas fa-phone  fa-phone text-lg leading-lg" />
              <span class=" inline-block ml-2">Contacts</span>
            </a>
          </li>
          <li class="flex items-center">
            <a
              class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold"
              :href="route('feedback')"
            >
              <i class="text-blueGray-400 fas fa-comments   text-lg leading-lg" />
              <span class=" inline-block ml-2">Feedbacks</span>
            </a>
          </li>
        </ul>
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">



          <li class="flex items-center">
            <Link
              class="bg-emerald-500 text-white active:bg-emerald-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                :href="route('caregiver.login')"
              >
              <i class="fas fa-arrow-alt-circle-down"></i> LOGIN
            </Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script setup>
import IndexDropdown from "./Components/Dropdown.vue";
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const navbarOpen = ref(false);

const setNavbarOpen = () => {
  navbarOpen.value = !navbarOpen.value;
};
</script>
