<template>
    <div>
        <v-jumbotron color="#444444">
            <v-container fill-height>
                <v-layout align-center>
                    <v-flex>
                        <h3 class="display-3 text-xs-center">Welcome</h3>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-jumbotron>
    </div>
</template>
<script>
    export default {
        destroyed: function(){
            this.$emit('notify',1);
            console.log('destruido');
        },
        created: function(){
            console.log('creado');
        }        
    }
</script>
