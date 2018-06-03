@extends('layout.master')
@section('content')
    <section class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                    <!-- Modal-->
                <form @submit.prevent="createAccount">
                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                        <div role="document" class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="exampleModalLabel" class="modal-title">Create an Account</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                        <div class="form-group-material">
                                            <input type="email" v-model="user.email" class="input-material" autocomplete required>
                                            <label for="register-email" class="label-material">Email Address</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="text" v-model="user.name" class="input-material" autocomplete required>
                                            <label for="name" class="label-material">Full Name</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="password" v-model="user.password" class="input-material" required autocomplete>
                                            <label for="password" class="label-material">Password</label>
                                        </div>
                                        <div class="form-group-material">
                                            <input type="password" v-model="user.password_confirmation" class="input-material" required autocomplete>
                                            <label for="password" class="label-material">Password Confirmation</label>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Role <br><small class="text-primary">select a user role</small></label>
                                        <div class="col-sm-9">
                                            <div>
                                                <input type="radio" value="administrator" v-model="user.role">
                                                <label for="administrator">Administrator</label>
                                            </div>

                                            <div>
                                                <input type="radio" value="accountant" v-model="user.role">
                                                <label for="accountant">Accountant</label>
                                            </div>

                                            <div>
                                                <input type="radio" checked="" value="assistant" v-model="user.role">
                                                <label for="assistant">Assistant</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Profile Card -->

                <div class="col-lg-4">
                    <div class="client card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                                <div class="status bg-green"></div>
                            </div>

                            <div class="client-title">
                                <h3>{{ $user->name }}</h3><span>{{  $user->roles()->first()->role }}</span><a href="#">Follow</a>
                            </div>
                            <div class="client-info">
                                <div class="row">
                                    <div class="col-4"><strong>20</strong><br><small>Photos</small></div>
                                    <div class="col-4"><strong>54</strong><br><small>Videos</small></div>
                                    <div class="col-4"><strong>235</strong><br><small>Tasks</small></div>
                                </div>
                            </div>
                            <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </div>
                </div>
                @empty
                No User found
            @endforelse
            </div>
        </div>
    </section>
@endsection