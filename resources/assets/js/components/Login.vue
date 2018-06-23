<template>
  <form method="post" class="form-validate" @submit.prevent="login" @keydown="errors.clear($event.target.name)">

    <span class="alert alert-danger" :class="{display:response.failure}" style="display:none" v-text="response.failure"></span>
    <span class="alert alert-success" :class="{display:response.success}" style="display:none;" v-text="response.success"></span>

    <div class="form-group">
      <input id="login-email" type="email" name="email" v-model="email" data-msg="Please enter your email address" class="input-material">
      <label for="login-email" class="label-material">Email Address</label>
      <span v-text="errors.get('email')" style="display: block;" v-if="errors.has('email')" class="is-invalid invalid-feedback"></span>
    </div>

    <div class="form-group">
      <input id="login-password" type="password" name="password" v-model="password" data-msg="Please enter your password" class="input-material">
      <label for="login-password" class="label-material">Password</label>
      <span v-text="errors.get('password')" style="display: block;" v-if="errors.has('password')" class="is-invalid invalid-feedback"></span>
    </div>

    <button id="login" class="btn btn-primary w-100" :disabled="errors.any()">Login</button>
    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
  </form>
</template>


<script>
  import Errors from '../Errors';

    export default{
        data(){
            return {
                email:'',
                password: '',
                response:{},
//                disabled:false,
                errors: new Errors()
            }
        },
        methods: {
            login(){
                axios.post('/login', this.$data)
                    .then(response => {
                        this.response = response.data;
                        if (this.response.success) location.reload();
                        if (this.response.failure) {
                            swal("Login Failed","error");
                            delete this.email;
                            delete this.password;
                        }
                    })
                    .catch(error => this.errors.record(error.response.data.errors))
            }
        }
    }
</script>
