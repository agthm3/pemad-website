@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">My Orders</h4>

        </div>
        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <form action="{{ route('order.client.complete', $ordercomplete->id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ url('storage/' . $ordercomplete->order->service->image) }}"
                                            class="img-fluid" alt="" />
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="mb-2">{{ $ordercomplete->order->service->title }}</h3>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>Rp{{ number_format($ordercomplete->order->service->price) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Translator</td>
                                                    <td>{{ $ordercomplete->user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Client request</td>
                                                    <td>
                                                        <span>{{ $ordercomplete->order->client_request }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Your Document</td>
                                                    <td>
                                                        <a href="{{ route('download-file', $ordercomplete) }}"
                                                            class="btn btn-primary">Download</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Note from translator</td>
                                                    <td>{{ $ordercomplete->note_translator }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Rating</td>
                                                    <td>
                                                        <select name="rating" id="" class="form-control">
                                                            <option value="5">⭐⭐⭐⭐⭐</option>
                                                            <option value="4">⭐⭐⭐⭐</option>
                                                            <option value="3">⭐⭐⭐</option>
                                                            <option value="2">⭐⭐</option>
                                                            <option value="1">⭐</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="status" value="complete">
                                    <input type="hidden" name="order_id" value="{{ $ordercomplete->order_id }}">
                                    <button type="submit" class="col-lg-12 btn btn-success float-rigth mt-2 mb-2">
                                        Completed
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
