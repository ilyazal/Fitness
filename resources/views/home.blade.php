@extends('layouts.base')

@section('content')
<div >
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Кабинет пользователя</div>

                <div class="panel-body">
                   @foreach($cat as $one)
				   <div class ="cat">
				   <a href ="{{asset('/cat/'.$one->id)}}">
					   {{$one->name}}
					   </a>
							@endforeach	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
