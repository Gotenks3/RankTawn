<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品一覧
        </h2>
    </x-slot>

<section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">

                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"> <img src="{{ asset('storage/products/' . $product->image1) }}" alt="{{ $product->image1 }}"></div>
                                <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image2) }}" alt="{{ $product->image2 }}"></div>
                                <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image3) }}" alt="{{ $product->image3 }}" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded"></div>
                                <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image4) }}" alt="{{ $product->image4 }}" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded"></div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>

                        <div class="text-center lg:w-2/3 w-full">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $product->name }}</h1>
                            <p class="mb-8 leading-relaxed">{{ $product->content }}</p>
                            <div class="mt-4 mb-24">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ number_format($product->price) }}円(税込)</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->state }}</h2>
                            </div>
                            <div class="flex justify-center">
                                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                                <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
    </section>
</x-app-layout>