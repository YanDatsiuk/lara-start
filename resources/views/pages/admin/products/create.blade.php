@extends('layouts.admin.default')

@section('content')

    <div class="container">
        <div class="section">

            <h3>Creating new product</h3>

            <form action="{{url('admin/products/create')}}" method="POST" class="row section">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- Title --}}
                <div class="input-field">
                    <input placeholder="" id="title" type="text" class="validate"
                           name="title">
                    <label for="title">Title</label>
                </div>

                {{-- Description --}}
                <div class="input-field">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
                    <label for="description">Description</label>
                </div>

                {{-- Category --}}
                <div class="input-field">
                    <select name="category_id">
                        <option value="" disabled selected>Choose product category</option>

                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    <label>Product category</label>
                </div>

                {{-- Status --}}
                <div class="input-field">
                    <select name="status">
                        <option value="" disabled selected>Choose product status</option>

                        <option value="public">Public</option>
                        <option value="archive">Archive</option>
                        <option value="private">Private</option>

                    </select>
                    <label>Product status</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>

            </form>


        </div>
    </div>



@endsection