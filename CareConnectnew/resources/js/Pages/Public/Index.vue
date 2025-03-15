<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Hero from "./Partials/Hero.vue";
import About from "./Partials/About.vue";
import Inquire from "./Partials/Inquire.vue";
</script>

<template>
    <PublicLayout>
        <Hero />

        <section class="mt-15 md:mt-10 pb-20 relative bg-slate-100"> <!-- Adjusted mt and pb -->
            <div
                class="-mt-16 top-0 bottom-auto left-0 right-0 w-full absolute h-20"
                style="transform: translateZ(0)"
            >
                <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
                >
                    <polygon
                        class="text-slate-100 fill-current"
                        points="2560 0 2560 100 0 100"
                    ></polygon>
                </svg>
            </div>

            <About />
        </section>

        <Inquire />
    </PublicLayout>
</template>
