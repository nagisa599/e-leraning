<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('テスト結果') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">テスト結果</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">結果を見ることができます</p>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">問題番号</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">回答</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細へ</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i=1;
                                $point=0;
                                @endphp
                                @foreach($results as $result)
                                @php
                                if($result->answer=='正解'){
                                    $point=$point+4;
                                }
                                @endphp
                                
                            
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> {{$i}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$result->answer}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"> <a class ="text-blue-500s" href="{{route('English.detailshow',['id'=>$result->questionnumber])}}">詳細をみる</a></td>
                                 
                                    
                                </tr>
                                @php
                                $i=$i+1;
                                @endphp
                                @endforeach
                                @if($i>20)
                                <tr>

                                    <td class="border-t-2 border-gray-200 px-4 py-3">あなたの得点</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$point}}</td>
                      
                                <tr>
                                @endif
                                </tbody>
                            </table>
                            </div>
                            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                            @if($i>20)
                            <form method="post" action="{{route('English.finish')}}">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="point" value="<?php echo $point ?>">
                            <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">終了する</button>
                            @else
                        
                            <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg "onclick="location.href='{{ route('English.tangofinish') }}' ">終了する</button>
                            @endif

                            </div>
                        </div>
                        </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
