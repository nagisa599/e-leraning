<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                英語選択
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">英語テスト</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                        </div>
                        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                
                        </p>
                        </div>
                        <div class="flex flex-wrap -m-4">
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{asset('storage/wordtest.jpg')}}" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">基礎固め</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">単語</h2>
                            <p class="leading-relaxed text-base">共通テスト頻出単語から出題されます。基礎から始めたい人は、こちらのコースから始めましょう。</p>
                      
                            <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('English.question',['category'=>1]) }}' ">スタート</button>
                            
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{asset('storage/tyoubun.jpg')}}" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">応用力</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">長文</h2>
                            <p class="leading-relaxed text-base">共通テストの実際の問題を解くことができます。約１００種類の問題から出題されます</p>
                        
                            <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('English.question',['category'=>4]) }}' ">スタート</button>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{asset('storage/test.jpg')}}" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">実践力</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">テスト</h2>
                            <p class="leading-relaxed text-base">共通テストの実践形式で問題を解くことができます。こちらの結果は、ランキングに使用します。</p>
                    
                            <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('English.question',['category'=>5]) }}' ">スタート</button>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">基礎固め</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">文法</h2>
                            <p class="leading-relaxed text-base">今後実装予定のため未実装</p>
                            <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">封鎖中</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                </div>>
            </div> 
        </div>
    </div>
</x-app-layout>