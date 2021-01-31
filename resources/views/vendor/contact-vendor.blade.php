@extends('layouts.master-layout')

@section('title')
    Contact vendor
@endsection

@section('current-page')
    Contact Vendor / {{$vendor->company_name ?? $vendor->first_name }}
@endsection

@section('extra-styles')

@endsection

@section('main-content')
<h1>Contact vendor</h1>
@endsection

@section('extra-scripts')

@endsection
