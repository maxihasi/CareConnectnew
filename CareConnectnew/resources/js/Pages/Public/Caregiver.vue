<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import hiro from "@/assets/img/hiro.jpg";
import sami from "@/assets/img/sami.jpg";
import dunu from "@/assets/img/dunu.jpg";
defineProps({
    list:Array

});
</script>
<template>
    <PublicLayout>
        <div class="portfolio-2 py-6 md:py-12">
            <div class="container px-4 mx-auto">
                <div class="md:flex md:justify-center">
                    <div class="md:w-10/12 xl:w-8/12 text-center">
                        <h1 class="text-3xl md:text-4xl mb-4">
                            "We provide awesome design for your content"
                        </h1>
                        <p class="text-xl font-light">
                            "Easily find compassionate and qualified caregivers through our user-friendly selection process. Explore detailed profiles and quickly match with the right caregiver for your loved ones."
                        </p>
    <div class="mt-6">

        <div class="mt-12">
            <form class="w-full p-20">
                    <fieldset>
                    <div class="relative border border-green-200 text-green-800 bg-green shadow-lg">
                        <label for="frm-whatever" class="sr-only">My field</label>
                        <select class="appearance-none w-full py-1 px-2 bg-green-200" name="whatever" id="frm-whatever">
                            <option value="">Please choose&hellip;</option>
                        <option value="1">Top Rate</option>
                        <option value="2">City</option>
                        <option value="3">Age</option>
                        <option value="3">Gender</option>
                        </select>
                        <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                        </fieldset>
            </form>
                    </div>
                        </div>
                    </div>
                </div>

  <section class="py-20 bg-white">
    <div class="container mx-auto text-center">
      <h2 class="text-5xl font-bold">Our Caregivers</h2>
      <div class="flex flex-wrap justify-center mt-12">
        <div class="max-w-xs p-6 mx-4 mb-8 bg-gray-100 rounded-lg shadow-lg">
            <img :src="hiro" alt="Ethan Miller" class="w-16 h-16 mx-auto rounded-full" />
          <h3 class="mt-4 text-xl font-semibold">sunil perera</h3>
          <p class="text-gray-600">Kandy</p>
          <span class="text-yellow-400 mt-2">★ ★ ★ ★ ★</span>
          <blockquote class="mt-4 text-gray-500">
            "I’ve been using this service for a while, and it has made managing my finances so much easier."
          </blockquote>
          <div class="mt-12">
                        <a
                            href="#"
                            class="get-started text-black font-bold  px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                        >
                            Check Availability
                        </a>

                        </div>
        </div>

        <div class="max-w-xs p-6 mx-4 mb-8 bg-gray-100 rounded-lg shadow-lg">
          <img :src="sami" alt="Emily Johnson" class="w-16 h-16 mx-auto rounded-full" />
          <h3 class="mt-4 text-xl font-semibold">siril Perera</h3>
          <p class="text-gray-600">Colombo</p>
          <span class="text-yellow-400 mt-2">★ ★ ★ ★ ★</span>
          <blockquote class="mt-4 text-gray-500">
            "I feel more confident about my investment decisions than ever before."
          </blockquote>
          <div class="mt-12">
                        <a
                            href="#"
                            class="get-started text-black font-bold  px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                        >
                            Check Availability
                        </a>

                        </div>
        </div>

        <div class="max-w-xs p-6 mx-4 mb-8 bg-gray-100 rounded-lg shadow-lg">
          <img :src="dunu" alt="Olivia Carter" class="w-16 h-16 mx-auto rounded-full" />
          <h3 class="mt-4 text-xl font-semibold">Olivia Carter</h3>
          <p class="text-gray-600">Kuruagala</p>
          <span class="text-yellow-400 mt-2">★ ★ ★ ★ ★</span>
          <blockquote class="mt-4 text-gray-500">
            "The customer service team helped me resolve a billing issue quickly."
          </blockquote>
          <div class="mt-12">
                        <a
                            href="#"
                            class="get-started text-black font-bold  px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                        >
                            Check Availability
                        </a>

                        </div>
        </div>

        <div class="max-w-xs p-6 mx-4 mb-8 bg-gray-100 rounded-lg shadow-lg">
          <img :src="sami" alt="Wyatt Turner" class="w-16 h-16 mx-auto rounded-full" />
          <h3 class="mt-4 text-xl font-semibold">Saman kumara</h3>
          <p class="text-gray-600">Kegalle</p>
          <span class="text-yellow-400 mt-2">★ ★ ★ ★ ★</span>
          <blockquote class="mt-4 text-gray-500">
            "This is the best tool for investment in the market that anyone can ask for."
          </blockquote>
          <div class="mt-12">
                        <a
                            href="#"
                            class="get-started text-black font-bold  px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                        >
                            Check Availability
                        </a>

                        </div>
        </div>
      </div>
    </div>
  </section>




      <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 md:mt-12 pb-6">
                    <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8" v-for="row in list">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    :src="route('project-img', row.img)"
                                    alt="portfolio image"
                                    class="align-middle border-none max-w-full h-auto rounded-lg"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    {{ row.title }}
                                </h5>
                                <p class="text-gray-600">
                                    {{ row.description }}
                                </p>
                                <div class="block pb-6">
                                    <!-- {{ row.techs }} -->
                                    <span v-for="tech in row.techs" :key="tech"
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-slate-500 bg-yellow-500 uppercase last:mr-0 mr-2 mt-2"
                                    >
                                    {{ tech }}
                                    </span>

                                </div>
                                <p class="text-gray-600">
                                    -------------------- 2021
                                    ------------------------
                                </p>
                            </div>
                        </div>
                    </div>

                     <!-- <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    src="//via.placeholder.com/800x600/666"
                                    alt="portfolio image"
                                    class="max-w-full h-auto"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    Young Bloods
                                </h5>
                                <p class="text-gray-600">
                                    FWR blocks bring in a fresh air of art and
                                    design in their blocks.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    src="//via.placeholder.com/800x600/666"
                                    alt="portfolio image"
                                    class="max-w-full h-auto"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    Nike90 Store
                                </h5>
                                <p class="text-gray-600">
                                    FWR blocks are reusable code blocks for
                                    designers, developers and agencies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    src="//via.placeholder.com/800x600/666"
                                    alt="portfolio image"
                                    class="max-w-full h-auto"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    Women Inventor
                                </h5>
                                <p class="text-gray-600">
                                    You can use FWR blocks for personal or
                                    commercial purpose with attribution.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    src="//via.placeholder.com/800x600/666"
                                    alt="portfolio image"
                                    class="max-w-full h-auto"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    Pomodoro App
                                </h5>
                                <p class="text-gray-600">
                                    FWR blocks is the must have tool for
                                    designers and developers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sm:px-6 sm:w-1/2 lg:w-1/3 mt-8">
                        <div class="portfolio-item mx-auto max-w-sm">
                            <div
                                class="portfolio-img relative overflow-hidden cursor-pointer"
                            >
                                <img
                                    src="//via.placeholder.com/800x600/666"
                                    alt="portfolio image"
                                    class="max-w-full h-auto"
                                />
                                <div class="portfolio-hover"></div>
                            </div>
                            <div class="px-1 py-4">
                                <h5
                                    class="font-semibold text-xl text-indigo-600 uppercase"
                                >
                                    Glax landing
                                </h5>
                                <p class="text-gray-600">
                                    FWR blocks are made with Bootstrap and
                                    minimal custom styling.
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
<style>
.portfolio-img {
    border-radius: 1rem;
}
.portfolio-img img {
    transform: scale(1.05);
    opacity: 1;
    filter: grayscale(70%);
    transition: transform 0.3s, opacity 0.3s, filter 1s;
}
.portfolio-img:hover img {
    filter: grayscale(0%);
    transform: scale(1);
    opacity: 1;
}
.portfolio-img:hover .portfolio-hover::before {
    transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg)
        translate3d(0, 100%, 0);
}

.portfolio-hover {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}
.portfolio-hover::before {
    content: "";
    background-color: rgba(255, 255, 255, 0.5);
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg)
        translate3d(0, -100%, 0);
    transition: transform 0.6s;
}
</style>

<script>
export default {
  data() {
    return {
      ethanImage: 'path/to/ethan-image.jpg',
      emilyImage: 'path/to/emily-image.jpg',
      oliviaImage: 'path/to/olivia-image.jpg',
      wyattImage: 'path/to/wyatt-image.jpg'
    };
  }
};
</script>
<style scoped>
/* Add any additional styles here */
</style>
