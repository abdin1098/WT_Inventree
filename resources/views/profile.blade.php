
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="dashboard-content">

    <div class="dashboard-heading">
        <div>
            <h3>My Profile</h3>
            <p>Manage your account information</p>
        </div>
    </div>

    <div class="dashboard-card p-4">

        <div class="d-flex align-items-center gap-3 mb-4">

            <div class="avatar" style="width:65px;height:65px;font-size:25px;">
                A
            </div>

            <div>
                <h5 class="mb-1">Admin</h5>
                <p class="text-muted mb-0">Administrator</p>
            </div>

        </div>

        <hr>

        <form>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control"
                           value="Admin">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control"
                           value="admin@test.com">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control"
                           value="Administrator" readonly>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Account Status</label>
                    <input type="text" class="form-control"
                           value="Active" readonly>
                </div>

            </div>

            <button type="button" class="btn btn-primary mt-4">
                Save Changes
            </button>

        </form>

    </div>

</div>

@endsection
