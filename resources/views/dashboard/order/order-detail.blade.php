@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Manage Orders</h4>

        </div>
        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('order.complete.requestor') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ url('storage/' . $order->service->image) }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="mb-2">{{ $order->service->title }}</h3>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>Rp{{ number_format($order->service->price) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Client</td>
                                                    <td>{{ $order->user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Client request</td>
                                                    <td>
                                                        <span>{{ $order->type_request }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Client Document</td>
                                                    <td>
                                                        <a href="{{ route('download.client-file', $order) }}"
                                                            class="btn btn-primary">Download</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Client Request</td>
                                                    <td>
                                                        {{ $order->client_request }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Note To Client</td>
                                                    <td><input type="text" name="note_translator" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>
                                                        <select name="status" id="" class="form-control">
                                                            <option value="payment">Currently in progress</option>
                                                            <option value="reject">Reject</option>
                                                            <option value="progress">Progress</option>
                                                            <option value="complete">Complete</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Upload File</td>
                                                    <td>
                                                        <input type="file" name="file_complete" class="form-control" />
                                                        <input type="hidden" value="{{ $order->id }}" name="order_id">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="col-lg-12 btn btn-primary float-rigth mt-2 mb-2">
                                        Submit
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
