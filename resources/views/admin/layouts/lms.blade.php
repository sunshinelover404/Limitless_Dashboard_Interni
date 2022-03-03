@extends('admin.layouts.app')
@section('content')
    @open(['novalidate' => true])
    @text('login')
    @email('email')
    @checkbox('remember_me', null, 1, null, ['switch' => true, 'inline' => true])
    @submit('Login')
@close
@stop
