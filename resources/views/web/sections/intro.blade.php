<section class="mt-6">
    <x-container>
        <div class=" bg-gray-200 rounded-3xl py-6 px-4">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                <div class="">
                    <div class="mb-12">
                        <h1 class=" text-5xl pb-4 font-semibold">Онлайн Курсы</h1>
                        <p class=" text-2xl">Все курсы в одном месте.</p>
                    </div>


                    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-100  overflow-hidden rounded-lg md:h-108">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out rounded-2xl px-3 bg-white" data-carousel-item="active">
                                <p class=" text-black text-xl">Мой друг, запомни, что с тобой я только телом. Не отвлекай меня!</p>
                                <img src="{{ asset('storage/img1.webp')}}"
                                    class="absolute block rounded-xl -translate-x-1/2 -translate-y-1/2 top-[55%] left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out rounded-2xl px-3 bg-white" data-carousel-item="active">
                                <p class=" text-black text-xl">Мой друг, запомни, что с тобой я только телом. Не отвлекай меня!</p>
                                <img src="{{ asset('storage/img1.webp')}}"
                                    class="absolute block rounded-xl -translate-x-1/2 -translate-y-1/2 top-[55%] left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out rounded-2xl px-3 bg-white" data-carousel-item="active">
                                <p class=" text-black text-xl">Мой друг, запомни, что с тобой я только телом. Не отвлекай меня!</p>
                                <img src="{{ asset('storage/img1.webp')}}"
                                    class="absolute block rounded-xl -translate-x-1/2 -translate-y-1/2 top-[55%] left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-center text-2xl font-semibold">Чему вы научитесь</h2>
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-2">
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white rounded-xl flex flex-col">
                            <i class="ri-verified-badge-fill text-3xl"></i>
                            <div class="">
                                <h3 class="text-xl font-semibold pb-2">Работать с клиентами</h3>
                                <p class="text-[14px]">разных возрастов, разбирая каждый случай индивидуально.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
