@extends('dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Admin</h4>

                </div>
            </div>
        </div> <!-- end page title -->
        <div class="row">
            <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Book</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th><button class="btn btn-primary" onclick="btnAdd()">+</button></th>
                                    </tr>
                                </thead>
                                <tbody id="Tbody">
                                    <tr id="Trow" class="d-none">
                                        <td>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </td>
                                        <td>
                                            <select name="book_id" onchange="calc(this)" class="form-select" id="book_id">
                                                <option selected disabled >Select Book </option>
                                                @foreach($books as $book)
                                                    <option value="{{ $book->id }}">{{$book->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="price" id="bookPrice" class="form-control">
                                        </td>
                                        <td>
                                        <input type="number" name="qty" id="bookQuantity" onchange="Quantity(this)" min="1" value="1" class="form-control">
                                        </td>
                                        <td>
                                            <button type="button" id="add" title="Add New Row" class="btn btn-danger" onclick="btnDelete(this)">-</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end settings content-->

                
                        </div>
                        <div class="col-4" style="margin-left:50%">
                            <div class="input-group mb-3">
                               <h1>Total= </h1> <input style="border: 0px solid;" class="h3 me-2" id="total"></input>
                            </div>
                        </div>

                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->
    </div> <!-- container -->

</div> <!-- content -->


<script type="text/javascript">
    $(document).ready(function(){

    //    $('select[name="book_id"]').on('change', function(){
    //          var book_id = $(this).val();
    //         //  var index = $(this).parent().parent().index();
    //          alert(book_id);
    //         if(book_id) {
    //             $.ajax({
    //                 url: "/price/"+book_id,
    //                 type:"GET",
    //                 dataType:"json",
    //                 success:function(data) {
    //                     var index = $(this).parent().parent().index();
    //                     document.getElementById("bookPrice").value = data.price;
    //                 },
    //             });
    //         }
    //     });

        ///Price Update
        // $('#bookQuantity').on('change', function(){
        //      var book_id = $('#book_id').val();
        //      var bookQuantity = $('#bookQuantity').val();
        //     if(bookQuantity) {
        //         $.ajax({
        //             url: "/price/"+book_id,
        //             type:"GET",
        //             dataType:"json",
        //             success:function(data) {
        //                 var price = data.price *  bookQuantity;
        //                 document.getElementById("bookPrice").value = price;
        //             },
        //         });
        //     }
        // });

    });

</script>

<script>
    function btnAdd(){
         var row = $('#Trow').clone().appendTo('#Tbody');
            $(row).find("input").val('');
            $(row).removeClass('d-none');
        
          
   }
   function btnDelete(row){
        $(row).parent().parent().remove();
   }

   function calc(v){
        var index = $(v).parent().parent().index();
        var book_id = document.getElementsByName('book_id')[index].value;
        if(book_id) {
            $.ajax({
                url: "/price/"+book_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    document.getElementsByName('price')[index].value = data.price;
                },
            });
        }
        
   }

   function Quantity(v){
        var index = $(v).parent().parent().index();
        var price
        var book_id = document.getElementsByName('book_id')[index].value;
        var qty = document.getElementsByName('qty')[index].value;

        if(book_id) {
            $.ajax({
                url: "/price/"+book_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    var amount = qty * data.price;
                    document.getElementsByName('price')[index].value = amount;
                    GetTotal();

                },
            });
        }
        document.getElementsByName('price')[index].value = amount;

   }


  function GetTotal(){
        var sum = 0;
        var price = document.getElementsByName("price");
        for(var i = 0; i < price.length; i++){

            var total = price[i].value;
            sum = +(sum)+ +(total);
        }
        document.getElementById("total").value = sum;
  }


</script>


@endsection
