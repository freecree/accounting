@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
<div class="container-admin">
    <h2 class="main-content__title">
        Cтворення задачі для {{$worker->name}}
    </h2>
    

    <form action="{{ route('add-worker-task', ['id' => $worker->id])}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="form-main">

			<div class="form-block">
				<p>Модель</p>
				@foreach($fashions as $fashion )
	                <div>
	                    <p>
	                        <input name="fashion_id" type="radio" value="{{$fashion->id}}"> {{$fashion->name}}
	                    </p>
	                </div>
	            @endforeach
			</div>
			<div class="form-block">
				<p>Розмір</p>
				@foreach($sizes as $size )
	                <div>
	                    <p>
	                        <input name="size_id" type="radio" value="{{$size->id}}"> {{$size->name}}
	                    </p>
	                </div>
	            @endforeach
			</div> 
			<div class="form-block">
		        <!-- <h3 class="form__title">
		            Введіть прізвище ім'я по батькові
		        </h3> -->
		        		        
			  	<p>Кількість<br>
			   		<input type="text" name="amount" size="40">
			  	</p>
			  	<p>Дата<br>
			   		<input type="text" name="date" size="40">
			  	</p>
			 </div>  
		</div> 
		

		<button class="button add-but" type="submit">
            Додати
        </button>
        <a class="button cancle-but" href="{{ route('admin-workers')}}">
            Відміна
        </a>    
	</form>	 
</div>
@endsection	