@extends('base')

@section('main-content')
    <div class="container">
        <h2 class="main-content__title">
            {{$name}}
        </h2>
        <div class="main-part">
	        <table class="table " border="1"cellspacing="0">
			   <tr>
			   		<th>
			   			Фасон
			   		</th>
			   		<th>
			   			Розмір
			   		</th>
			   		<th>
			   			Кількість 
			   		</th>
			   		<th>
			   			День
			   		</th>
			   	</tr>
			   	@foreach($tasks as $task)
			    <tr>
			    	<td>
			    		{{$task->fashion}}
			    	</td>
			    	<td>
			    		{{$task->size}}
			    	</td>
			    	<td>
			    		{{$task->amount}}
			    	</td>
			    	<td>
			    		{{$task->date}}
			    	</td>
			    </tr>
	            @endforeach
	        </table>    
        </div>
        
    </div>
@endsection