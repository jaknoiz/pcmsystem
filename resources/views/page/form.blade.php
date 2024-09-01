@extends('master')
@section('title', 'Procurement System')

@section('info')

<h1>Create Data</h1>

<form action="{{ empty($info->id) ? url('/page') : url('/page/' . $info->id) }}" method="post">
    @if(!empty($info->id))
        @method('put')
    @endif

@csrf

    <div class="mb-3">
        <label for="methode_name" class="form-label">ประเภท</label>
        <input type="text" class="form-control" id="methode_name" name="methode_name" placeholder="ประเภท" required value="{{ old('methode_name' , $info->methode_name) }}">
    </div>
    <div class="mb-3">
        <label for="reason_description" class="form-label">เหตุผล</label>
        <textarea class="form-control" id="reason_description" name="reason_description" rows="3" placeholder="เหตุผลในการจัดซื้อจัดจ้าง" required >{{ old('reason_description' , $info->reason_description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="office_name" class="form-label">คณะ</label>
        <input type="text" class="form-control" id="office_name" name="office_name" placeholder="คณะ" required value="{{ old('office_name' , $info->office_name) }}">
    </div>
    <div class="mb-3">
        <label for=" date" class="form-label">วันที่</label>
        <input type="text" class="form-control" id="date" name="date" placeholder="วันที่ทำเอกสาร" required value="{{ old('date' , $info->date) }}">
    </div>
    <div class="mb-3">
        <label for="attachdorder" class="form-label">เอกต้องทำถึง</label>
        <input type="text" class="form-control" id="attachdorder" name="attachdorder" placeholder="เอกต้องทำถึง" required value="{{ old('attachdorder' , $info->attachdorder) }}">
    </div>
    <div class="mb-3">
        <label for="attachdorder_date" class="form-label">เอกต้องทำถึงวันที่</label>
        <input type="date" class="form-control" id="attachdorder_date" name="attachdorder_date" placeholder="เอกต้องทำถึงวันที่" required value="{{ old('attachdorder_date' , $info->attachdorder_date) }}">
    </div>
    <div class="mb-3">
        <label for="devilvery_time" class="form-label">ระยะเวลาแล้วเสร็จ</label>
        <input type="text" class="form-control" id="devilvery_time" name="devilvery_time" placeholder="ระยะเวลาแล้วเสร็จ" required value="{{ old('devilvery_time' , $info->devilvery_time) }}">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ url('/page') }}" class="btn btn-danger" role="button">Back</a>
</form>
@endsection
