@extends('layouts.header')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black">Entrepreneurs Support List 2021</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Register</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="info-box">
            <h4 class="text-black">Register Your Required Assistance Below</h4>
            <div class="content">
                <div class="info-box">
                    <form action="" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" id="first_name" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" id="last_name" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email_address" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Twitter Handle</label>
                                    <input class="form-control" id="twitter_handle" type="text">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Startup Name</label>
                                    <input class="form-control" id="startup_name" type="text">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Service Product</label>
                                    <input class="form-control" id="service_product" type="text">
                                </fieldset>
                            </div>


                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>City</label>
                                    <select class="form-control custom-select" id="city">
                                        <option value="Alexandra">Alexandra</option>
                                        <option value="Johannesburg">Johannesburg</option>
                                        <option value="Lenasia">Lenasia</option>
                                        <option value="Midrand">Midrand</option>
                                        <option value="Roodepoort">Roodepoort</option>
                                        <option value="Sandton">Sandton</option>
                                        <option value="Soweto">Soweto</option>
                                        <option value="Mshongo">Mshongo</option>
                                        <option value="Klipfontienview">Klipfontienview</option>
                                        <option value="Orange Farm">Orange Farm</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Province</label>
                                    <select class="form-control custom-select" id="province">
                                        <option value="Gauteng">Gauteng</option>
                                        <option value="Eastern Cape">Eastern Cape</option>
                                        <option value="Free State">Free State</option>
                                        <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                        <option value="Limpopo">Limpopo</option>
                                        <option value="Mpumalanga">Mpumalanga</option>
                                        <option value="Northern Cape">Northern Cape</option>
                                        <option value="North West">North West</option>
                                        <option value="Western Cape">Western Cape</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label>Support Needed</label>
                                    <input class="form-control" id="support_needed" type="text">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label> </label>

                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label>Expand on Support Needed</label>
                                    <textarea class="form-control" id="support_expand" rows="5"></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Register Assistance</button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
