<template>
    <div>
        <v-card>
            <v-card-title>
                <div class="text-xs-center">
                    Home  
                </div>
                    
            </v-card-title>
            <v-card-text>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis molestiae omnis saepe dolor repudiandae, quod esse fuga ratione laudantium doloribus ipsam? Expedita ipsam, vero quaerat porro sequi itaque illum eos!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem tempore, vero nemo at impedit adipisci hic necessitatibus ea explicabo? Expedita laborum eligendi sunt. Natus, aliquam ipsum. Debitis nisi repellendus corrupti.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore delectus corporis repellendus, eius debitis, repellat iste quam maiores nulla fugit non explicabo architecto expedita dicta neque natus deserunt rem? Facere?
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn> cancelar</v-btn>
                <v-btn color="green">Aceptar</v-btn>
            </v-card-actions>
        </v-card>
    </div>
</template>
<script>
    export default {
        destroyed: function(){
            console.log('destruido');
        },
        created: function(){
            console.log('creado');
        }        
    }
</script>
