@extends('admin.master')

@section('title', @trans('admin.label_all_categories'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="post" action="{{ route('admin.products.update', $product->id) }}">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input value="{{ $product->name }}" type="text" class="form-control" name="name" placeholder="Name">
                            </div>                            
                            <div class="form-group">
                                <label for="exampleTextarea1">price</label>
                                <textarea class="form-control" name="price" rows="4">{{ $product->price }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">quantity</label>
                                <input value="{{ $product->quantity }}" type="text" class="form-control" name="quantity" placeholder="Name">
                            </div>                            
                            <div class="form-group">
                                <label for="exampleTextarea1">img</label>
                                <textarea class="form-control" name="img" rows="4">{{ $product->img }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">description</label>
                                <input value="{{ $product->description }}" type="text" class="form-control" name="description" placeholder="Name">
                            </div>                            
                            <div class="form-group">
                                <label for="exampleTextarea1">categoris_id </label>
                                <textarea class="form-control" name="categoris_id " rows="4">{{ $product->categoris_id  }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
