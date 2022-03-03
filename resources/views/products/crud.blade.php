@extends('admin.layouts.app')
  
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Product Details</h2>
    </div>
    <div class="card-body">
        @if (isset($row))
        @open(['model'=>$row,'method'=>'put','route'=>['products.update',$row->id],'novalidate' => true,'enctype'=>'multipart/form-data'])
            @else
            @open(['route'=>'products.store','novalidate' => true,'enctype'=>'multipart/form-data'])
        @endif  
        @text('name')
        @textarea('detail')
        @textarea('address')
        @file('image')
        @if (isset($row))
            <img src="/image/{{ $row->image }}" width="100px" />
        @endif
        @submit('Submit')
    </div>
</div>
@stop