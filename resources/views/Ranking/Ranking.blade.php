<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ランキング') }}
        </h2>
    </x-slot>

    
    <!-- ランキング表の他の行を追加 -->
  </table>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <title>ランキング表</title>
  <style>
   
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .crown-gold::before {
      content: "\1F451";
      font-size: 16px;
      margin-right: 5px;
      color: gold;
    }

    .crown-silver::before {
      content: "\1F451";
      font-size: 16px;
      margin-right: 5px;
      color: silver;
    }

    .crown-bronze::before {
      content: "\1F451";
      font-size: 16px;
      margin-right: 5px;
      color: #CD7F32;
    }
  </style>
</head>
<body>
  <h1>ランキング表</h1>
  <table>
    <tr>
      <th>順位</th>
      <th>ユーザ名</th>
      <th>得点</th>
    </tr>
    @php
    $i=0;
    @endphp
    @foreach($rankings as $ranking)
    @php
    $i=$i+1;
    @endphp
    <tr>
      <td><span class="crown-gold"></span>{{$i}}</td>
      <td>{{$ranking->name}}</td>
      <td>{{$ranking->point}}</td>
    </tr>
    @endforeach
    <tr1>
     
   
      <td>あなたの順位</td1>
      <td>{{$myranking+1}}位/{{$allranking}}位</td>
    </tr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
