@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
<div class="container-admin">
    <h2 class="main-content__title">
        Форма додавання робітника
    </h2>
    <form action="{{ route('add-worker')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="form-main">
		    <div class="form-block">
		        <!-- <h3 class="form__title">
		            Введіть прізвище ім'я по батькові
		        </h3> -->
		        <p>Введіть прізвище ім'я по батькові<br>
			   		<input type="text" name="name" size="40">
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
    