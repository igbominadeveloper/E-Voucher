
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


//Voucher Component
Vue.component('app-voucher',{
   data(){
       return {
            officers:{},
            voucher:{
                amount:0,
                description:'',
                officer:''
            },
            errors: new Errors(),
       }
   },
    mounted(){
       axios.get('/officers')
           .then(response => {
               this.officers = response.data;
               console.log(this.officers);
           })
           .catch(error => console.log(error.response.data))
    }
});

import DashboardCounter from './components/Counter.vue';

import Login from './components/Login.vue';

import Sidebar from './components/Sidebar.vue';

const app = new Vue({
    el: '#app',
    data:{
      account:{},
      officer:{},
      response:{},
      error:{}
    },
    components:{
        'app-counter' : DashboardCounter,
        'app-sidebar' : Sidebar,
        'app-login' : Login
    },
    methods:{
        createAccount(){
            axios.post('/users/register',this.account)
                .then(response => {
                    console.log(response.data);
                    this.response = response.data;
                    this.account = '';
                    location.reload()
                })
                .catch(error => {
                    this.error = error.response.data;
                });
        },
        createOfficer(){
            axios.post('/officers',this.officer)
                .then(response => {
                    console.log(response.data);
                    this.response = response.data;
                    this.officer = '';
                    location.reload();
                })
                .catch(error => {
                    this.error = error.response.data;
                });
        }
    }
});
