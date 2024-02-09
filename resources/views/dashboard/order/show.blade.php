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
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="assets/images/englishindonesia.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <h3 class="mb-2">English - Indonesian</h3>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td>Rp220.000</td>
                                            </tr>
                                            <tr>
                                                <td>Client</td>
                                                <td>Mbak Yusuf</td>
                                            </tr>
                                            <tr>
                                                <td>Client request</td>
                                                <td>
                                                    <span>Translation/Localization</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Client Document</td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Download</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Client Request</td>
                                                <td>
                                                    Tolong Selesaikan dalam satu hari satu malam! ini
                                                    untuk kepentingan negara
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Note To Client</td>
                                                <td><input type="text" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Currently in progress</option>
                                                        <option value="">Reject</option>
                                                        <option value="">Complete</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Upload File</td>
                                                <td>
                                                    <input type="file" class="form-control" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <button class="col-lg-12 btn btn-primary float-rigth mt-2 mb-2">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
