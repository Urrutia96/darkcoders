<template>
  <v-app id="inspire" dark>
    <v-navigation-drawer
      v-model="drawer"
      clipped
      fixed
      app
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
        <v-list-tile @click="userAction">
          <v-list-tile-action>
            <v-icon>face</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Users</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="drawer = !drawer">
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Cursos</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
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
      <v-btn icon>
         <v-badge left>
          <span slot="badge">6</span>
              <v-icon
                large
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
        <component :is="componente"></component>
      </v-container>
    </v-content>
    <v-footer app fixed>
      <span>&copy; 2018 <strong>by santos96</strong></span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  
  data: function () {
    return {
      drawer: true,
      componente: "home-dash"
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