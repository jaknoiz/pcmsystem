@extends('master');
@section('title' , 'Procurement System')

@section('info')
        <h1> Procurement System</h1>

            <div class="mb-2">
                <a href="{{ url("/page/create") }}" role="button" class="btn btn-sm btn-success">Create Data</a>
            </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ประเภท</th>
                    <th>เหตุผล</th>
                    <th>คณะ</th>
                    <th>วันที่</th> 
                    <th>เอกต้องทำถึง</th> 
                    <th>เอกต้องทำถึงวันที่</th> 
                    <th>ระยะเวลาแล้วเสร็จ</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($info as $info)
                <tr>
                    <td> {{ $info->id }}</td>
                    <td> {{ $info->methode_name }}</td>
                    <td> {{ $info->reason_description }}</td>
                    <td> {{ $info->office_name }}</td>
                    <td> {{ $info->created_at-> format('d/m/y H:i') }}</td>
                    <td> {{ $info->attachdorder }}</td>
                    <td> {{ $info->attachdorder_date }}</td>
                    <td> {{ $info->devilvery_time }}</td>
                    <td>
                        <a href="{{ url("info/{$info->methode_name}/edit") }}" role="button" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    
@endsection
 