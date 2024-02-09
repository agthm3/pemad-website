@extends('layouts.app')
@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Service List</h4>
            <a href="#" class="btn-link">View All Shoes</a>
        </div>

        <div class="d-flex gap-4 flex-wrap">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="{{ url('storage/' . $service->image) }}" class="img-fluid" alt="" />
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>Rp{{ $service->price }}</td>
                                            </tr>
                                            <tr>
                                                <td>Request Available</td>
                                                <td>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">
                                                            Translation/Localization
                                                        </option>
                                                        <option value="">Subtitling</option>
                                                        <option value="">Transcription</option>
                                                        <option value="">Voice Over</option>
                                                        <option value="">Sworn Translation</option>
                                                        <option value="">Copywriting</option>
                                                        <option value="">Editing/Proofreading</option>
                                                        <option value="">Intepretation</option>
                                                        <option value="">Desktop Publishing</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a class="col-lg-12 btn btn-primary float-rigth mt-2 mb-2"
                                            href="{{ route('service.edit') }}">
                                            Edit
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="col-lg-12 btn btn-danger float-rigth mt-2 mb-2">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
