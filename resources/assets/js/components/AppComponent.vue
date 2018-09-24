<template>
    <v-app>
        <template v-if="!isIndex">
            <v-navigation-drawer app disable-resize-watcher disable-route-watcher v-model="drawer">
                <v-list dense class="pt-0">
                    <v-list-tile v-for="menu in menus" :key="menu.name" @click="$vuetify.goTo(menu.target, {offset: menu.offset})">
                        <v-list-tile-content>
                            <v-list-tile-title>
                                <v-icon small class="mr-4">{{menu.icon}}</v-icon>{{menu.name}}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-menu v-if="!isIndex" offset-y>
                        <v-list-tile slot="activator" flat dark>
                            <v-icon small class="mr-4">{{currentLanguage.icon}}</v-icon>{{currentLanguage.name}}
                        </v-list-tile>
                        <v-list>
                            <v-list-tile v-for="language in languages" :key="language.name" :href="language.link">
                                <v-icon small class="mr-4">{{language.icon}}</v-icon><v-list-tile-title>{{language.name}}</v-list-tile-title>
                            </v-list-tile>
                        </v-list>
                    </v-menu>
                </v-list>
            </v-navigation-drawer>
        </template>
        <v-toolbar app color="primary">
            <v-toolbar-side-icon v-if="!isIndex" class="hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-layout align-center>
                <v-flex xs12 md6 offset-md3>
                    <v-layout wrap>
                        <v-flex xs12>
                            <v-toolbar-items class="hidden-sm-and-down">
                                <v-spacer></v-spacer>
                                <v-btn flat dark v-for="menu in menus" :key="menu.name" @click="$vuetify.goTo(menu.target, {offset: menu.offset})">
                                    <v-icon small class="mr-2">{{menu.icon}}</v-icon>{{menu.name}}
                                </v-btn>
                                <v-menu v-if="!isIndex" offset-y>
                                    <v-btn slot="activator" flat dark>
                                        <v-icon small class="mr-2">{{currentLanguage.icon}}</v-icon>{{currentLanguage.name}}
                                    </v-btn>
                                    <v-list>
                                        <v-list-tile v-for="language in languages" :key="language.name" :href="language.link">
                                            <v-icon small class="mr-2">{{language.icon}}</v-icon><v-list-tile-title>{{language.name}}</v-list-tile-title>
                                        </v-list-tile>
                                    </v-list>
                                </v-menu>
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
                    <p class="mb-0"><small>&copy; 2018 kuromoka</small></p>
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
      locale: String,
    },
    data () {
      return {
        drawer: false,
        languages: [
          { name: "English", icon: "flag-icon flag-icon-us", link: "/en" },
          { name: "Japanese", icon: "flag-icon flag-icon-jp", link: "/ja" },
        ],
      }
    },
    created () {
        // Changed vue locale
        this.$i18n.locale = this.locale;
    },
    computed: {
      currentLanguage () {
        if (this.locale === "ja") {
          return {
            name: "Japanese",
            icon: "flag-icon flag-icon-jp",
          };
        } else {
          return {
            name: "English",
            icon: "flag-icon flag-icon-us",
          };
        }
      },
      menus () {
        if (this.isIndex) {
            return [];
        } else {
          return [
            { name: "About", icon: "fas fa-user", target: ".about", offset: -75 },
            { name: "Skills", icon: "fas fa-code", target: ".skills", offset: -75 },
            { name: "Projects", icon: "fas fa-briefcase", target: ".projects", offset: -75 },
            { name: "Contact", icon: "fas fa-envelope", target: ".contact", offset: -75 },
          ]
        } 
      }
    },
  }
</script>
