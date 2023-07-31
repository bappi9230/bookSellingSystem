@extends('dashboard')
@section('admin')

    <div class="content">

    <!-- Start Content-->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">All Book List</h4>

                </div>
            </div>
        </div> <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>

                                </thead>

                                <tbody>
                                @foreach($books as $key=>$book)

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{$book->price}}</td>
                                        <td>
                                            <a href="" class="btn btn-info sm" title="Edit" ><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger sm" title="Delete" id="delete" ><i class="fa fa-trash" ></i></a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
    </div> <!-- container -->

</div> <!-- content -->

@endsection