
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    data:{
      user:{
          email:'',
          password:'',
          role:'',
          name:'',
          password_confirmation:''
      },
      officer:{
          email:'',
          firstName:'',
          lastName:'',
          address:'',
          phone:'',
          staff_number:'',
          rank:'',
      },
        response:{},
      error:{}
    },
    methods:{
        createAccount(){
            axios.post('/users/register',this.user)
                .then(response => {
                    console.log(response.data);
                    this.response = response;
                    this.user = '';
                    location.reload()
                })
                .catch(error => {
                    this.error = error;
                });
        },
        createOfficer(){
            axios.post('/officers',this.officer)
                .then(response => {
                    console.log(response.data);
                    this.response = response;
                    this.officer = '';
                    location.reload();
                })
                .catch(error => {
                    this.error = error;
                });
        }
    }
});
