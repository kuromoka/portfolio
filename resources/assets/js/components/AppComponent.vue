<template>
    <v-app>
        <v-navigation-drawer app disable-resize-watcher disable-route-watcher v-model="drawer">
            <v-list dense class="pt-0">
                <v-list-tile v-for="menu in menus" :key="menu.name" @click="$vuetify.goTo(menu.target, {offset: menu.offset})">
                    <v-list-tile-content>
                        <v-list-tile-title>
                            <v-icon small class="mr-4">{{menu.icon}}</v-icon>{{ menu.name }}
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar app color="primary">
            <v-toolbar-side-icon class="hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-layout align-center>
                <v-flex xs12 md6 offset-md3>
                    <v-layout wrap>
                        <v-flex xs12>
                            <v-toolbar-items class="hidden-sm-and-down">
                                <v-spacer></v-spacer>
                                <v-btn flat dark v-for="menu in menus" :key="menu.name" @click="$vuetify.goTo(menu.target, {offset: menu.offset})">
                                    <v-icon small class="mr-2">{{menu.icon}}</v-icon>{{ menu.name }}
                                </v-btn>
                            </v-toolbar-items>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-toolbar>
        <v-content v-if="isIndex">
            <IndexComponent></IndexComponent>
        </v-content>
        <v-content v-else>
            <ShowComponent></ShowComponent>
        </v-content>
        <v-footer app absolute height="auto" color="primary">
            <v-layout text-xs-center>
                <v-flex xs12 white--text>
                    <p class="mt-3"><a href="/"><img src="/images/logo.png" alt="kuromo works" height="30px"></a></p>
                    <v-divider></v-divider>
                    <p><small>&copy; 2018 kuromoka</small></p>
                </v-flex>
            </v-layout>
        </v-footer>
    </v-app>
</template>

<script>
  import IndexComponent from './IndexComponent.vue';
  import ShowComponent from './ShowComponent.vue';

  export default {
    components: {
      IndexComponent,
      ShowComponent,
    },
    props: {
      isIndex: Boolean,
    },
    data () {
      return {
        drawer: false,
        menus: [
          { name: "About", icon: "fas fa-user", target: ".about", offset: -75 },
          { name: "Skills", icon: "fas fa-code", target: ".skills", offset: -75 },
          { name: "Projects", icon: "fas fa-briefcase", target: ".projects", offset: -75 },
          { name: "Contact", icon: "fas fa-envelope", target: ".contact", offset: -75 },
        ],
      }
    }
  }
</script>
