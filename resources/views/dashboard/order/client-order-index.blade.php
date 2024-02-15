@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">My Orders</h4>
            <a href="#" class="btn-link">View All Shoes</a>
        </div>

        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allClientOrder as $item)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->order->service->title }}</td>
                                                <td>
                                                    <h5>
                                                        <span class="badge bg-success">{{ $item->order->status }}</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <a style="background-color: #2579d1" class="btn text-white"
                                                        href="{{ route('order.client.show', $item->id) }}">
                                                        Detail
                                                    </a>
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
    </section>
@endsection
