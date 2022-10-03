<x-guest-layout>
    <div class="py-12 p-2 sm:px-2 md:px-12 lg:px-48">
        <div class="w-full flex  flex-wrap justify-between items-center pt-8">
            <div class="w-full flex flex-row flex-wrap justify-end items-center">
                <button
                    type="submit"
                    class="justify-self-end w-fit py-3 px-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    View Invoice
                </button>
            </div>
        </div>
        <div class="w-full flex flex-col items-center space-y-1.5">
                <div class="text-green-700 dark:text-green-600" >
                    <svg  class="w-12 h-12"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                </div>
{{--                <div class="text-red-800 " >--}}
{{--                    <svg class="w-12 h-12"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>   --}}
{{--                </div>--}}
                <h2
                    class="mb-4 text-2xl md:text-3xl  tracking-tight font-extrabold text-center lg:text-left text-blue-800 dark:text-blue-600"
                >
                    We received your order!
                </h2>
                <p class="font-light px-2 text-base text-gray-400 dark:text-gray-300 text-center">
                    Your order #123456789 is completed and ready to ship
                </p>

        </div>
        <hr class="w-full my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
        <div class="w-full flex items-center">
            <div class="flex flex-col max-w-sm ">
                <h4 class="font-bold text-md  sm:text-2xl mb-3 text-gray-500 dark:text-gray-400 ">Shipping Information</h4>
                <p class="font-light px-2  text-gray-400 dark:text-gray-300 sm:text-xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                </p>
            </div>
        </div>
        <hr class="w-full my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flow-root mb-6">
            <h4 class="font-bold text-md mb-3 text-gray-700 dark:text-white ">Order Items</h4>
            <ul role="list" class="">
                <li class="flex my-2 py-6 p-2  sm:px-4 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="h-28 w-28 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img
                            src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div
                                class="flex justify-between text-base font-medium text-gray-800 dark:text-white">
                                <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Salmon</p>
                        </div>
                        <div class="flex flex-1 items-center justify-between text-sm">
                            <p class="text-gray-500 dark:text-gray-400">Qty 1</p>
                            <p class="text-base font-medium text-gray-800 dark:text-white">Total <span>$90.00</span></p>
                        </div>
                    </div>
                </li>
                <li class="flex my-2 py-6 p-2  sm:px-4 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="h-28 w-28 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img
                            src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div
                                class="flex justify-between text-base font-medium text-gray-800 dark:text-white">
                                <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Salmon</p>
                        </div>
                        <div class="flex flex-1 items-center justify-between text-sm">
                            <p class="text-gray-500 dark:text-gray-400">Qty 1</p>
                            <p class="text-base font-medium text-gray-800 dark:text-white">Total <span>$90.00</span></p>
                        </div>
                    </div>
                </li>
                <li class="flex my-2 py-6 p-2  sm:px-4 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="h-28 w-28 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img
                            src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div
                                class="flex justify-between text-base font-medium text-gray-800 dark:text-white">
                                <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Salmon</p>
                        </div>
                        <div class="flex flex-1 items-center justify-between text-sm">
                            <p class="text-gray-500 dark:text-gray-400">Qty 1</p>
                            <p class="text-base font-medium text-gray-800 dark:text-white">Total <span>$90.00</span></p>
                        </div>
                    </div>
                </li>
                <li class="flex my-2 py-6 p-2  sm:px-4 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="h-28 w-28 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img
                            src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div
                                class="flex justify-between text-base font-medium text-gray-800 dark:text-white">
                                <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Salmon</p>
                        </div>
                        <div class="flex flex-1 items-center justify-between text-sm">
                            <p class="text-gray-500 dark:text-gray-400">Qty 1</p>
                            <p class="text-base font-medium text-gray-800 dark:text-white">Total <span>$90.00</span></p>
                        </div>
                    </div>
                </li>
                <li class="flex my-2 py-6 p-2  sm:px-4 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="h-28 w-28 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img
                            src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div
                                class="flex justify-between text-base font-medium text-gray-800 dark:text-white">
                                <h3>
                                    <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Salmon</p>
                        </div>
                        <div class="flex flex-1 items-center justify-between text-sm">
                            <p class="text-gray-500 dark:text-gray-400">Qty 1</p>
                            <p class="text-base font-medium text-gray-800 dark:text-white">Total <span>$90.00</span></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <hr class="w-full my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
        <div class="w-full flex justify-between text-xl font-medium text-gray-800 dark:text-white">
            <p>Subtotal</p>
            <p>$262.00</p>
        </div>
    </div>


</x-guest-layout>
