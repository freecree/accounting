@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
<div class="container-admin">
    <h2 class="main-content__title">
        {{$obj->formTitle}}
    </h2>
    <form action="{{ route("$obj->routeToList")}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="form-main">
		    <div class="form-block">
		        <p>{{$obj->formField}}<br>
			   		<input type="text" name="name" size="40">
			  	</p>
		    </div>    
		</div> 
		<button class="button add-but" type="submit">
            Додати
        </button>
        <a class="button cancle-but" href="{{ route("$obj->routeToList")}}">
            Відміна
        </a>    
	</form>	 
</div>
@endsection	