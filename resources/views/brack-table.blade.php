@extends('base')

@section('main-content')
    <div class="container">
        <h2 class="main-content__title">
            Зведення відбракованої продукції<br> за місяць за видами браку
        </h2>
        <div class="main-part">
	        <table class="table brack-table" border="1"cellspacing="0">
			   <tr>
			   		<th>
			   			Фасон
			   		</th>
			   		<th>
			   			Розмір
			   		</th>
			   		<th>
			   			Кількість запланованих
			   		</th>
			   		<th>
			   			Кількість зроблених
			   		</th>
			   		<th>
			   			Кількість бракованих
			   		</th>
			   		<th>
			   			Відсоток браку
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
			    		{{$obj->amount_planned}}
			    	</td>
			    	<td>
			    		{{$obj->amount_made}}
			    	</td>
			    	<td>
			    		{{$obj->amount_defected}}
			    	</td>
			    	<td>
			    		{{$obj->defected_percent}}
			    	</td>
			    </tr>
	            @endforeach
	        </table>    
        </div>
        
    </div>
@endsection