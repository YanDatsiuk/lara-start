@extends('layouts.admin.default')

@section('content')

    <div class="container">
        <div class="section">

            <h3>Products</h3>

            <table>

                {{-- Table headers --}}
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                {{-- Table rows --}}
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->status}}</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light"
                               href="{{url('/admin/products/edit/'.$product->id)}}">
                                <i class="material-icons">mode_edit</i>
                            </a>
                        </td>
                        <td>
                            <a class="btn-floating waves-effect waves-light"
                               href="{{url('/admin/products/delete/'.$product->id)}}">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

            {{-- Create product button --}}
            <a class="btn-floating btn-large waves-effect waves-light"
               href="{{url('/admin/products/create')}}">
                <i class="material-icons">add</i>
            </a>

        </div>
    </div>

@endsection