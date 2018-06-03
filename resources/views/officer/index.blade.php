@extends('layout.master')
    @section('content')
        <section class="tables">
            <div class="container-fluid">
                <div class="row">
                    <form @submit.prevent="createOfficer">
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="exampleModalLabel" class="modal-title">Create an Account</h4>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group-material">
                                            <input type="email" v-model="officer.email" class="input-material" autocomplete="email" required>
                                            <label for="register-email" class="label-material">Email Address</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="text" v-model="officer.firstName" class="input-material" autocomplete required>
                                            <label for="name" class="label-material">First Name</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="text" v-model="officer.lastName" class="input-material" autocomplete required>
                                            <label for="name" class="label-material">Last Name</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="text" v-model="officer.staff_number" class="input-material" autocomplete required>
                                            <label for="name" class="label-material">Staff Number</label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="phone" v-model="officer.phone" class="input-material" autocomplete required>
                                            <label for="phone" class="label-material">Mobile Phone </label>
                                        </div>

                                        <div class="form-group-material">
                                            <input type="address" v-model="officer.address" class="input-material" autocomplete required>
                                            <label for="address" class="label-material">Permanent Home Address </label>
                                        </div>

                                        <div class="form-group-material">
                                            <label for="rank" class="label-material">Rank</label>
                                            <select v-model="officer.rank" class="form-control">
                                                <option disabled selected value="select rank">Select Rank</option>
                                                <option>CAC</option>
                                                <option>AC</option>
                                                <option>CGC</option>
                                                <option>ASC</option>
                                            </select>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-close">
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right">Create Account </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Staff ID</th>
                                            <th>Email Address</th>
                                            <th>Rank</th>
                                            <th>Mobile Number</th>
                                            <th>Address</th>
                                            <th>Date Created</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($officers as $officer)
                                            @for($i=1; $i<=count($officers))
                                            <tr>
                                                <th scope="row">
                                                    {{ count($officers) }}
                                                </th>
                                                <td>{{ $officer->firstName }}</td>
                                                <td>{{ $officer->lastName }}</td>
                                                <td>{{ $officer->staff_number }}</td>
                                                <td>{{ $officer->email }}</td>
                                                <td>{{ $officer->rank }}</td>
                                                <td>{{ $officer->phone }}</td>
                                                <td>{{ $officer->address }}</td>
                                                <td>{{ $officer->created_at->diffForHumans() }}</td>
                                                <td class="tard-close">
                                                    <div class="dropdown">
                                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow">

                                                        <a href="#" class="dropdown-item remove"><i class="fa fa-times"></i>Delete</a>
                                                        <a href="#" class="dropdown-item edit"><i class="fa fa-gear"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        <p>No Officer found</p>
                                        @endfor
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection