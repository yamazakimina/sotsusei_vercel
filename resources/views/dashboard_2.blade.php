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
                      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="/images/v1.png">
                      <div class="text-center lg:w-2/3 w-full">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">鬼屋つばき</h1>
                        <p class="mb-8 leading-relaxed">みんな、こんにちは、鬼屋つばきだよ！FPSゲーム好きのVtuberだよ！ゲームは得意な方だから、いっしょに爽快な戦闘を楽しんでくれるとうれしいな。私の配信って感じだと、ほぼ毎回ゲーム実況だよ！FPSは特に得意だから、私の腕前、見てくれると思います。でもね、プレイだけじゃなくて、チャットも大好き！リアルタイムでみんなとおしゃべりするのが楽しいの。質問あったら気軽に聞いてね。笑顔がトレードマークで、みんなとの交流が一番の楽しみだよ。ゲームで共に戦いながら、みんなとワイワイ楽しい時間を過ごせたら最高だよね。私の世界に遊びに来てくれたら嬉しいな！それじゃ、配信で会おうね〜！</p>
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
