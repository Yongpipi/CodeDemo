<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px; 
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        label
        {
            display: inline-block !important;;
            width: 200px;

        }

        .div_design{
            padding-bottom: 10px;
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
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="div_center">
                    <h1 class="font_size" >Add product</h1>


                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf        

                <div class="div_design">    
                    <label >Product Title :</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                </div>

                <div class="div_design">
                    <label >Product Description :</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
                </div>

                <div class="div_design">
                    <label >Product Price :</label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
                </div>

                <div class="div_design">
                    <label >Discount Price :</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="Write a discount" required="" value="{{$product->discount_price}}">
                </div>  

                <div class="div_design">
                    <label >Product Quantity :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="" value="{{$product->quantity}}">
                </div>

                <div class="div_design">
                    <label >Product Category :</label>
                    <select class="text_color" name="category" required="" >
                        <option value="{{$product->category}}" selected="" >{{$product->category}}</option>

                    
                    </select>

                </div>  
                <div class="div_design">    
                    <label >Product Image :</label>
                    <input type="file" name="image" required="">
                </div>
                
                <div class="div_design">    
                    <input type="submit" value="Add Product" class="btn btn-primary">
                </div>
            </form>
                </div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>