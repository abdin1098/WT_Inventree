
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-content">

    <div class="dashboard-heading">
        <div>
            <h3>Dashboard</h3>
            <p>Good morning, Admin · {{ now()->format('l, F d, Y') }}</p>
        </div>
    </div>

    <div class="row g-3 mb-3">

        <div class="col-lg-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-label">REVENUE</div>
                <h4>Rs 0</h4>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-label">ORDERS</div>
                <h4>0</h4>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-label">AVERAGE ORDER</div>
                <h4>Rs 0</h4>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="stat-card">
                <div class="stat-label">GROSS PROFIT</div>
                <h4>Rs 0</h4>
            </div>
        </div>

    </div>

    <div class="row g-3">

        <div class="col-lg-8">
            <div class="dashboard-card chart-card">
                <div class="card-heading">
                    <h6>Revenue Trend</h6>
                    <p>Net revenue per day</p>
                </div>

                <div class="empty-state">
                    <i class="bi bi-bar-chart"></i>
 
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="dashboard-card chart-card">
                <div class="card-heading">
                    <h6>Top Products</h6>
                    <p>By revenue</p>
                </div>

                <div class="empty-state">
                    <i class="bi bi-box"></i>

                </div>
            </div>
        </div>

    </div>

    <div class="dashboard-card activity-card mt-3">

        <div class="card-heading">
            <h6>Document Activity</h6>
            <p>Sales, purchases and order requests</p>
        </div>

        <div class="empty-state">
            <i class="bi bi-file-earmark-text"></i>

        </div>
    </div>
</div>

@endsection
