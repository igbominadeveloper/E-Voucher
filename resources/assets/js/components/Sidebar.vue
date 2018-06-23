<template>
    <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{ user.name }}</h1>
                <p>{{ ucfirst(role[0].role) }}</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="/home"> <i class="icon-home"></i>Vouchers </a></li>
            <li><a href="/profile"> <i class="icon-bill"></i>My Profile</a></li>
            <li v-show="user.id == 3"><a href="/officer"> <i class="icon-grid"></i>Officers </a></li>
            <li v-show="user.id == 3"><a href="/users"> <i class="icon-user"></i>User Accounts </a></li>
        </ul>
    </nav>
</template>

<script>
    export default{
        data(){
            return {
                user: {},
                role:{},
                disabled: false,
            }
        },
        methods:{
            ucfirst(string){
                return string.charAt(0).toUpperCase() + string.slice(1);
            },
            sendUser(){
                this.$bus.$emit('getUser',this.user);
                console.log('sending user now'+ this.user);
            }
        },
        created(){
            let vm = this;
            axios.get('/user')
                .then(response => {
                        this.user = response.data;
                        this.role = this.user.roles;
                        this.sendUser();
                })
                .catch(error => console.log('error'+error));
        }
    }
</script>

<style scoped>
    .side-navbar{
        position: fixed;
        height: 100vh;
        padding-top: 5rem;
    }
</style>