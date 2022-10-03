<x-guest-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">1</span>
                        </div>

                        <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">2</span>
                        </div>

                        <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">3</span>
                        </div>

                        <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">4</span>
                        </div>
                    </div>

                    <div class="flex -mx-2 mb-4">
                        <template x-for="i in 4">
                            <div class="flex-1 px-2">
                                <button x-on:click="image = i" :class="{ 'ring-2  ring-blue-800 dark:ring-blue-600 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                    <span x-text="i" class="text-2xl"></span>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="mb-2 leading-tight tracking-tight font-bold text-xl font-semibold  text-gray-900 dark:text-white text-2xl md:text-3xl">Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
                <p class="text-gray-500 dark:text-gray-300 text-sm">By <a href="#" class="text-blue-700 hover:text-blue-800 hover:underline">ABC Company</a></p>
                <div class="flex  items-center  my-4">
                    <div>
                        <div class="rounded-lg bg-gray-100 dark:bg-gray-800  flex py-2 px-3">
                            <span class="text-blue-400 mr-1 mt-1">$</span>
                            <span class="font-bold text-blue-600 text-3xl">25</span>
                        </div>
                    </div>
                    <div class="flex-1 mx-4">
                        <p class="text-green-500 text-xl font-semibold">Save 12%</p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-400">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vitae exercitationem porro saepe ea harum corrupti vero id laudantium enim, libero blanditiis expedita cupiditate a est.</p>
                <div class="flex py-4 ">
                    <button type="button" class="h-14 px-4 py-2 font-semibold   text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add to Cart
                    </button>
                    <div class="mx-6 text-gray-500 dark:text-gray-400 whitespace-nowrap flex items-center">
                        <button>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="inline-flex w-6 h-6 text-red-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </button>
                        <div >
                            <label for="product-qty" class="   block text-xs uppercase text-gray-400 tracking-wide font-semibold"></label>
                            <input
                                id="product-qty"
                                type="text"
                                name="qty"
                                value="2"
                                maxlength="4"
                                class="w-16 text-center rounded-lg text-gray-900 bg-gray-100 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white outline-none border-none focus:ring-0"
                            />
                        </div>

                        <button>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="inline-flex w-6 h-6 text-green-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
