@extends('layouts.Admin-layout.adminapp')

@section('admin_content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary">
                        <div class="form-check form-switch">
                            <input class="form-check-input me-3" type="checkbox" name="maintenance_mode"
                                id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Maintenance mode</label>
                            <br>
                        </div>
                        <small>*By turning on maintaince mode all your app and customer side website will be off. Only admin
                            panel and seller panel will be functional</small>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border border-spacing-3 py-2 ps-2">
        <div class="card-title">
            <h4>Company Information</h4>
        </div>
        <div class="card-body ">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Mark"
                                    required>
                                {{-- <div class="valid-feedback">Looks good!</div> --}}
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="01719000000"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="example@gmail.com" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Company Address</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Adress"
                                    required>
                                {{-- <div class="valid-feedback">Looks good!</div> --}}
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Latitude"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Longitude"
                                    required>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">Time Zone</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid state.</div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">Country</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid state.</div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
    </div>


    <div class="card shadow-sm border border-spacing-3 py-2 ps-2">
        <div class="card-title">
            <h4>Business Information</h4>
        </div>
        <div class="card-body ">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary">
                        <form class="row d-flex justify-content-between">
                            <div class="col-md-4  alert alert-light">
                                <h6>Currency Position</h6>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Left <i
                                        class="lni lni-shift-left"></i></label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">Right <i
                                        class="lni lni-shift-right"></i></label>
                            </div>
                            <div class="col-md-4 alert alert-light">
                                <label for="validationCustom02" class="form-label">Forgot Password Verification By</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4  alert alert-light">
                                <h6>Currency Position</h6>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Left <i
                                        class="lni lni-shift-left"></i></label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">Right <i
                                        class="lni lni-shift-right"></i></label>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
    </div>
@endsection
