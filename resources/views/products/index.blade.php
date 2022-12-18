<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品一覧
        </h2>
    </x-slot>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product )
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <div class=" p-2 md:p-4">
                        <a href="{{ route('product.show',['product' => $product->id]) }}">

                            <div class="border rounded-md p-2 md:p-4">
                                <img src="{{ asset('storage/products/' . $product->image1 ?? '') }}" alt="{{ $product->image1 }}">
                  
                                <div class="text-gray-700">{{ $product->name }}</div>
                            </div>
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ number_format($product->price) }}円(税込)</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->state }}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
</x-app-layout>