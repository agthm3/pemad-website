@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Detail Services</h4>
            <a href="#" class="btn-link">View All Shoes</a>
        </div>
        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ url('storage/' . $service->image) }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="mb-2">{{ $service->title }}</h3>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>
                                                        {{ $service->description }}
                                                        <input type="hidden" value="{{ $service->id }}" name="service_id">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>Rp{{ number_format($service->price) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Send Receipt</td>
                                                    <td><input type="file" class="form-control" name="receipt"></td>
                                                </tr>
                                                <tr>
                                                    <td>Your request</td>
                                                    <td>
                                                        <select name="type_request" class="form-control" id="">
                                                            @foreach ($typeRequests as $item)
                                                                <option value="{{ $item->name }}">
                                                                    {{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Send Your Document</td>
                                                    <td><input type="file" name="client_file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Add more detail or spesific request?</td>
                                                    <td>
                                                        <textarea id="" class="form-control" name="client_request" cols="800" rows="10"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="col-lg-12 btn btn-primary float-rigth mt-2 mb-2">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
