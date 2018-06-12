@extends('layout.master')
@section('content')
    <section class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    <div class="logo"><img src="/img/NCS.png" alt="Customs logo"></div>
                    <div class="stamp text-bold"><p>ORIGINAL Treasury F1</p></div>
                </div>
                <div class="bottom">
                    <p>FEDERAL GOVERNMENT OF NIGERIA</p>
                    <p>NIGERIA CUSTOMS SERVICE</p>
                    <p class="text-bold">PAYMENT VOUCHER</p>
                </div>
                <p>Deptal No: NCS/OD/EK/
                    @{{ lastID }}/
                    @{{ currentYear }}
                    checked and passed for payment at
                    <select name="state" refs="state">
                        <option>Ondo</option>
                        <option>Ekiti</option>
                    </select>
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table-bordered">
                                    <thead>
                                        <th>Data Type</th>
                                        <th>Source</th>
                                        <th>Voucher Number</th>
                                        <th>Station</th>
                                        <th>Head</th>
                                    </thead>
                                    <tbody>
                                        <td>VO 1</td>
                                        <td>072</td>
                                        <td>REX 100008</td>
                                        <td>AKURE</td>
                                        <td>0220011</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="lg-6">
                            <div class="table-responsive">
                                <table class="table-bordered">
                                    <thead>
                                        <th>S/Head No</th>
                                        <th>S/Head</th>
                                        <th>Classification Code</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <td>102</td>
                                        <td>
                                            <select name="shead">
                                                <option>Local Travels</option>
                                                <option>Feeding</option>
                                                <option>Logistics</option>
                                                <option>Medical Bill</option>
                                                <option>Hotel</option>
                                            </select>
                                        </td>
                                        <td>022001100100220</td>
                                        <td>{{ now() }}</td>
                                        <td>
                                            <p>N<input type="number"></p>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payee">
                                <div class="form-group">
                                    <label for="payee" class="label-material">Payee:  </label>
                                    <select name="payee" class="input-material" v-for="officer in officers">
                                        <option>@{{ officer.name }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="label-material">Address:  </label>
                                    <select name="address" class="input-material" v-for="command in commands">
                                        <option>@{{ command.name }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <table class="table-bordered">
                                        <thead>
                                            <th>Date</th>
                                            <th>Detailed Description of Service Work</th>
                                            <th>Unit</th>
                                            <th>N</th>
                                            <th>K</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ now() }}</td>
                                                <td>
                                                    <input type="text">
                                                </td>
                                                <td>
                                                    <input type="number">
                                                </td>
                                                <td>
                                                    <input type="number">
                                                </td><td>
                                                    <input type="number">
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
                                <div class="payment">
                                    <div class="form-group">
                                        <label for="payableAt" class="label-material">Payable At:  </label>
                                        <input name="payableAt" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="signature" class="label-material">Signature:  </label>
                                        <input name="signature" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="label-material">Name:  </label>
                                        <input name="name" class="input-material text-uppercase">
                                    </div><div class="form-group">
                                        <label for="station" class="label-material">Station:  </label>
                                        <input name="station" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="officer" class="label-material">Officer's Signature:  </label>
                                        <input name="officer" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="name2" class="label-material">Name in Block Letters:  </label>
                                        <input name="name2" class="input-material">
                                    </div>
                                    <p>GW/SW</p>
                                    <p>Anthy AIE No., etc <span>R/CS 2016/CSO/18</span></p>
                                </div>
                                <div class="certificate">
                                    <p>I certify the above amount is correct and was incurred under the authority of quoted; that the service has been duly performed; that the rate/price charged is according to regulations/contract is fair and reasonable: that the amount of <span class="text-underline">@{{ total }}</span> may be paid under the classification quoted</p>
                                </div>
                                <div class="footnotes">
                                    <p>Place - @{{ state }}</p>
                                    <p>Designation - @{{ officer.rank }}</p>
                                    <p>received from the Federal Government of Nigeria the sum of @{{ total | words }} and <span class="space">....kobo</span> in full settlement of the Account</p>
                                    <p>N@{{ total }}</p>
                                    <p>{{ now() }}</p>
                                    <p>@{{ state }}</p>
                                    <p>Signature - <span class="space">..................</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-center flex-column">
                                    <h3>CERTIFICATE OF HONOUR</h3>
                                    <p class="text-center mt-3">I certify on Honour that the overleaf expenses were incurred in the interest of the Public Service</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name" class="label-material">Name:  </label>
                                        <input name="name" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="sNo" class="label-material">S/No:  </label>
                                        <input name="sNo" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="Rank" class="label-material">Rank:  </label>
                                        <input name="Rank" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="sign" class="label-material">Sign:  </label>
                                        <input name="sign" class="input-material">
                                    </div>
                                    <div class="form-group">
                                        <label for="date" class="label-material">Date:  </label>
                                        <input name="date" class="input-material">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3>VOUCHER CERTIFICATE</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-bordered">
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
    </section>
@endsection