@extends('layout.app')
@section('content')
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Create Product</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{ route('dashboard') }}"><i class="fas fa-home mr-2"></i>Dashboard</a>
                        </li>
                        <li class="breadcrumb-link active">Create Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- From Start -->
    <div class="from-wrapper">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Vertical</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="col-form-label">User Name</label>
                                    <input class="form-control" type="text" placeholder="Jenny">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" placeholder="123456">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary" type="button">Reset</button>
                                    <input class="btn btn-light" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
