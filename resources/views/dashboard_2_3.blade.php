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
                    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="/images/v3.png">
                      <div class="text-center lg:w-2/3 w-full">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">バタフライポップ</h1>
                        <p class="mb-8 leading-relaxed">みんな、こんにちは、バタフライポップだよ！歌が好きで、歌ってみたを中心に活動しているVtuberなんだ。名前の通り、バタフライのように自由に音楽の世界を飛び回りたいな。私の歌声は、低音から高音まで、伸びやかで表現豊かなんだ。どんな曲も、心から感じて、それを声で表現することが私の一番の楽しみ。音楽ってすごくパワフルで、みんなに感動や癒しを届けたいんだ。歌の他にも、色んな話題で雑談も楽しんでるよ。みんなのリクエストや質問にも答えながら、一緒に楽しい時間を作りたいな。配信中はいつも笑顔で、みんなとの交流を大切にしているよ。バタフライポップの放送に遊びに来てくれたら嬉しいな。一緒に歌ったり、おしゃべりしたり、音楽の魔法で心を繋げよう！それでは、次の放送で会おうね！</p>
                        <div class="flex justify-center">
                          <a href="{{ url('/dashboard_3') }}"><button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">ファンになる</button></a>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</x-app-layout>
