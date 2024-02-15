@extends('layouts.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Add New Service</h4>
            <a href="{{ route('dashboard.manageorder') }}" class="btn-link">Back</a>
        </div>

        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table">
                                            <tbody>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif @if (Session::has('success'))
                                                        <div class="alert alert-success">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif

                                                    @if (Session::has('error'))
                                                        <div class="alert alert-danger">
                                                            {{ Session::get('error') }}
                                                        </div>
                                                    @endif
                                                    @csrf
                                                    <tr>
                                                        <td>Input Photo</td>
                                                        <td><input type="file" name="image" class="form-control"
                                                                required />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Title</td>
                                                        <td><input type="text" name="title" class="form-control"
                                                                required />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Description</td>
                                                        <td>
                                                            <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
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
                                                            <input type="number" name="price" class="form-control"
                                                                placeholder="Rp" required />
                                                        </td>
                                                    </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="col-lg-12 btn btn-success float-rigth mt-2 mb-2"
                                        href="order-payment.html">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addTypeRequestBtn = document.getElementById("addTypeRequestBtn");
            const typeRequestContainer = document.getElementById(
                "typeRequestContainer"
            );

            addTypeRequestBtn.addEventListener("click", function() {
                const newInput = document.createElement("input");
                newInput.setAttribute("type", "text");
                newInput.setAttribute("name", "typeRequest[]");
                newInput.setAttribute("class", "form-control mt-2");
                newInput.setAttribute("placeholder", "Masukkan Type Request");

                // Masukkan input baru sebelum tombol "Tambah Type Request"
                typeRequestContainer.insertBefore(newInput, addTypeRequestBtn);
            });
        });
    </script>
@endpush
