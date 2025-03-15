<script setup>
import aboutus from "@/assets/img/c7.jpg";
</script>
<template>
    <div class="container mx-auto bg-green-200" >
        <div class="flex flex-wrap items-center">
            <div
                class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-32"
            >
                <div
                    class="relative flex flex-col min-w-0 break-words bg-lime-200 w-full mb-6 shadow-lg rounded-lg bg-emerald-500"
                >
                    <img
                        alt="..."
                        :src="aboutus"
                        class="w-full align-middle rounded-t-lg"
                    />
                    <blockquote class="relative p-8 mb-4">
                        <svg
                            preserveAspectRatio="none"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 583 95"
                            class="absolute left-0 w-full block h-95-px -top-94-px"
                        >
                            <polygon
                                points="-30,95 583,95 583,65"
                                class="text-emerald-500 fill-current"
                            ></polygon>
                        </svg>

                        <p class="text-md font-light mt-2 text-white">
                            Since our founding in , we have quickly become a trusted provider of compassionate caregiving services. Our dedicated team offers personalized care for children, pregnant women, the elderly, and patients, whether at home or in the hospital. With a focus on comfort, safety, and well-being, we have earned the trust of families across various communities. Our mission is to provide reliable, heartfelt support that truly makes a difference in the lives of those we serve.


                        </p>

                    </blockquote>
                </div>
            </div>

            <div class="w-full md:w-6/12 px-4">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 px-4">
                        <div class="relative flex flex-col mt-4">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                >
                                    <i class="far fa-address-card"></i>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold">
                                    PatientCare
                                </h6>
                                <p class="mb-4 text-slate-500">
                                    We offer caring support for patients in the hospital, helping them recover with comfort and personal attention.
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col min-w-0">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                >
                                    <i class="	fas fa-mobile-alt"></i>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold">
                                    ElderCare
                                </h6>
                                <p class="mb-4 text-slate-500">
                                    We offer caring support for the elderly, ensuring comfort and personal attention at home or in the hospital.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 px-4">
                        <div class="relative flex flex-col min-w-0 mt-4">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                >
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold">
                                    ChildCare
                                </h6>
                                <p class="mb-4 text-slate-500">
                                    We provide caring support for children, ensuring they receive the attention and comfort they need, whether at home or in the hospital.
                                </p>
                            </div>
                        </div>
                        <div class="relative flex flex-col min-w-0">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                >
                                    <i class="	far fa-window-restore"></i>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold">
                                    PregnantWomenCare
                                </h6>
                                <p class="mb-4 text-slate-500">
                                    We offer caring support for pregnant women, ensuring comfort, safety, and personal attention at  hospital.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a
                :href="route('portfolio')"
                class="font-bold text-blueGray-900 hover:text-red-500 text-xl ease-linear transition-all duration-150"
            >
                See more
                <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
            </a>
    </div>
</template>
