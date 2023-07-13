<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                
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
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">単語テスト</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                        </div>
                        
                     
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
		}



		form {
			width: 80%;
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #ccc;
		}

		

		

		input[type="submit"] {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #666;
		}
	</style>

     
	<body>


		<form >
				@csrf
			<p>次の文章をよみ、次の問題を解け</p>
            <p>{{$question->contents}}
			<br/>
			<br/>
            
          
                         @php
                          
                           
                          
                            $selection1 = $question->selection1;
                            $selection2= $question->selection2;
                            $selection3 =$question->selection3;
                            $selection4 = $question->selection4;
                            $answer = $question->answer;
                            $content = $question->content;
							$id = $question->id;
						
							
                      
                        @endphp
                        
       
            
        	<p style="color:black">問題  
    </br>{{$question->content}}</p>
		

        	<input type="radio" id ="choice1" name="selection" value="<?php echo $selection1;?>" >
        	<label for="choice1"><?php echo $selection1;?></label>
			<br/>

        	<input type="radio" id ="choice2" name="selection" value="<?php echo $selection2;?>" >
        	<label for="choice2"><?php echo $selection2;?></label>
			<br/>


        	<input type="radio" id ="choice3" name="selection" value="<?php echo $selection3;?>" >
        	<label for="choice3"><?php echo $selection3;?></label>
			<br/>

        	<input type="radio" id ="choice4" name="selection" value="<?php echo $selection4;?>" >
        	<label for="choice4"><?php echo $selection4;?></label>
			<br/>
            <br/>
            @if($rs=='不正解')
            <p><font color="blue">x{{$rs}}</p>
          
            @else
                <p><font color="red">〇{{$rs}}</p>
            
            @endif
            <p><font color="red">答え {{$question->answer}}</font></P>
        	>
			<br/>
          
		
			<button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('Review.question') }}' ">次の問題へ</button>
            <button type="button" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="location.href='{{ route('Review.index') }}' ">復習をやめる</button>
		
			
	</form>
        
	
    	
	</body>
                        </p>
                        </div>
                       
                    </div>
                </section>
                </div>>
            </div> 
        </div>
    </div>
</x-app-layout>