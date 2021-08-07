<template>
    <div class="container card shadow-sm p-3 mb-4 bg-white rounded" style="margin-top: 20px;">
        <div class="card-header">
            New Employee
        </div>
        <div class="card-body">
            <form action="/new_employee" method="post" v-on:submit.prevent="onSubmit">
            <input type="hidden" name="_token" :value="csrf">
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name" class="label-form">First Name: <span>*</span></label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="label-form">Last Name: <span>*</span></label>   
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="profile" class="label-form">Profile: <span>*</span></label>
                    <input type="text" name="profile" id="profile" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="title" class="label-form">Title: <span>*</span></label>   
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="address" class="label-form-add">Address: <span>*</span></label>
                    <input type="text" name="address" id="address" class="form-control addr" placeholder="Address">
                </div>
                <div class="col-md-12">
                    <div class="row" style="margin-top:  10px">
                        <div class="col-2"></div>
                        <div class="col-5">
                            <input type="text" name="address" id="address" class="form-control addr" placeholder="City">
                        </div>
                        <div class="col-2">
                             <input type="text" name="address" id="address" class="form-control addr" placeholder="State">
                        </div>
                        <div class="col-3">
                             <input type="text" name="address" id="address" class="form-control addr" placeholder="Zipcode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="home" class="label-form">Home: <span>*</span></label>
                    <input type="text" name="home" id="home" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="email" class="label-form">Email: <span>*</span></label>   
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="mobile" class="label-form">Mobile: <span>*</span></label>
                    <input type="text" name="mobile" id="mobile" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="skype" class="label-form">Skype: <span>*</span></label>   
                    <input type="text" name="skype" id="skype" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <label for="hire_date" class="label-form">Hire Date: <span>*</span></label>
                    <input type="text" name="hire_date" id="hire_date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="deot" class="label-form">Dept: <span>*</span></label>   
                    <input type="text" name="deot" id="deot" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button class="btn btn-light btn-submit" v-on:click="sendFormData()" type="submit">SAVE</button>
                    <router-link to="/admin/list" class="btn btn-light btn-submit">CANCEL</router-link>
                </div>
            </div>
        </form>
        </div>
    </div>
</template>
<style>
.btn-submit{
    max-width: 15%;
    border: 1px solid #a8aaac;
    border-radius: 4px;
    background-color: #fff;
    float: right;
    margin-left: 20px;
}
.btn-submit:hover{
    background-color: #fff;
    color: #ccc;
}
.u-bg-light{
    background-color: #fff;
}
.label-form-add{
    display: inline;
    max-width: 10%;
    float: left;
}
.label-form{
    display: inline;
    max-width: 30%;
    float: left;
}
.form-control{
    display: inline;
    border-left: none;
    border-right: none;
    border-top: none;   
    border-radius: 0px; 
    max-width: 70%;
    height: 30px;
    float: right;
}
.addr{
    max-width: 85.5%;
}
.row{
    margin-bottom: 10px;
}
.card{
    padding: 20px;
}
.card-header{
    background: #fff;
}
</style>
<script>
import Vue from 'vue'
import _csrfToken from '../../mixins'
export default {
    data(){
        return {
            name: "Byamasu Patrick",
            csrf: ''
        }
    },
    mounted(){
     // Let get the token first
     this.csrf = _csrfToken.methods.getCsrfToken();
    },
    methods:{
        onSubmit(){
            // Do something after submission
            alert("On Submit Event");
        },
        sendFormData(){
            alert("Ready to submit the form data")
        }
    }

}
</script>