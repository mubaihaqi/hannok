<x-layout>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'My Cart' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/cart' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 = '' }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = '' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 = 'hidden' }}</x-slot:gaketok2>
                </x-navigate>
            </div>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl" x-data="{ cart: {{ $cartItems }} }">
                    @if ($cartItems->isEmpty())
                        <div class="flex justify-center items-center mt-12">
                            <div id="emptycart-lottie" class="w-80 h-80"></div>
                        </div>
                    @else
                        <div class="space-y-6">
                            @foreach ($cartItems as $item)
                                <div class="inline-flex w-full justify-start gap-8 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6"
                                    x-data="{
                                        quantity: @json($item->quantity),
                                        hargaSatuan: @json($item->book->harga_buku),
                                        updateQty(amount) {
                                            this.quantity += amount;
                                            if (this.quantity < 1) this.quantity = 1;
                                            this.sendUpdate();
                                        },
                                        sendUpdate() {
                                            $.ajax({
                                                url: '/cart/update/{{ $item->id }}',
                                                method: 'POST',
                                                data: {
                                                    _token: '{{ csrf_token() }}',
                                                    quantity: this.quantity
                                                },
                                                success: function(response) {
                                                    // console.log('Updated!', response);
                                                },
                                                error: function(error) {
                                                    console.error('Error updating quantity', error);
                                                }
                                            });
                                        },
                                        hargaAkhir() {
                                            return (this.hargaSatuan * this.quantity).toLocaleString('id-ID');
                                        }
                                    }">
                                    <div class="flex items-center mb-4 h-auto w-auto">
                                        <input id="default-checkbox" type="checkbox" value=""
                                            class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>

                                    <div
                                        class="space-y-4 w-full items-center justify-between md:gap-6 md:space-y-0 inline-flex">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <img class="h-20 w-20 dark:hidden"
                                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                                alt="imac image" />
                                        </a>

                                        {{-- Buttons --}}
                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <div class="flex items-center">
                                                <!-- Button Decrement -->
                                                <button type="button" @click="updateQty(-1)"
                                                    class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200">
                                                    <svg class="h-2.5 w-2.5 text-gray-900"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1" d="M1 1h16" />
                                                    </svg>
                                                </button>

                                                <!-- Input Quantity -->
                                                <input type="text" x-model="quantity" readonly
                                                    class="w-10 text-center border-0 bg-transparent font-medium text-gray-900 focus:outline-none" />

                                                <!-- Button Increment -->
                                                <button type="button" @click="updateQty(1)"
                                                    class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200">
                                                    <svg class="h-2.5 w-2.5 text-gray-900"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1"
                                                            d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- Harga Akhir -->
                                            <div class="text-end md:order-4 md:w-32">
                                                <p class="text-base font-bold text-gray-900">
                                                    Rp<span x-text="hargaAkhir()"></span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <a href="#"
                                                class="text-base font-medium text-gray-900 hover:underline">
                                                {{ $item->book->title }}
                                            </a>

                                            <div class="flex items-center gap-4">
                                                {{-- Add to Favorite Button --}}
                                                <form action="{{ route('favorite.add', $item->book->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="button"
                                                        onclick="addToFavorite({{ $item->book->id }})"
                                                        class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900  hover:bg-slate-200 py-0.5 px-2 rounded-md border border-slate-300">
                                                        <svg class="me-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                                        </svg>
                                                        Add to Favorites
                                                    </button>
                                                </form>

                                                <button type="button" onclick="removeFromCart({{ $item->id }})"
                                                    class="inline-flex items-center text-sm font-medium text-red-600 hover:bg-red-200 py-0.5 px-2 rounded-md border border-red-300">
                                                    <svg class="me-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18 17.94 6M18 18 6.06 6" />
                                                    </svg>
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>


                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original
                                        price
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$7,592.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$8,191.00</dd>
                            </dl>
                        </div>

                        <a href="#"
                            class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed
                            to Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="#" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Do you
                                    have a
                                    voucher or gift card? </label>
                                <input type="text" id="voucher"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="" required />
                            </div>
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Apply
                                Code</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
