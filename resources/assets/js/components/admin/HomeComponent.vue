<template>
    <v-jumbotron color="#444444">
        <v-container fill-height>
            <v-layout align-center>
                <v-flex>
                    <v-alert
                        :value="alert.value"
                        :color="alert.color"
                        icon="check_circle"
                        outline
                        dismissible
                        >
                        {{alert.mensaje}}
                    </v-alert>
                    <h3 class="display-3 text-xs-center">Welcome {{admin.name}}</h3>
                </v-flex>
            </v-layout>
        </v-container>
    </v-jumbotron>
</template>
<script>
    export default {
        data: function() {
            return {
                'alert':{
                    'value': true,
                    'mensaje': 'Este es un mensajito',
                    'color': 'info'
                }
            }
        },
        props: ['admin'],
        destroyed: function(){
            this.$emit('notify',1);
            console.log('destruido');
        },
        created: function(){
            console.log('creado');
        },
    }
</script>
