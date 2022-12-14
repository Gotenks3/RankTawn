<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品一覧
        </h2>
    </x-slot>


    <div>
        name
        content
        <form action="{{ route('product.store')}}" method="post">
            @csrf
            <div>
                名前:<input type="text"  name="name">
                商品情報:<input type="text"  name="content">
            </div>
            <button type="submit">
                登録
            </button>
        </form>
    </div>
</x-app-layout>