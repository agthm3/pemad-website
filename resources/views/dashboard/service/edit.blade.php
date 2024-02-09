@extends('layouts.app')

@section('content')  <section class="d-flex flex-column gap-4">
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
                      <img
                        src="assets/images/englishindonesia.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="col-lg-9">
                      <div class="row">
                        <h3 class="mb-2">English - Indonesian</h3>
                      </div>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>Description</td>
                            <td>
                              <textarea
                                name=""
                                class="form-control"
                                placeholder="We will carry out the translation process
                              according to the request you have made. The
                              translation process we undertake adheres to the
                              standards established by international standards."
                                id=""
                              ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td>Price</td>
                            <td>
                              <input
                                type="text "
                                placeholder="Rp220.000"
                                class="form-control"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td>Request Available</td>
                            <td>
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Subtitling
                                    </label>
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Transcription
                                    </label>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Sworn Translation
                                    </label>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Copywriting
                                    </label>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Editing/Proofreading
                                    </label>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      id="flexCheckDefault"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Intepretation
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <a href="" class="btn btn-danger mt-2 mb-2"
                                >Remove</a
                              >
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Add new request"
                              />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <button
                      class="col-lg-12 btn btn-primary float-rigth mt-2 mb-2 float-rigth"
                    >
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
