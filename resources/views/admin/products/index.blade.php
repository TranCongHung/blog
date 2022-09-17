@extends('admin.master')

@section('title', @trans('admin.label_all_categories'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <p class="card-description">
                            Add class <code>.table</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>img</th>
                                        <th>description</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                        <th>category_id </th>
                                        <th>#</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productList as $cat)
                                        <tr>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->price }}</td>
                                            <td>{{ $cat->quantity }}</td>
                                            <td>{{ $cat->img }}</td>
                                            <td>{{ $cat->description }}</td>
                                            <td>{{ $cat->created_at }}</td>
                                            <td>{{ $cat->updated_at }}</td>
                                            <td>{{ $cat->category_id }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $cat->id) }}">Edit</a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('admin.products.destroy', $cat->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <label class="badge badge-danger">
                                                        <button type="submit">Delete</button>
                                                    </label>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
