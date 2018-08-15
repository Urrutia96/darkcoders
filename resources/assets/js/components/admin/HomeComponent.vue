<template>
    <v-jumbotron color="#444444">
        <v-container fill-height>
            <v-layout align-center>
                <v-flex>
                    <h3 class="display-3 text-xs-center">Welcome {{admin.nombre}}</h3>
                </v-flex>
            </v-layout>
        </v-container>
    </v-jumbotron>
</template>
<script>
    export default {
        data: function() {
            return {

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
