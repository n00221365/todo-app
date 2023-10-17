@extends('layouts.myApp')

@section('content')
<h3>Create Todo</h3>

{{--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif--}}



<form action="{{ route('todos.store') }}" method="post">
    @csrf
<div> 
    <label> Title</label>
    <input type="text" name="title" id="title" value="{{old('title')}}" />
    @if($errors->has('title'))
    <span>{{$errors->first('title')}}</span>
</div>

<div> 
    <label> Description</label>
    <input type="text" name="body" id="body" value="{{old('body')}}"/>
    @if($errors->has('body'))
    <span>{{$errors->first('body')}}</span>
</div>

<button type="submit"> Create</button>
</form>
@endsection