@extends('layout.master')
    @section('content')
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                <div class="info d-flex align-items-center">
                    <div class="content">
                    <div class="logo">
                        <h1>E-Voucher</h1>
                    </div>
                    <p>Add a new Officer</p>
                    </div>
                </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">
                    <div class="content">
                    <form class="form-validate" method="POST" action="/officer">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                            <label for="register-email" class="label-material">Email Address      </label>
                        </div>
                        <div class="form-group">
                            <input id="firstName" type="text" name="firstName" required data-msg="Please enter a valid name address" class="input-material">
                            <label for="register-firstName" class="label-material">First Name      </label>
                        </div>
                        @if($errors->has('firstName'))
                            <div id="login-firstName-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('firstName') }}</div>
                        @endif

                          <div class="form-group">
                            <input type="text" name="lastName" required data-msg="Please enter your lastName" class="input-material">
                            <label for="lastName" class="label-material">lastName</label>
                        </div>
                        @if($errors->has('lastName'))
                            <div class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('lastName') }}</div>
                        @endif

                        <div class="form-group">
                            <label for="rank" class="label-material">Rank:  </label>
                            <select name="rank" class="input-material">
                                <option>CAC</option>
                                <option>ACG</option>
                                <option>AC</option>
                            </select>
                        </div>
                        @if($errors->has('rank'))
                            <div class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('rank') }}</div>
                        @endif
                        <div class="form-group">
                            <input type="phone" name="phone" required data-msg="Please enter your mobile number" class="input-material">
                            <label for="phone" class="label-material">Mobile Number</label>
                        </div>
                        @if($errors->has('phone'))
                            <div class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('phone') }}</div>
                        @endif

                        <div class="form-group">
                            <input type="text" name="address" required data-msg="Please enter your mobile number" class="input-material">
                            <label for="address" class="label-material">Mobile Number</label>
                        </div>
                        @if($errors->has('address'))
                            <div class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('address') }}</div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="staff_number" required data-msg="Please enter staff number" class="input-material">
                            <label for="staff_number" class="label-material">Staff ID</label>
                        </div>
                        @if($errors->has('staff_number'))
                            <div class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('staff_number') }}</div>
                        @endif


                        <div class="form-group">
                            <button id="register" type="submit" name="registerSubmit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
        </div>
        </div>
    @endsection
