<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style class="text/css">
        .title_deg
        {
            text-align: center;
            font-size : 20px ; 
            font-weight: bold;
            padding-bottom: 20px;
        }
        .table_deg
        {
            border: 2px solid wheat;
            width: 100%;
            margin: auto;
            text-align: center;

        }
        .th_deg{
            background-color: aquamarine;

        }
        .img_size
        {
            width: 200px;
            height: 100px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      
        <div class="main-panel" >
            <div class="content-wrapper">
                <h1 class="title_deg">
                    All Order
                </h1>

                <table class="table _deg">
                    <tr class="th_deg">
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Product Title
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Payment Status
                        </th>
                        <th>
                            Delivery Status
                        </th>
                        <th>
                            Image
                        </th>
                    </tr>
                    @foreach($order as $order)
                    <tr class="">
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}">
                        </td>
                    </tr>
                @endforeach

                </table>
            </div>
            
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>