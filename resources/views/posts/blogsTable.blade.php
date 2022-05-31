@extends('layouts.app')

@section('page-title', __('Blogs List') )

@section('title')
    <div class="d-inline-block">
        <h5 class="h4 d-inline-block font-weight-400 mb-0">{{__('Blogs List')}}</h5>
    </div>
@endsection

@section('action-btn')
    <a href="#" data-ajax-popup="true" data-size="lg" data-title="{{ __('Add New Blog') }}" data-url="{{route('blogs.create')}}" class="btn btn-sm btn-white btn-icon-only rounded-circle shadow-sm">
        <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
    </a>
@endsection

@section('content')
        <div class="row min-vh-78">
            <div class="col product_tbl">
                <div class="row mt-3">
                    <div class="col-sm-12 table-responsive">
                        <table class="table dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="w-25">{{ __('Name') }}</th>
                                <th>{{ __('Subject') }}</th>
                                <th>{{ __('Category') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><span class="break-all">{{ $blog->name }}</span></td>
                                    <td>{{ $blog->subject }}</td>
                                    <td>{{ $blog->category }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
