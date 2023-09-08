@extends('admin.layout')

@section('script')

    <input type="hidden" name="lists" value="@json($listDate)">
    @vite('resources/js/admin/list.js')
@endsection
