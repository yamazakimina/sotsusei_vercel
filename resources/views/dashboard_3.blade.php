<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ファン登録') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <form method="POST" action="{{ route('issue_membership_card', $vtuber->id) }}">
                @csrf
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="fanname" class="leading-7 text-sm text-gray-600">ファンネーム</label>
                        <input type="text" id="fanname" name="fanname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="favorite_part" class="leading-7 text-sm text-gray-600">推しの好きなところ</label>
                        <input type="text" id="favorite_part" name="favorite_part" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="support_comment" class="leading-7 text-sm text-gray-600">応援コメント</label>
                        <textarea id="support_comment" name="support_comment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">会員証を発行する</button>
                </div>
            </form>            
            </div>
        </div>
    </div>
</x-app-layout>
