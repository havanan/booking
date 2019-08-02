<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đặt Tour</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('form-step')}}/css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="{{asset('form-step')}}/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('form-step')}}/css/jquery-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('form-step')}}/css/style.css"/>
</head>
<body>
<div class="page-content" style="background-image: url('{{asset('form-step')}}/images/wizard-v3.jpg')">
    <div class="wizard-v3-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3 class="heading">Tour {{$info['name']}}</h3>
                <p>Vui lòng cung cấp đầy đủ thông tin để hoàn tất đặt tour</p>
            </div>
            <div class="text-center">
                @include('layouts.components.notification')
            </div>
            <form class="form-register" action="#" method="post" id="frmBooking">
                @csrf
                <div id="form-total">
                    <!-- SECTION 2 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                        <span class="step-text">Khách hàng</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Thông Tin Khách Hàng:</h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="first_name" name="name" required>
                                        <span class="label">Họ và tên<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <span class="label">Email<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                        <span class="label">Điện thoại<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-1">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="address" name="address" required>
                                        <span class="label">Địa chỉ<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                        <span class="step-text">Tour</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Thông tin đặt tour:</h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="date" class="form-control" name="start_date" required id="start_date" value="{{date('Y-m-d')}}">
                                        <span class="label">Ngày khởi hành<span class="text-danger">*</span></span>

                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="number" class="form-control" name="customer" required id="customer" value="1">
                                        <span class="label">Người lớn<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="number" class="form-control" name="children" required value="0" min="0" id="children">
                                        <span class="label">Trẻ em (5-9 tuổi)<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="number" class="form-control" name="baby" required value="0" min="0" id="baby">
                                        <span class="label">Trẻ em (dưới 5)<span class="text-danger">*</span></span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input class="form-control" name="note" type="text" id="note">
                                        <span class="label">Ghi chú</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 4 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                        <span class="step-text">Xác nhận</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Xác nhận thông tin đặt tour:</h3>
                            <div class="form-row table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr class="space-row">
                                        <th>Họ và tên:</th>
                                        <td id="fullname-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Email:</th>
                                        <td id="email-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Điện thoại:</th>
                                        <td id="phone-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Địa chỉ:</th>
                                        <td id="address-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Ngày khởi hành:</th>
                                        <td id="start_date-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Số người lớn:</th>
                                        <td id="customer-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Số Trẻ em (5-9 tuổi):</th>
                                        <td id="children-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Số Trẻ em (dưới 5):</th>
                                        <td id="baby-val"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Ghi chú:</th>
                                        <td id="note-val"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('form-step')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('form-step')}}/js/jquery.steps.js"></script>
<script src="{{asset('form-step')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('form-step')}}/js/main.js"></script>
</body>
</html>