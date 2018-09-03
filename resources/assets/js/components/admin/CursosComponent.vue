<template>
    <v-card>
      <v-card-title primary-title>
        Nuevo Curso
      </v-card-title>
      <v-card-text>
      	<v-divider></v-divider>
      	<v-layout row wrap>
      	  <v-flex xs12 sm12 md12>
	      	<v-text-field
	           label="Nombre"
	           outline
	        ></v-text-field>
      	  </v-flex>
      	  <v-flex xs12 sm6 md6>
      	    <v-text-field
	           label="Nombre"
	           outline
	        ></v-text-field>
      	  </v-flex>
      	  <v-flex xs12 sm6 md6>
      	    <v-text-field
	           label="Nombre"
	           outline
	        ></v-text-field>
      	  </v-flex>
      	        	  	
      	</v-layout>  
      	<vue-editor v-model="content" :editorOptions="editorOption"></vue-editor>

      </v-card-text>
    </v-card>
</template>

<script>

import { VueEditor, Quill } from 'vue2-editor';	
import hljs from 'highlight.js';
export default {
    data: function(){
        return{
        	content: '',
      		editorOption: {
      			modules:{
      				syntax: {
		            	highlight: text => hljs.highlightAuto(text).value
		            }
      			}
      		}
        }
    },
    computed: {
      contentCode() {
        return hljs.highlightAuto(this.content).value
      }
    },
    props:['admin'],
    components: {
    	VueEditor
    }
}
</script>

<style>
	.quillWrapper .ql-snow.ql-toolbar {
	    padding-top: 8px;
	    padding-bottom: 4px;
	    background-color: gray;
	}
</style>