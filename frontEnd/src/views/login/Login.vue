<template>
    <div class="login">

        <div class="form-box" :model="formData">
            <h1 class="title">Seven</h1>
            <mt-field label="用户名" placeholder="请输入用户名" v-model="formData.username"></mt-field>
            <mt-field label="密码" placeholder="请输入密码" type="password" v-model="formData.password"></mt-field>
            <mt-button class="btn" type="primary" style="width: 100%;" @click="login">登录</mt-button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login",
        data(){
          return{
              formData:{
                  username:'',
                  email:'',
                  password:''
              }
          }
        },
        mounted:function(){
        },
        methods:{
            login(){

            }
        },
        components:{

        }
    }
</script>

<style lang="less">

    .login{
        .form-box{
            width: 80%;
            margin: 120px auto;
            .btn{
                text-align: center;
                margin-top:10%;
            }

            .title{
                margin-left: 33%;
                margin-bottom: 20%;
            }
        }

    }
</style>