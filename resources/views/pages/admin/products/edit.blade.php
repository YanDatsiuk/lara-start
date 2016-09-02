@extends('layouts.admin.default')

@section('content')

    <div class="container">
        <div class="section">

            <h3>Editing existing category</h3>

            <form action="{{url('admin/products/edit/'.$product->id)}}" method="POST" class="row section">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- Title --}}
                <div class="input-field">
                    <input placeholder="" id="title" type="text" class="validate"
                           name="title"
                           value="{{$product->title}}">
                    <label for="title">Title</label>
                </div>

                {{-- Description --}}
                <div class="input-field">
                    <textarea id="description" name="description" class="materialize-textarea">{{$product->description}}</textarea>
                    <label for="description">Description</label>
                </div>

                {{-- Category --}}
                <div class="input-field">
                    <select name="category_id">
                        <option value="" disabled selected>Choose product category</option>

                        @foreach($categories as $category)
                            @if($category->id == $product->category_id)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    <label>Product category</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>

            </form>


        </div>
    </div>



@endsection