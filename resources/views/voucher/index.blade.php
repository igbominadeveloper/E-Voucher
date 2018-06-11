@extends('layout.master')
@section('content')
    <section class="tables">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <a href="/vouchers/create"><button type="button" class="btn btn-primary pull-right">Create Voucher</button></a>
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
                                    @forelse($vouchers as $voucher)
                                            <tr>
                                                <th scope="row">
                                                    {{ count($vouchers) }}
                                                </th>
                                                <td>{{ $voucher->firstName }}</td>
                                                <td>{{ $voucher->lastName }}</td>
                                                <td>{{ $voucher->staff_number }}</td>
                                                <td>{{ $voucher->email }}</td>
                                                <td>{{ $voucher->rank }}</td>
                                                <td>{{ $voucher->phone }}</td>
                                                <td>{{ $voucher->address }}</td>
                                                <td>{{ $voucher->created_at->diffForHumans() }}</td>
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
                                                <p>No Voucher found</p>
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
