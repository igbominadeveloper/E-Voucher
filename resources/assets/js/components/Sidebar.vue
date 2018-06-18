<template>
    <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{ user.name }}</h1>
                <p>{{ role.role }}</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="/home"> <i class="icon-home"></i>Dashboard </a></li>
            <li><a href="/voucher"> <i class="icon-bill"></i>Vouchers </a></li>
            <li v-show="user.id == 3"><a href="/officer"> <i class="icon-grid"></i>Officers </a></li>
            <li v-show="user.id == 3"><a href="/users"> <i class="icon-user"></i>User Accounts </a></li>
        </ul>
    </nav>
</template>

<script>
    export default{
        data(){
            return {
                user:{},
                role:{},
                disabled:false,
            }
        },
        mounted(){
            axios.get('/user')
                .then(response => {
                    this.user = response.data;
                })
                .catch(error => console.log(error.response.data));

            axios.get('/user/role')
                    .then(response => {
                        this.role = response.data;
                    })
                    .catch(error => console.log(error.response.data))
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