@extends('layouts.admin')
@section('title',$pageTitle)
@section('content')
@include('admin.template.breadcrum',['title'=>$pageTitle])

    <div class="section-title mb-b-20"><a href="{{route('admin.company_form')}}" class="btn btn-outline-primary float-right">Add Company</a>

    </div>

<div class="clearfix"></div>
<div class="mg-t-50"></div>
<div class="row">

    <div class="col-12">
        <div class="card">


            <div class="card-body">

            <h4 class="header-title">{{$companies->count()??null}} Companies</h4>
                <p class="text-muted font-13 mb-4">
                </p>

                <div class="table-responsive pr-3">
                    <table id="datatable1" class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th> ID </th>
                                <th>Company logo</th>

                                <th>Company Name</th>
                                <th>Company Email</th>
                                <th>Company Website</th>
                                <th >Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($companies as $company)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>  <img src="{{asset($company->logo)??null}}" alt="" style="width:40px; height:30px">
                                </td>
                                <td>{{$company->name??null}}</td>
                                <td>{{$company->email??null}}</td>
                                <td>{{$company->url??null}}</td>


                                <td>
                                    <a href="{{route('admin.company_form',$company->slug)}}" > <button type="button" class="btn btn-info">Edit</button>

                                    </a>
                                    &nbsp;
                                    <a onclick="return confirm('are you sure to delete');"  href="{{route('admin.delete_company',$company->slug)}}" > <button type="button" class="btn btn-danger">Delete</button>
</a>
                                </td>

                                </tr>
                            @empty

                            @endforelse



                        </tbody>
                    </table>
                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

@endsection
@push('custom_script')
@endpush
