<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-4">
                        @foreach ($products as $product)
                        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <div class="flex flex-row items-center">
                                    <a href="#" class="shrink-0">
                                        <img class="h-20 w-20 dark:hidden" src="{{ $product['image'] }}" alt="image" />
                                        <img class="hidden h-20 w-20 dark:block" src="{{ $product['image'] }}" alt="image" />
                                    </a>
                                    <div class="w-full min-w-0 flex-1 space-y-4 ml-4">
                                        <a href="#" class="text-base font-medium text-gray-900 hover:underline dark:text-white">
                                            {{ $product['title'] }}
                                        </a>
                                        <div class="flex items-center gap-4">
                                            <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                                <svg class="me-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 17.94 6M18 18 6.06 6" />
                                                </svg>
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                    <div class="flex items-center quantityModifier">
                                        <button type="button" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 dark:border-gray-600 dark:bg-gray-700 minus" value="{{ $product['price'] }}">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" fill="none" viewBox="0 0 18 2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 dark:text-white quantity" value="1" readonly/>
                                        <button type="button" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 dark:border-gray-600 dark:bg-gray-700 plus" value="{{ $product['price'] }}">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" fill="none" viewBox="0 0 18 18" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-end md:w-32 ml-5">
                                        <p class="text-base font-bold text-gray-900 dark:text-white">${{ $product['price'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="w-full lg:max-w-sm xl:max-w-md lg:sticky lg:top-24 h-fit z-10">
                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 sticky top-24 z-10">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white" id="total">$8,191.00</dd>
                            </dl>
                        </div>
                        <br>
                        <a href="#" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Proceed to Checkout
                        </a>
                    </div>
                </div>

            </div> </div>
    </div>

    @vite(['resources/js/cart.js'])
</x-app-layout>