@extends('layout.app')

@section('title','Contact')


@section('content')
<div class="container-fluid jumbotron mt-5" style="background: #f3f2f2;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- CONTACT -</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display: flex; align-items:flex-end; align-items: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.263547745862!2d90.41279297294075!3d23.831689652280065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1629020365429!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-md-6">
            <div class="col-md-6 contact-form">
                <h5 class="help-line-title icon-custom-color"> <i class="fas icon-custom-color fa-headphones-alt"></i> HELP LINE </h5>
            </div>
            <div class="form-group ">
                <input id="contactNameID" type="text" class="form-control w-100" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input id="contactMobileID" type="text" class="form-control  w-100" placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <input id="contactEmailID" type="text" class="form-control  w-100" placeholder="Email">
            </div>
            <div class="form-group">
                <input id="contactMsgID" type="text" class="form-control  w-100" placeholder="Message">
            </div>
            <button id="contactSendBtnID" class="btn btn-block normal-btn w-100">Send Now</button>



        </div>

    </div>
</div>
                    
@endsection