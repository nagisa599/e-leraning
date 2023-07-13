<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('復習') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <head>
  <style>
    /* CSS スタイル */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f1f1f1;
    }

    .congratulations {
      font-size: 48px;
      color: #ff4500;
      font-weight: bold;
      text-transform: uppercase;
      text-align: center;
      animation: blink 1s infinite;
    }

    @keyframes blink {
      0% {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }
  </style>
</head>
<body>
  <div class="congratulations">復習はすべて終わり！！</div>
  <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('dashboard') }}' ">トップに戻る</button>

  
</body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
