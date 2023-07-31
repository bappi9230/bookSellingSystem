@extends('dashboard')
@section('admin')

    <div class="content">

    <!-- Start Content-->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Book</h4>

                </div>
            </div>
        </div> <!-- end page title -->
        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <!-- end timeline content-->
                        <div class="tab-pane" id="settings">
                            <form method="post" action="{{ route('store-book') }}">
                                @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Book Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        @error('name')
                                            <span style="color: red;">{{$message}}</span>
                                        @enderror 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control"   >
                                        </div>
                                        @error('price')
                                            <span style="color: red;">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div> <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->


                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->
    </div> <!-- container -->

</div> <!-- content -->

@endsection