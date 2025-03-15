<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import ab1 from "@/assets/img/c8.jpg";
import saji from "@/assets/img/saji.jpg";
import era from "@/assets/img/era.jpg";
import cha from "@/assets/img/cha.jpg";

import yaso from "@/assets/img/yaso.jpg";

import Vi from "@/assets/img/c9.jpg";
import Mi from "@/assets/img/c10.jpg";
</script>

<template>
    <PublicLayout>
        <!-- Section 1 -->
        <section class="px-2 py-32 bg-white md:px-0">
            <div
                class="box-border flex flex-col items-center gap-20 content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16"
            >
                <div
                    class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0"
                >
                    <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                    >
                        <span class="block xl:inline text-center"
                            >Who We Are?</span
                        ><br />
                        <span class="block text-gray-700 text-xl text-justify"
                            >"We are a leading caregiving service provider, offering personalized care for individuals of all ages, both at home and in hospital settings."</span
                        >
                    </h1>
                    <p
                        class="mx-auto text-base text-gray-600 sm:max-w-md lg:text-xl md:max-w-3xl"
                    >
                    Since our founding in [Month, Year], we have quickly established ourselves as a trusted provider of compassionate and reliable caregiving services. To date, we have supported numerous families, providing care for children, pregnant women, the elderly, and patients. Our services are designed to ensure comfort, safety, and well-being, delivered by a team of professional caregivers.
                    </p>

                    <p
                        class="mx-auto text-base text-gray-600 sm:max-w-md lg:text-xl md:max-w-3xl"
                    >
                    At CareConnect, we are driven by a passion for helping others and a commitment to delivering exceptional service. Our team of dedicated caregivers is focused on providing care that is not only professional, but also warm, attentive, and personalized to each client's unique needs. We strive to build strong, long-term relationships with the families we serve and continuously look for ways to exceed their expectations.
                    </p>

                    <p
                        class="mx-auto text-base text-gray-600 sm:max-w-md lg:text-xl md:max-w-3xl"
                    >
                    Thank you for considering CareConnect for your caregiving needs. We look forward to the opportunity to support your loved ones and make a positive difference in their lives.


                    </p>
                </div>

                <div
                    class="box-border relative w-full max-w-lg px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10"
                >
                    <img
                        :src="ab1"
                        alt="About us"
                        class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20"
                    />
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16"
            >
                <!-- Image -->
                <div
                    class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10"
                >
                    <img
                        :src="Vi"
                        alt="About us"
                        class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20"
                    />
                </div>

                <!-- Content -->
                <div
                    class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none"
                >
                    <h6
                        class="m-0 text-4xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl"
                    >
                        VISION
                    </h6>
                    <p
                        class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg"
                    >
                    "To be the most trusted and compassionate caregiving service, enhancing the quality of life for individuals and families through personalized care."
                    </p>
                </div>
                <!-- End  Content -->
            </div>
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16"
            >
                <!-- Content -->
                <div
                    class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32"
                >
                    <h2
                        class="m-0 text-4xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl"
                    >
                        Mission
                    </h2>
                    <p
                        class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg"
                    >
                    "provide professional, reliable, and heartfelt care to people of all ages, ensuring their comfort, safety, and well-being, whether at home or in the hospital."
                    </p>
                </div>
                <!-- End  Content -->

                <!-- Image -->
                <div
                    class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2"
                >
                    <img
                        :src="Mi"
                        alt="About us"
                        class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20"
                    />
                </div>
            </div>
        </section>

        <!-- component -->
        <div class="mb-16">
            <!-- Code block starts -->
            <dh-component>
                <div class="container flex justify-center mx-auto pt-16">
                    <div>
                        <p
                            class="text-gray-800 text-4xl text-center font-normal pb-3 font-semibold"
                        >
                            OUR TEAM
                        </p>
                        <h1
                            class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto"
                        >
                            The Talented People Behind the Scenes of the Company
                        </h1>
                    </div>
                </div>
                <div class="w-full bg-gray-100 px-10 pt-10">
                    <div class="container mx-auto">
                        <div
                            role="list"
                            aria-label="Behind the scenes People "
                            class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around"
                        >
                            <div
                                role="listitem"
                                class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5"
                            >
                                <div
                                    class="rounded overflow-hidden shadow-md bg-white"
                                >
                                    <div
                                        class="absolute -mt-20 w-full flex justify-center"
                                    >
                                        <div class="h-32 w-32">
                                            <img

                                                  :src="saji"
                                                  alt="portfolio image"
                                                   role="img"
                                                class="rounded-full object-cover h-full w-full shadow-md"
                                            />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1
                                            class="font-bold text-3xl text-center mb-1"
                                        >
                                           Mr.Sajith Madhubashana
                                        </h1>
                                        <p
                                            class="text-gray-800 text-sm text-center"
                                        >
                                        Caregiver Recruiter
                                        </p>
                                        <p
                                            class="text-center text-gray-600 text-base pt-3 font-normal"
                                        >
                                        Focuses on recruiting, screening, and hiring qualified caregivers to ensure the company maintains a pool of skilled professionals.
                                        </p>
                                        <div
                                            class="w-full flex justify-center pt-5 pb-5"
                                        >
                                            <button
                                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                            type="button"
                                            >
                                            <i class="fab fa-facebook-square"></i>
                                            </button>
                                            <button
                                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-linkedin"></i>
                                                </button>
                                                <button
                                                class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-github"></i>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                role="listitem"
                                class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5"
                            >
                                <div
                                    class="rounded overflow-hidden shadow-md bg-white"
                                >
                                    <div
                                        class="absolute -mt-20 w-full flex justify-center"
                                    >
                                        <div class="h-32 w-32">
                                            <img
                                                 :src="era"
                                                  alt="Erandika"
                                                role="img"
                                                class="rounded-full object-cover h-full w-full shadow-md"
                                            />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1
                                            class="font-bold text-3xl text-center mb-1"
                                        >
                                           Mrs. Erandi Baduge
                                        </h1>
                                        <p
                                            class="text-gray-800 text-sm text-center"
                                        >
                                        Care Coordinator
                                        </p>
                                        <p
                                            class="text-center text-gray-600 text-base pt-3 font-normal"
                                        >
                                        Assigns caregivers to clients based on their needs, preferences, and schedules; ensures smooth coordination between clients and caregivers.

                                        </p>
                                        <div
                                            class="w-full flex justify-center pt-5 pb-5"
                                        >
                                        <button
                                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                            type="button"
                                            >
                                            <i class="fab fa-facebook-square"></i>
                                            </button>
                                            <button
                                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-linkedin"></i>
                                                </button>
                                                <button
                                                class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-github"></i>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                role="listitem"
                                class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5"
                            >
                                <div
                                    class="rounded overflow-hidden shadow-md bg-white"
                                >
                                    <div
                                        class="absolute -mt-20 w-full flex justify-center"
                                    >
                                        <div class="h-32 w-32">
                                            <img
                                                 :src="cha"
                                                  alt="Chathura"
                                                role="img"
                                                class="rounded-full object-cover h-full w-full shadow-md"
                                            />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1
                                            class="font-bold text-3xl text-center mb-1"
                                        >
                                            Ms.Chathura Fernando
                                        </h1>
                                        <p
                                            class="text-gray-800 text-sm text-center"
                                        >
                                        Client Relations Manager
                                        </p>
                                        <p
                                            class="text-center text-gray-600 text-base pt-3 font-normal"
                                        >
                                        Acts as the main point of contact for clients, addressing inquiries, resolving issues, and ensuring client satisfaction with caregiving services.
                                        </p>
                                        <div
                                            class="w-full flex justify-center pt-5 pb-5"
                                        >
                                        <button
                                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                            type="button"
                                            >
                                            <i class="fab fa-facebook-square"></i>
                                            </button>
                                            <button
                                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-linkedin"></i>
                                                </button>
                                                <button
                                                class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-github"></i>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                role="listitem"
                                class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5"
                            >
                                <div
                                    class="rounded overflow-hidden shadow-md bg-white"
                                >
                                    <div
                                        class="absolute -mt-20 w-full flex justify-center"
                                    >
                                        <div class="h-32 w-32">
                                            <img
                                                 :src="yaso"
                                                  alt="Yasodha"
                                                role="img"
                                                class="rounded-full object-cover h-full w-full shadow-md"
                                            />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1
                                            class="font-bold text-3xl text-center mb-1"
                                        >
                                           Ms.Yasodha Virajini
                                        </h1>
                                        <p
                                            class="text-gray-800 text-sm text-center"
                                        >
                                        Operations Manager
                                        </p>
                                        <p
                                            class="text-center text-gray-600 text-base pt-3 font-normal"
                                        >
                                        Oversees day-to-day business operations, including caregiver-client matching, logistics, and ensuring service quality.
                                        </p>
                                        <div
                                            class="w-full flex justify-center pt-5 pb-5"
                                        >
                                        <button
                                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                            type="button"
                                            >
                                            <i class="fab fa-facebook-square"></i>
                                            </button>
                                            <button
                                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-linkedin"></i>
                                                </button>
                                                <button
                                                class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                                type="button"
                                                >
                                                <i class="fab fa-github"></i>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </dh-component>
            <!-- Code block ends -->
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        </div>
    </PublicLayout>
</template>
