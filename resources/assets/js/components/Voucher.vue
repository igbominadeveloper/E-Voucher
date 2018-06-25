<template>
    <section class="dashboard-header">
        <div class="row">
            <div class="tab-content" id="myTabContent">
                <form @submit.prevent="createVoucher">
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
                                <p>Dept. No: NCS/OD/EK/{{ voucher.number | zeros }}/18 checked and passed for payment at
                                    <select v-model="voucher.station" @change="borderless()">
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
                                                    <td>REX10{{voucher.number | zeros}}</td>
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
                                                        <td v-text="voucher.station"></td>
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
                                                            <select v-model="voucher.item" @change="borderless()">
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
                                                <td>{{ now() }}</td>
                                                <td>{{ total }}</td>
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
                                    <select v-model="voucher.officer" class="form-control" @change="borderless()">
                                        <option v-for="officer in officers">{{ officer.name }}</option>
                                    </select><br>
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" placeholder="Enter Payee's Address">
                                </div>
                                <div class="form-group">
                                    <table class="table-bordered" id="table-one">
                                        <thead>
                                        <th style="width:90px">Date</th>
                                        <th style="width:265px">Detailed Description of Service Work</th>
                                        <th style="width:101px;">Unit</th>
                                        <th style="width:101px;">N</th>
                                        <th style="width:101px;">K</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ now() }}</td>
                                            <td>
                                                <input class="form-control" placeholder="Enter Description" type="text" v-model="voucher.description">
                                            </td>
                                            <td>
                                                <input class="form-control" placeholder="Enter unit" type="text" v-model="voucher.unit">
                                            </td>
                                            <td>
                                                <input class="form-control" placeholder="Enter Naira"  type="text" v-model.lazy="voucher.amount">
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Amount in words</td>
                                            <td><b>Total =N= </b></td>
                                            <td><b>{{ total }}</b></td>
                                            <td><b>0</b></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="bottom-one d-flex">
                                    <div class="card col-lg-6">
                                        <div class="card-title"></div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                Payable At: ............................................................
                                            </div>
                                            <div class="form-group">
                                                Signature: ..............................................................
                                            </div>
                                            <div class="form-group">
                                                Name: ...................................................................
                                            </div><div class="form-group">
                                            Station: .................................................................
                                        </div>
                                            <div class="form-group">
                                                Officer's Signature: ................................................
                                            </div>
                                            <div class="form-group">
                                                Name in Block Letters: ..........................................
                                            </div>
                                            <p>GW/SW</p>
                                            <p>Anthy AIE No., etc <span>R/CS 2016/CSO/18</span></p>
                                        </div>
                                    </div>
                                    <div class="card certificate col-lg-6">
                                        <div class="text-bold mt-1 pt-3 card-title text-center">CERTIFICATE</div>
                                        <div class="card-body">
                                            <p class="text-justify">I certify the above amount is correct and was incurred under the authority of quoted; that the service has been duly performed; that the rate/price charged is according to regulations/contract is fair and reasonable: that the amount of <span class="text-underline">
                                                {{total | toWords}} Naira and Zero kobo
                                            </span>may be paid under the classification quoted</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=authorization>
                                    <div class="auth1">
                                        <p class="d-inline-flex">Place:{{ voucher.station }}</p>
                                        <p class="d-inline-flex ml-4">Designation:
                                            <select v-model="voucher.designation" @change="borderless()">
                                                <option>CAC</option>
                                                <option>AC</option>
                                            </select>
                                        </p>
                                    </div>
                                    <p class="text-justify">received from the Federal Government of Nigeria the sum of {{ total | toWords }} Naira and Zero kobo, in full settlement of the Account</p>
                                </div>
                                <div class="footnotes">
                                    <p>N {{ total }}</p>
                                    <p v-text="now()"></p>
                                    <p v-text="voucher.station"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-lg-12 mr-auto ml-auto mt-5">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center flex-column">
                                        <h3>CERTIFICATE OF HONOUR</h3>
                                        <p class="text-center mt-3">I certify on Honour that the overleaf expenses were incurred in the interest of the Public Service</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <b>Name:</b> ................................................................................................................................................
                                        </div>
                                        <div class="form-group">
                                            <b>S/No:</b> .................................................................................................................................................
                                        </div>
                                        <div class="form-group">
                                            <b>Rank:</b> .................................................................................................................................................
                                        </div>
                                        <div class="form-group">
                                            <b>Sign:</b> ..................................................................................................................................................
                                        </div>
                                        <div class="form-group">
                                            <b>Date:</b> ..................................................................................................................................................
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mr-auto ml-auto">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="m-auto">VOUCHER CERTIFICATE</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table-bordered w-100" id="table-three">
                                                <tr>
                                                    <th>Detail</th>
                                                    <th>Name</th>
                                                    <th>Signature</th>
                                                    <th>Date</th>
                                                </tr>
                                                <tr>
                                                    <th>Prepared by</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Checked by</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Entered into Vote book</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Passed by</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Paid by</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-primary" type="submit">Create Voucher</button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            //noinspection JSAnnotator
            return {
                officers:{},
                voucher:{
                    number:8,
                    item:'',
                    amount: 0,
                    unit: 0,
                    description:'',
                    officer:'',
                    station:'',
                    designation:''
                },
                user:{}
            }
        },
        computed:{
            total: function(){
                let vm = this;
                this.$data.total = vm.voucher.unit * vm.voucher.amount;
                return vm.voucher.unit * vm.voucher.amount;
            }
        },
        methods:{
            now(){
                let date = new Date();
                let month = date.getMonth();
                let year = date.getFullYear();
                let day = date.getDate();
                return day+'-'+month+'-'+year;
            },

            borderless(){
                event.target.style.border = 'none';
            },

            createVoucher(){
                axios.post('/voucher',this.$data)
                    .then(response => swal("success",response.data,"success"))
                    .catch(error => swal(error.response.data))
            },
            assignUser(data){
                this.user = data;
            }
        },
        mounted(){
            axios.get('/officer')
                .then(response => {
                    this.officers = response.data;
                    this.officers.forEach(officer =>{
                        officer.name = officer.firstName+' '+officer.lastName;
                    });
                })
                .catch(error => swal(error.response.data));
        },
        created(){
            let vm = this;
            this.$bus.$on('getUser',function(data) {
                console.log('Inside the event listener'+ data);
                vm.assignUser(data);
            });
        },
        filters:{
            zeros(input){
                return '00'+input;
            },
            toWords(amount){
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    let value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }
        }
    }
</script>