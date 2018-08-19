<template>
    <section>
            <article>
                <div class="row">
                    <div class="col s0 m1 l4">
                    </div>
                    <div class="col s12 m5 l4">
                        <div class="row">
                            <form class="col s12" @submit.prevent="submitPrevent" action="/registro" method="post" ref="form">
                                <input type="hidden" name="_token" :value="token">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="name" type="text" class="validate" v-validate="'required'" v-model="nombre" name="name">
                                        <label for="first_name">Nombre completo</label>
                                        <span class="error" v-if="errors.has('name')">{{errors.first('name')}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="email" type="text" class="validate" v-validate="'required|email'" v-model="email" name="email"> 
                                        <label for="email">Email</label>
                                        <span class="error" v-if="errors.has('email')">{{errors.first('email')}}</span><span v-else></span>
                                        <span class="error" v-if="vemail!==''">{{vemail}}</span><span v-else></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="password" type="password" class="validate" v-validate="'required|min:8'" ref="pass" v-model="password" name="password">
                                        <label for="password">Contraseña</label>
                                        <span class="error" v-if="errors.has('password')">{{errors.first('password')}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="repassword" type="password" class="validate" v-validate="'required|min:8|confirmed:pass'" v-model="repassword" name="password_confirmation">
                                        <label for="password">Confirmar Contraseña</label>
                                        <span class="error" v-if="errors.has('repassword')">{{errors.first('repassword')}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s4"></div>
                                    <div class="col s4 center-align">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                            <i class="material-icons right">send</i>
                                        </button>
                                        <br>
                                        <br>
                                        Ya tienes una cuenta?
                                        <a href="/login" >Login</a>
                                    </div>
                                    <div class="col s4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s0 m1 l4"></div>
                </div>
            </article>
        </section>
</template>

<script>
    import { Validator } from 'vee-validate';
    import axios from 'axios';
    export default {
        props:['token'],
        data(){
            return {
                nombre:'',
                email:'',
                password:'',
                repassword:'',            
                vnombre:'',
                vemail:'',
                vpassword:'',
                vrepassword:'',
                dict: {
                    es:{
                        attributes:{
                            email: 'correo electrónico',
                            name: 'nombre',
                            password: 'contraseña',
                            repassword: 'confirmar contraseña'
                        }
                    }
                }
            }
        },
        
        methods:{
            submitPrevent:function(e){
                this.$validator.localize(this.dict);
                this.$validator.validate().then(result => {
                    if (!result) {
                         
                    }else{
                        var self = this;
                        axios({
                            method: 'post',
                            url: '/registrovalidate',
                            data: {
                                name: this.nombre,
                                email: this.email,
                                password: this.password,
                                password_confirmation: this.repassword,
                                _token: this.token
                            },
                            header:{'Accept':'application/json'}
                        }).then(function (response) {
                            var ready = false;
                            if(Array.isArray(response.data.email)){
                                
                                self.vemail = response.data.email[0];
                            }else{
                                ready = true
                            }   
                            if(ready){
                                
                                self.$refs.form.submit();
                            }
                        }).catch(error =>{
                            console.log(error);
                        });
                    }
                    
                });
            }
        }
    }
</script>
<style>
.error{
    position: relative;
    min-height: 18px;
    display: block;
    font-size: 12px;
    color: #FF4081;
}
</style>
