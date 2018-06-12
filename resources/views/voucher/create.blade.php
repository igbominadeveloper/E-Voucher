<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Voucher | E-Voucher</title>
</head>
<body>
    <header>
        <div class="top">
            <div class="logo"><img src="/img/NCS.png" alt="Customs logo"></div>
            <div class="stamp text-bold"><p>ORIGINAL Treasury F1</p></div>
        </div>
        <div class="bottom">
            <p>FEDERAL GOVERNMENT OF NIGERIA</p>
            <p>NIGERIA CUSTOMS SERVICE</p>
            <p class="text-bold">PAYMENT VOUCHER</p>
        </div>
    </header>
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
                        <th>S/Head No</th>
                        <th>S/Head</th>
                        <th>Classification Code</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </thead>
                    <tbody>
                        <td>VO 1</td>
                        <td>072</td>
                        <td>REX 100008</td>
                        <td>AKURE</td>
                        <td>0220011</td>
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
                        <label for="station" class="label-material">Signature:  </label>
                        <input name="station" class="input-material">
                    </div><div class="form-group">
                        <label for="signature" class="label-material">Signature:  </label>
                        <input name="signature" class="input-material">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        import moment from '../../../node_modules/moment'
    </script>
</body>
</html>
