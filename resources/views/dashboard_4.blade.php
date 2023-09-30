<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vtuber詳細') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-col">
                  <div class="lg:w-4/6 mx-auto">
                    <div class="rounded-lg h-84 overflow-hidden">
                      <img alt="content" class="object-cover object-center h-full w-full" src="https://thumb.ac-illust.com/06/069b3206c2ffd0036329b9c8832e641c_t.jpeg">
                    </div>
                </div>
              </section>
            </div>
        </div>
    </div>
</x-app-layout>
