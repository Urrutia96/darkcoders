<template>
    <v-container class="grid-list-md">
        <v-layout row wrap>
            <v-flex xs12 sm6 md4 xs4 v-for="cursos in content.data" :key="cursos.id">
                <v-card height="230px">
                    <v-card-title><div class="text-xs-center">{{cursos.nombre}}</div></v-card-title>
                    <v-card-text v-html="cursos.descripcion">
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn href="" large color="info">Ver</v-btn>
                    </v-card-actions>
                </v-card>
                
            </v-flex>
        </v-layout>
        <div class="text-xs-center">
            <v-pagination
            v-model="page"
            :length="content.last_page"
            circle dark
            ></v-pagination>
        </div>
    </v-container>
</template>

<script>
export default {
    data:()=>{
        return {
            page:1,
            content:Array(),
            show:true
        }
    },
    created:function(){
        this.cursos();
    },
    watch:{
        page: function(){
            this.cursos();
        }
    },
    methods:{
        cursos:function(){
            axios.get('/api/getCursos?page='+this.page).then(response=>{
                this.content = response.data;
            });
        }
    }
}
</script>

