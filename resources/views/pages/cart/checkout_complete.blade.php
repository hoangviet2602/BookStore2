@extends('welcome')
@section('content')
<?php
     use Gloudemans\Shoppingcart\Facades\Cart;
    $content =   Cart::content();
?>

<link rel="stylesheet" href="{{asset('public/frontend/css/gio-hang.css')}}">
   
<section class="content my-3">
        <div class="container">
            <div class="cart-page bg-white">
                <div class="row">
                    
                    
                    <!-- giao diện giỏ hàng khi không có item   -->
                    <div class="col-md-8 cart" style="margin-left:170px">
                        <div class="py-3 pl-3">
                            <h1  style="margin-left:150px">ĐẶT HÀNG THÀNH CÔNG</h1>
                            <div class="cart-empty-content w-100 text-center justify-content-center">
                                <img src="{{asset('public/frontend/images/672465.png')}}" alt="shopping-cart-not-product" width="200px">
                                <p>Hệ thống đã ghi nhận đơn hàng của bạn. Vui lòng chờ xét duyệt!</p>
                                <a href="{{URL::to('/trang-chu')}}" class="btn nutmuathem mb-3">Về trang chủ</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- giao diện giỏ hàng khi có hàng  -->
                 
                  
                </div>
                
                <!-- het row  -->
            </div>
            <!-- het cart-page  -->
        </div>
        <!-- het container  -->
    </section>




@endsection