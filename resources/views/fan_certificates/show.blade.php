<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ファン証明書の表示') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="fan_name" class="leading-7 text-sm text-gray-600">ファンネーム</label>
                        {{ $certificate->fan_name }}
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="likes" class="leading-7 text-sm text-gray-600">推しの好きなところ</label>
                        {{ $certificate->likes }}
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="support_comment" class="leading-7 text-sm text-gray-600">応援コメント</label>
                        {{ $certificate->support_comment }}
                    </div>
                </div>
                <div class="p-2 w-full justify-center">
                    <a href="{{ route('fan-certificates.edit', [ 'id' => $certificate->id ]) }}">
                        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">ファン証明書を更新する</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
