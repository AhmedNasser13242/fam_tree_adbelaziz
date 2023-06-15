@extends('layouts.app')

@section('title', __('user.upcoming_birthday'))

@section('content')
    <div class="panel panel-default">
        <!--breadcrumb-->
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.company', $users->id) }}" class="btn btn-primary">اضف مشروع</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>عدد المشاريع</th>
                                <th>صاحب المشروع</th>
                                <th>اسم المشروع</th>
                                <th>رقم المشروع</th>
                                <th>صورة</th>
                                <th>فعل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($projects as $key => $item)
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $item->company_name }}</td>
                                    <td>{{ $item->company_phone }}</td>
                                    <td> <img src="{{ asset('company_image' . '/' . $item->company_image) }}"
                                            style="width: 70px; height:40px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.company', $item->id) }}" class="btn btn-info"><i
                                                class='bx bx-edit bx-tada' style='color:#ffffff'></i></a>


                                        <a href="{{ route('delete.company', $item->id) }}" class="btn btn-danger"
                                            id="delete"><i class='bx bx-trash bx-tada' style='color:#ffffff'></i></a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>عدد المشاريع</th>
                                <th>صاحب المشروع</th>
                                <th>اسم المشروع</th>
                                <th>صورة</th>
                                <th>فعل</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
