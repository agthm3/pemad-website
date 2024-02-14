@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Manage Orders</h4>
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
                                            <th scope="col">Client</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Receipt</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mas Tekno</td>
                                            <td>English - Indonesian</td>
                                            <td>
                                                <h5>
                                                    <span class="badge bg-success">Complete</span>
                                                </h5>
                                            </td>
                                            <td>Rp220.000</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Receipt</a>
                                            </td>
                                            <td>
                                                <a style="background-color: #2579d1" class="btn text-white"
                                                    href="manageorder-show.html">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mbak tekno</td>
                                            <td>France - Indonesian</td>
                                            <td>
                                                <h5>
                                                    <span class="badge bg-danger">Rejected</span>
                                                </h5>
                                            </td>
                                            <td>Rp220.000</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Receipt</a>
                                            </td>
                                            <td>
                                                <a style="background-color: #2579d1" class="btn text-white"
                                                    href="manageorder-show.html">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Kak tekno</td>
                                            <td>France - Indonesian</td>
                                            <td>
                                                <h5>
                                                    <span class="badge bg-warning">Pending</span>
                                                </h5>
                                            </td>
                                            <td>Rp220.000</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Receipt</a>
                                            </td>
                                            <td>
                                                <a style="background-color: #2579d1" class="btn text-white"
                                                    href="manageorder-show.html">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Kak tekno</td>
                                            <td>France - Indonesian</td>
                                            <td>
                                                <h5>
                                                    <span class="badge bg-info">Currently in progress
                                                    </span>
                                                </h5>
                                            </td>
                                            <td>Rp220.000</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Receipt</a>
                                            </td>
                                            <td>
                                                <a style="background-color: #2579d1" class="btn text-white" href="">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
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
