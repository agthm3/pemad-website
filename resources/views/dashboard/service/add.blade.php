@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Add New Service</h4>
            <a href="servicelist.html" class="btn-link">Back</a>
        </div>

        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Input Photo</td>
                                                <td><input type="file" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Title</td>
                                                <td><input type="text" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td>
                                                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Type Request</td>
                                                <td id="typeRequestContainer">
                                                    <!-- Button untuk menambahkan type request baru -->
                                                    <button type="button" id="addTypeRequestBtn"
                                                        class="btn btn-primary mt-2 mb-2">
                                                        Tambah Type Request
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Price</td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Rp" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <a class="col-lg-12 btn btn-success float-rigth mt-2 mb-2" href="order-payment.html">
                                    Save
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
