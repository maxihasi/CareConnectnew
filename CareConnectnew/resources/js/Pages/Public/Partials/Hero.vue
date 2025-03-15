<script setup>
import patternVue from "@/assets/img/c5.png";
</script>
<template>
    <section
        class="header relative pt-16 items-center flex h-screen max-h-860-px bg-green-200"
    >
        <div class="container mx-auto items-center flex flex-wrap">
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
                <div class="pt-32 sm:pt-0">
                    <h2 class="font-semibold text-4xl text-slate-800">
                        Trusted Hands - Caring Hearts
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-slate-900 ">
                        Welcome to CareConnect! CareConnect is a platform designed to connect caregivers and clients, primarily for the elderly and individuals in need of assistance. It facilitates a smooth interaction between caregivers, who provide support services, and clients, who require help with daily activities.


                    </p>
                    <div class="mt-12">
                        <a
                            :href="route('register')"
                            class="get-started text-black font-bold  px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                        >
                            Register as Client
                        </a>


                    </div>
                </div>
            </div>
        </div>

        <img
            class="absolute top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 sm:mt-0 w-10/12 max-h-860-px"
            :src="patternVue"
            alt="..."
        />
    </section>
</template>
