@extends('master');
@section('title' , 'Procurement System')

@section('info')
        <h1> Procurement System</h1>

            <div class="mb-2">
                <a href="{{ url("/page/create") }}" role="button" class="btn btn-sm btn-success">Create Data</a>
            </div>

            <div class="mb-2">
                <a href="{{ url("/page/list") }}" role="button" class="btn btn-sm btn-success">Show Data</a>
            </div>

         
            <div>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                </form>
            </div>


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
 