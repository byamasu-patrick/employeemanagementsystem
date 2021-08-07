<template>
    <div class="container list bg-light" style="margin-top: 40px;">
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded"><router-link to="/admin/new"><span>NEW</span></router-link></li>
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded" style="margin-left: 0px;"><router-link to="/admin/delete"><span>DELETE</span></router-link></li>
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded"><router-link to="/admin/print"><span class="fas fa-print"></span></router-link></li>
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded"><router-link to="/admin/meeting"><span>MEETING</span></router-link></li>
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded"><router-link to="/admin/task"><span>TASK</span></router-link></li>
                    <li class="list-item shadow-sm p-1 md-5 bg-white rounded"><router-link to="/admin"><span class="fas fa-bars"></span></router-link></li>
                    <li class="list-item shadow-sm p-1 mb-5 bg-white rounded"><router-link to="/admin"><span class="fab fa-windows" style="color: #3490dc"></span></router-link></li>
                </ul>                
            </div>
             <div class="col-6">
                 <div class="col-md-6 search">
                    <form action="/search" method="POST"> 
                        <input type="hidden" name="_token" :value="csrf">   
                         <button type="submit"><span class="fas fa-search"></span></button>                    
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Type to search">                       
                    </form>

                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-12 card shadow-sm p-3 mb-4 bg-white rounded">
                <div class="row list-m">
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Byamasu Patrick Paul</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src_1" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Elia Barume Lebon</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Byamasu Patrick Paul</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Byamasu Patrick Paul</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Byamasu Patrick Paul</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 card shadow-sm p-3 mb-3 bg-white rounded">
                        <div class="row">
                            <div class="col-4"><img :src="image_src" width="100%" height="130"/></div>
                            <div class="col-8">
                                <small class="em-name">Byamasu Patrick Paul</small><br>
                                <small>Katudza, Plot # 16</small>
                                <small>Dzaleka Camp Dowa</small>
                                <small>(+265) 996 668 149</small>
                                <small>byamasupatrick@takenolab.com</small>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="text">Page 1 of 9</small>
                        <ul class="pagination justify-content-start" style="">
                            <li class="page-item"><button class="page-link" id="prev" tabindex="-1" >Prev</button></li>
                            <li class="page-item"><button class="page-link" id="next" > Next</button></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <small class="text-right">Page size 
                            <form action="/pages" method="post">
                                <button class="page-link justify-content-end shadow-sm p-2 mb-5 bg-white rounded" style="float: right;" id="prev" tabindex="-1" ><span class="fas fa-search"></span></button>
                                <input type="text" name="page_number" value="6" id="page_number" class="form-control">
                            </form></small>                        
                    </div>
                </div>
            </div>
        </div>  
        <div class="row card shadow-sm p-3 mb-4 bg-white rounded">
            <div class="card-header" style=border:none>Samantha Bright Management</div>
            <div class="card-body card shadow-sm p-3 mb-4 bg-white rounded">
                <div class="card-header" style=border:none><span class="text-primary"> Subject</span></div>
            </div>
        </div>      
    </div>
</template>
<style>
.col-8>small{
    display: block;
}
small{
    font-family: 'Courier New', Courier, monospace;
}
small form{
    display: inline !important;
}
small form input[type=text]{
    max-width: 50px;
    padding-bottom: 10px;
    margin-top: -2px;
}
input{
    background-color: transparent !important;
}
.page-link{
    margin-top: -6px;
}
.search{
    float: right;
    background-color: #f8f9fa;
}
input:focus{
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none !important;
    background-color: transparent !important;
}
a:hover{
    text-decoration: none;
}
a{
    color: rgb(22, 22, 22);
    text-decoration: none;
}
form>button{
    float: right;
    background-color: #fff;
    border-radius: 3px;
    border: none;
    padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 8px;
    padding-right: 8px;
    margin-left: 2px;
}
.text-right{
    font-size: 14px;
    display: inline;
    float: right;
    margin-right: 15px;
}
.text{
    font-size: 14px;
    display: inline;
    float: left;
    margin-right: 15px;
}
.search>input{
    max-width: 80%;

}
.list-group{
    list-style: none;
    display: inline;
}
.em-name{
    font-size: 16px;
}
.list-m .col-sm-4{
    max-width: 31.5%;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 20px;
}
.list-m>.col-sm-4:hover{
    cursor: pointer !important;
}
.list-item{
    display: inline;
    background-color: #fff;
    padding-top: 6px !important;
    padding-bottom: 6px !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
    border-radius: 4px;
    border: 2px solid rgb(221, 221, 221);
    cursor: pointer;
    box-shadow: 2px 2px rgb(224, 224, 224);
}
.list-item:hover, li>a>span:hover{
    cursor: pointer !important;
}

</style>
<script>
import _csrfToken from '../../mixins'
export default {
    data(){
        return {
            image_src: 'http://127.0.0.1:8000/images/pp.jpg',
            image_src_1: 'http://127.0.0.1:8000/images/paul.jpg',
            csrf: ''
        }
    },
    mounted(){
        this.csrf = _csrfToken.methods.getCsrfToken();
    }
}
</script>