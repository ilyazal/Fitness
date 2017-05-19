@extends ('layouts.base')
@section('content')
<div class="features_items"><!--features_items-->
                            <h2 class="title text-center">{{$category->name}}</h2>
							@foreach($category->tovars()->get() as $one)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/uploads/{{(isset($one->picture))?$one->picture:''}}" />
                                            <h2>{{$one->price}}</h2>
											<a href ="{{asset ('product/'.$one->id)}}" >
                                            <p>{{$one->name}}</p>
											</a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!--features_items-->

                       
	@endsection					