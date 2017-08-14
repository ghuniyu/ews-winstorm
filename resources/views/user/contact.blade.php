@extends('layouts.master')

@section('title','contact')

@section('content')
<div class="container">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <div class="text-center logo">
            	<img src="{{url('assets/images/svg/logos.svg')}}" alt="logo">
        	</div>

            <p style="text-align: center; padding-top: 20px; ">ingin menghubungi kami secara personal? silahkan kirim pesan anda melalui form pesan dibawah ini!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form  method="POST" action="send" name="sentMessage" id="contactForm" >
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anda" id="nama" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls" >
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" id="email" required>
                            
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Subjek</label>
                            <input type="tel" name="subjek" class="form-control" placeholder="Tuliskan Subjek Pesan Anda" id="subjek" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Pesan</label>
                            <textarea rows="5" maxlength="500" name="pesan" class="form-control" placeholder="Masukkan Pesan Anda" id="pesan" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div align="center" class="form-group col-xs-12">
                            <button  type="submit" value="kirim" class="btn btn-success">Kirim </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection