@extends('layout.master')
@section('content')
<section class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs text-center mr-auto ml-auto mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="front-tab" data-toggle="tab" href="#front" role="tab" aria-controls="front" aria-selected="true">Front</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="back-tab" data-toggle="tab" href="#back" role="tab" aria-controls="back" aria-selected="false">Back</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="front" role="tabpanel" aria-labelledby="front-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="head">
                                <div class="logo">
                                    <img src="/img/NCS.png">
                                </div>

                                <div class="address">
                                    <p>FEDERAL GOVERNMENT OF NIGERIA <br>NIGERIA CUSTOMS SERVICE <br><span class="text-bold">PAYMENT VOUCHER</span></p>
                                </div>
                                <div class="original text-bold">
                                    <p>ORIGINAL <br/>Treasury <br/> F1</p>
                                </div>
                            </div>
                            <p>Dept. No: NCS/OD/EK/008/18 checked and passed for payment at
                                <select>
                                    <option>Akure</option>
                                    <option>Ado-Ekiti</option>
                                </select>
                            </p>
                            <div class="upper-body d-flex">
                                <div class="slant">
                                    <p>For use in Payment of Advances<br> certified the Advances of N.........................
                                        <br> has been entered on TF 174 (A) (B) or (C) <br> Deptal No:..................................................
                                        <br> Signature:................................................... <br> Name in Block Letters: ............................</p>
                                </div>
                                <div class="tables">
                                    <div class="group">
                                        <div class="table-one">
                                            <table class="table-bordered">
                                                <thead>
                                                <th>DateType</th>
                                                <th>Source</th>
                                                <th>Voucher Number</th>
                                                </thead>
                                                <tbody>
                                                <td>VO1</td>
                                                <td>072</td>
                                                <td>REX 10008</td>
                                                </tbody>
                                            </table>

                                            <table class="table-bordered">
                                                <thead>
                                                <th>Classification Code</th>
                                                </thead>
                                                <tbody>
                                                <td>022001100100220</td>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="table-two">
                                            <table class="table-bordered">
                                                <tr>
                                                    <th>Station</th>
                                                    <td>AKURE</td>
                                                </tr>
                                                <tr>
                                                    <th>Head</th>
                                                    <td>0220011</td>
                                                </tr>
                                                <tr>
                                                    <th>S/Head No.</th>
                                                    <td>102</td>
                                                </tr>
                                                <tr>
                                                    <th>S/Head</th>
                                                    <td>
                                                        <select name="description">
                                                            <option>Local Travels & Transport</option>
                                                            <option>Feeding</option>
                                                            <option>Accommodation</option>
                                                            <option>Health-Care</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                            </table>

                                        </div>
                                    </div>

                                    <div class="table-three">
                                        <table class="table-bordered">
                                            <thead>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            </thead>
                                            <tbody>
                                            <td>{{ now()->format("Y-m-d") }}</td>
                                            <td>022001100100220</td>
                                            </tbody>
                                        </table>

                                        <table class="table-bordered">
                                            <thead>
                                            <th>Source</th>
                                            <th>Classification Code</th>
                                            </thead>
                                            <tbody>
                                            <td>072</td>
                                            <td>022001100100220</td>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="payee form-group">
                                <label for="payee">Payee: </label>
                                <select name="payee" class="form-control">
                                    <option disabled default="select officer">Select Officer</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                    <option>Afolayan Favour</option>
                                </select><br>
                                <label for="address">Address: </label>
                                <input type="text" class="form-control" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <table class="table-bordered" id="table-one">
                                    <thead>
                                    <th style="width:90px">Date</th>
                                    <th style="width:265px">Detailed Description of Service Work</th>
                                    <th>Unit</th>
                                    <th>N</th>
                                    <th>K</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ now()->format("Y-m-d") }}</td>
                                        <td>
                                            <input class="form-control" placeholder="Enter Description" type="text">
                                        </td>
                                        <td>
                                            <input class="form-control" placeholder="Enter unit" type="text">
                                        </td>
                                        <td>
                                            <input class="form-control" placeholder="Enter Amount in Naira" type="text">
                                        </td><td>
                                            <input class="form-control" placeholder="Enter Kobo" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Amount in words</td>
                                        <td><b>Total =N= </b></td>
                                        <td><b>@{{ total }}</b></td>
                                        <td><b>@{{ kobo }}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="bottom-one d-flex">
                                <div class="card col-lg-6">
                                    <div class="card-title"></div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            Payable At: ...............................................
                                        </div>
                                        <div class="form-group">
                                           Signature: .................................................
                                        </div>
                                        <div class="form-group">
                                           Name: ......................................................
                                        </div><div class="form-group">
                                           Station: ....................................................
                                        </div>
                                        <div class="form-group">
                                           Officer's Signature: ...................................
                                        </div>
                                        <div class="form-group">
                                           Name in Block Letters: .............................
                                        </div>
                                        <p>GW/SW</p>
                                        <p>Anthy AIE No., etc <span>R/CS 2016/CSO/18</span></p>
                                    </div>
                                </div>
                                <div class="card certificate col-lg-6">
                                    <div class="text-bold mt-1 pt-3 card-title text-center">CERTIFICATE</div>
                                    <div class="card-body">
                                        <p class="text-justify">I certify the above amount is correct and was incurred under the authority of quoted; that the service has been duly performed; that the rate/price charged is according to regulations/contract is fair and reasonable: that the amount of <span class="text-underline"> Thirty-six thousand Naira only
                                                {{--@{{ total }}--}}
                                            </span> may be paid under the classification quoted</p>
                                        <p class="d-inline-flex">Place:  <select name="state">
                                                <option>Akure</option>
                                                <option>Ado-Ekiti</option>
                                            </select> </p>
                                        <p class="d-inline-flex">Designation:  <select name="designation">
                                                <option>CAC</option>
                                                <option>AC</option>
                                            </select></p>
                                        <p class="text-justify">received from the Federal Government of Nigeria the sum of Thirty-Six thousand Naira @{{ total | words }} and Zero kobo, in full settlement of the Account</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footnotes">

                                <p>N 36,000@{{ total }}</p>
                                <p>{{ now()->format("Y-m-d") }}</p>
                                <p>
                                    <select name="state">
                                        <option>Akure</option>
                                        <option>Ado-Ekiti</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-9 mr-auto ml-auto">
                            <div class="card">
                                <div class="card-header d-flex align-items-center flex-column">
                                    <h3>CERTIFICATE OF HONOUR</h3>
                                    <p class="text-center mt-3">I certify on Honour that the overleaf expenses were incurred in the interest of the Public Service</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <b>Name:</b> ......................................................................................................
                                    </div>
                                    <div class="form-group">
                                        <b>S/No:</b> ......................................................................................................
                                    </div>
                                    <div class="form-group">
                                        <b>Rank:</b> ......................................................................................................
                                    </div>
                                    <div class="form-group">
                                        <b>Sign:</b> ........................................................................................................
                                    </div>
                                    <div class="form-group">
                                        <b>Date:</b> ......................................................................................................
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 mr-auto ml-auto">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="m-auto">VOUCHER CERTIFICATE</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-bordered" id="table-three">
                                            <tr>
                                                <th>Detail</th>
                                                <td>Name</td>
                                                <td>Signature</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <th>Prepared by</th>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Checked by</th>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Entered into Vote book</th>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Passed by</th>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Paid by</th>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection