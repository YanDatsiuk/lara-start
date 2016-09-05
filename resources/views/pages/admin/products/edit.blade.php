@extends('layouts.admin.default')

@section('content')

    <div class="container">
        <div class="section">

            <h3>Editing existing product</h3>

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
                    <textarea id="description" name="description"
                              class="materialize-textarea">{{$product->description}}</textarea>
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

                {{-- Status --}}
                <div class="input-field">
                    <select name="status">
                        <option value="" disabled>Choose product status</option>

                        <option value="public" @if($product->status=='public') selected @endif>Public</option>
                        <option value="archive" @if($product->status=='archive') selected @endif>Archive</option>
                        <option value="private" @if($product->status=='private') selected @endif>Private</option>

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