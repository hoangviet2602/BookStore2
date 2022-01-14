@extends('AdminLayout') 
@section('admin_content') 
<!-- <h1>davaddsf</h1> -->
<div class="panel panel-primary">
    <div class="panel-heading"
        style="font-size: 2rem;">
      Danh sách đơn hàng
    </div> 
    <div class="row w3-res-tb"> 
      <form class="col-sm-5 m-b-xs"> 
        <select class="input-sm form-control w-sm inline v-middle"> 
          <option value="0">Tất cả</option> 
          <option value="1">Chờ xác nhận</option> 
          <option value="2">Đang xử lý</option> 
          <option value="3">Đã giao</option> 
        </select> 
        <button class="btn btn-sm btn-default">Apply</button>                 
      </form> 
    </div> 
      
    </div> 
    <div class="table-responsive" > 
      <table class="table table-striped b-t b-light" id="myTable"> 
        <thead> 
          <tr> 
            <th>Tên người đặt</th>
            <th>Số điện thoại</th> 
            <th>Email</th>
            <th>Ngày đặt</th>
            <th>Tổng giá tiền</th> 
            <th>Tình trạng</th> 
            <th>Thao tác</th> 
            <!-- <th style="width:30px;"></th>  -->
          </tr> 
        </thead> 

        <tbody class="user__list"> 
        @foreach($list_orders as $key=>$order)

          <tr> 
            <td>{{$order->fullname}}</td> 
            <td>{{$order->phone}}</td> 
            <td>{{$order->email}}</td> 
            <td>{{$order->timestamp}}</td> 
            <td>{{$order->totalmoney}}</td>
            @if($order->orderstatus == 1)
                <td>Đang xử lý</td> 
            @else
                <td>Chờ xác nhận</td> 
            @endif
            <td>
              <button class="btn btn-warning">
                <a href="{{URL::to('order_detail/'.$order->orderid)}}">Chi tiết</a>
              </button>
              <button class="btn btn-danger">
                <a href="">Xóa</a>
              </button>
            </td>
          </tr> 
          @endforeach
        </tbody> 
      </table> 
    </div> 
</div> 
<script>
    $('#myTable').DataTable();
  </script>
 
@endsection()