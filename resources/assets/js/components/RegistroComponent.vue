<template>
    <section>
            <article>
                <div class="row">
                    <div class="col s0 m1 l4">
                    </div>
                    <div class="col s12 m5 l4">
                        <div class="row">
                            <form class="col s12" @submit.prevent="submitPrevent">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="name" type="text" class="validate" v-validate="'required'" v-model="nombre">
                                        <label for="first_name">Nombre completo</label>
                                        <span class="error" v-if="errors.has('name')">{{errors.first('name')}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="email" type="text" class="validate" v-validate="'required|email'" v-model="email">
                                        <label for="email">Email</label>
                                        <span class="error" v-if="errors.has('email')">{{errors.first('email')}}</span>
                                        <span class="error" v-if="validacion.email!=''">{{validacion.email}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="password" type="password" class="validate" v-validate="'required|min:8'" ref="pass" v-model="password">
                                        <label for="password">Contraseña</label>
                                        <span class="error" v-if="errors.has('password')">{{errors.first('password')}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-vv-name="repassword" type="password" class="validate" v-validate="'required|min:8|confirmed:pass'" v-model="repassword">
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
    export default {
        data(){
            return {
                nombre:'',
                email:'',
                password:'',
                repassword:'',
                validacion:{
                    nombre:'',
                    email:'',
                    password:'',
                    repassword:'',
                },
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
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            submitPrevent:function(){
                this.$validator.localize(this.dict);
                this.$validator.validate().then(result => {
                    console.log(result);
                    if (!result) {
                    // do stuff if not valid.
                        console.log('algo falla');
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
