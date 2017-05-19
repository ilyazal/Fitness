@extends ('layouts.base')
@section('content')
<div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="/uploads/{{(isset($tovar->picture))?$tovar->picture:''}}"  alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                      
										
                                        <h2>{{$tovar->name}}</h2>
                                        <span>
                                            <span>{{$tovar->price}}</span>
                                            <label>Количество:</label>
                                            <input type="text" value="3" />
                                            <a type="button" class="btn btn-fefault cart addCart" id="good-{{$tovar->id}}-{{$tovar->price}}" >
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </a>
                                        </span>
                                        <p><b>Наличие:</b> Есть в наличии </p>
                                        <p><b>Состояние:</b> Новое</p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p>{{$tovar->body}}</p>
                                    
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>

                       
	@endsection					