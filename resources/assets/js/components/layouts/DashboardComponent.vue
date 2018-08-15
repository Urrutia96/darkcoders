<template>
  <v-app id="inspire" dark>
    <v-navigation-drawer
      v-model="drawer"
      width="250"
      clipped
      app
      absolute
    >
      <v-list dense>
        <v-list-tile @click="homeAction">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-group
            prepend-icon="account_circle"
            value="true" no-action v-model="usersMenu"
            >
            <v-list-tile slot="activator">
                <v-list-tile-title>Users</v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="userAction">
              <v-list-tile-title>Ver Usuarios</v-list-tile-title>              
              <v-list-tile-action>
                <v-icon>remove_red_eye</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-list-tile @click="userAction">
              <v-list-tile-title>Editar Usuarios</v-list-tile-title>              
              <v-list-tile-action>
                <v-icon>edit</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-list-tile @click="userAction">
              <v-list-tile-title>Eliminar Usuarios</v-list-tile-title>              
              <v-list-tile-action>
                <v-icon>delete</v-icon>
              </v-list-tile-action>
            </v-list-tile>
        </v-list-group>
        <v-list-group
            prepend-icon="dashboard" 
            value="false" v-model="cursosMenu" no-action
            >
            <v-list-tile slot="activator">
                <v-list-tile-title>Cursos</v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="userAction">
              <v-list-tile-title>Ver Cursos</v-list-tile-title>              
              <v-list-tile-action>
                <v-icon>remove_red_eye</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-list-tile @click="userAction">
              <v-list-tile-title>Nuevo Curso</v-list-tile-title>              
              <v-list-tile-action>
                <v-icon>add</v-icon>
              </v-list-tile-action>
            </v-list-tile>
        </v-list-group>
        <v-list-tile href="admin/settings">
          <v-list-tile-action>
            <v-icon>settings</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Settings</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar app fixed clipped-left>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>DarkCoders</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn icon @click="notification =0">
         <v-badge left>
          <span slot="badge" v-if="notification!=0">{{ notification }}</span>
              <v-icon
                color="grey lighten-1"
              >
                notifications
          </v-icon>
         </v-badge>
      </v-btn>
      <v-avatar color="grey" size="35">
        <v-icon>account_circle</v-icon>
      </v-avatar>
    </v-toolbar>
    <v-content>
      <v-container fluid>
        
        <component :is="componente" v-on:notify="notification+=1" :admin="admin"></component>
      </v-container>
    </v-content>
    <v-footer app fixed v-if="false">
      <span>&copy; 2018 <strong>by santos96</strong></span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  props:['admin'],
  data: function () {
    return {
      drawer: true,
      componente: "home-dash",
      notification: 0,
      usersMenu: false,
      cursosMenu:false
    }
  },
  methods:{
    homeAction: function(){
      this.componente = "home-dash";
    },
    userAction: function(){
      this.componente = "users-dash";
    },
    cursosAction: function(){
      this.componente = "cursos-dash";
    }
  }
};
</script>