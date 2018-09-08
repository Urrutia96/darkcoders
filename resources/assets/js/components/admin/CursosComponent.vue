<template>
	<div>
		<v-alert
			:value="alert.value"
			:color="alert.color"
			icon="check_circle"
			outline
			dismissible
			>
			{{alert.mensaje}}
		</v-alert>
		<form ref="form" @submit.prevent="guardar">
	<v-card>
	  <v-card-title primary-title>
		Nuevo Curso
	  </v-card-title>
	  <v-card-text>
		
	  	<v-divider></v-divider>
	  	<v-layout row wrap>
	  	  <v-flex xs12 sm12 md12>
			<v-text-field
				v-model="nombre"
				label="Nombre del Curso"
				outline
			></v-text-field>
	  	  </v-flex>  
		<v-flex xs12 sm12 md12>
		  	<v-select
				  :items="categorias"
				  v-model="categoria"
				  label="Categoria"
				  item-text="nombre"
		  		  item-value="id"
				  outline
			  ></v-select>
	  	  </v-flex>     	        	  	
	  	</v-layout>
				<div>Descripcion:</div>
	  	<vue-editor v-model="content" :editorOptions="editorOption"></vue-editor>
	  </v-card-text>
	  <v-card-actions>
				<v-spacer></v-spacer>
		<v-btn color="success" large type="submit">Crear</v-btn>
		<v-btn>text</v-btn>
		
	  </v-card-actions>
	</v-card>
	</form>
	</div>
</template>

<script>
import { VueEditor, Quill } from "vue2-editor";
import hljs from "highlight.js";
export default {
  data: function() {
	return {
	  nombre: "",
	  content: "",
	  editorOption: {
		modules: {
		  syntax: {
			highlight: text => hljs.highlightAuto(text).value
		  }
		}
	  },
	  categorias: Array(),
	  categoria: "",
	  alert: {
		value: false,
		mensaje: "",
		color: "" // success, info, warning or error alert
	  }
	};
  },
  computed: {
	contentCode() {
	  return hljs.highlightAuto(this.content).value;
	}
  },
  created: function() {
	this.categories();
  },
  props: ["admin"],
  components: {
	VueEditor
  },
  methods: {
	categories: function() {
	  axios.get("/api/getCateries").then(response => {
		this.categorias = response.data;
	  });
	},
	guardar: function() {
	  axios({
		method: "post",
		url: "/api/crearcurso",
		data: {
		  nombre: this.nombre,
		  categoria: this.categoria,
		  descripcion: this.content,
		  profesor: this.admin
		},
		headers:{'Accept':'application/json'}
	  }).then(response => {
		  var result =response.data['result']; 
		  if(result==true){
			  this.alert.value = true;
			  this.alert.mensaje = 'Curso Creado Correctamente!';
			  this.alert.color ='success';
			  this.content ='';
			  this.categoria='';
			  this.descripcion = '';
			  this.nombre = '';
			  this.$refs.form.reset();
		  }else{
			this.alert.value = true;
			this.alert.mensaje = 'Ha ocurrido un error, por favor revisa bien los datos';
			this.alert.color ='error';
		  }
	  });
	}
  }
};
</script>

<style>
.quillWrapper .ql-snow.ql-toolbar {
  padding-top: 8px;
  padding-bottom: 4px;
  background-color: gray;
}
</style>