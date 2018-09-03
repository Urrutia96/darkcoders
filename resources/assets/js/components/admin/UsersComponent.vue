<template>
    <div>
        <v-card>
            <v-card-title>
                <div class="text-xs-center">
                    Usuarios registrados    
                </div>
                    
            </v-card-title>
            <v-card-text>
               <v-data-table
                 :headers="headers"
                 :items="items"
                 hide-actions
                 class="elevation-1"
                 :pagination.sync="pagination"
               >
                 <template slot="items" slot-scope="props">
                    <td>{{ props.item.name }}</td>
                    <td class="text-xs-right">{{ props.item.email }}</td>
                </template>
               </v-data-table>
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
    props:['admin'],
   data () {
      return {
            headers: [
                {
                  text: 'Nombre Completo',
                  align: 'left',
                  sortable: true,
                  value: 'name'
                },
                { text: 'Email', value: 'email' },
            ],
            items: [
            ],
            pagination: {
                sortBy: 'name'
            }
        }
    },
    created: function(){
        this.llenar();
    },
    methods: {
        llenar: function(){
            axios.get('/api/getUsers').then(response =>{
                this.items=response.data;
            });
        }
    }
}
</script>
