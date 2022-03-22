@extends('layouts.Admin.master')


@section('admincontent')
<div class="col-lg-12 col-md-12">
    <div class="card p-0">
        <div class="card-header text-primary border-top-0 border-left-0 border-right-0">
            <h3 class="card-title text-primary d-inline">
                Search By Application
            </h3>
            <span class="float-right">
                <i class="fa fa-chevron-up clickable"></i>
            </span>
        </div>

        <div class="row" id="table-hover-animation">
            <div class="col-12">
                <div class="card">



                    <div class="container">
                        <div class="table-responsive">
                            <table id="example" class="table table-hover-animation table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>Application Name</th>
                                        <th>Application Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $key => $row)

                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>
                                              {{$row['title']}}
                                            </td>
                                            <td>
                                              {{$row['code']}}
                                                </td>

                                            <td>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#editTimeKeeper"><i
                                                        data-feather='edit'></i></a>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#copyTimeKeeper"><i
                                                        data-feather='save'></i></a>


                                                <a href="#"><i
                                                        data-feather='trash-2'></i></a>
                                            </td>
                                        </tr>
                                        @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>






@endsection
