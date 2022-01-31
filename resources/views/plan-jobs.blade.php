@extends('base')

@section('main-content')
    <div class="container">
        <h2 class="main-content__title">
            {!! $title !!}
        </h2>
        <div class="main-part">
	        <table class="table" border="1"cellspacing="0">
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
			   	</tr>
			   	@foreach($objects as $obj)
			    <tr>
			    	<td>
			    		{{$obj->fashion}}
			    	</td>
			    	<td>
			    		{{$obj->size}}
			    	</td>
			    	<td>
			    		{{$obj->amount}}
			    	</td>
			    </tr>
	            @endforeach
	        </table>    
        </div>
        
    </div>
@endsection