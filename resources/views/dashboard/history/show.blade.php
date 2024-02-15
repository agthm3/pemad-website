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

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
