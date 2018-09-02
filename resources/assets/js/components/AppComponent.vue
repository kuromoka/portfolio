<template>
    <v-app>
        <v-navigation-drawer app v-model="drawer">
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
                <v-flex xs6 offset-xs3>
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
        <v-content>
            <v-container fluid pa-0>
                <v-layout align-center header>
                    <v-flex xs6 offset-xs3>
                        <h1 class="display-1 white--text">About kuromoka</h1>
                    </v-flex>
                </v-layout>
                <v-layout align-center mt-4>
                    <v-flex xs6 offset-xs3>
                        <v-layout wrap>
                            <v-flex xs12 about>
                                <h2 class="headline indigo--text text--darken-1">About</h2>
                                <p>Hi, I'm Web Engineer. I have mainly been working as PHP Engineer.</p>
                                <p>Now I'm working at a development job related to ad technology in Tokyo.</p>
                            </v-flex>
                            <v-flex xs12 skills>
                                <h2 class="headline indigo--text text--darken-1">Skills</h2>
                                <p>Here is my skill sets and those levels of understanding.</p>
                                <v-layout wrap align-center v-for="skill in skills" :key="skill.name">
                                    <v-flex xs2>
                                    <h3 class="title">{{ skill.name }}</h3>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center v-for="detail in skill.details" :key="detail.name">
                                        <h4 class="subheading">{{ detail.name }}</h4>
                                        <v-progress-circular size="64" :color="skill.color" v-model="detail.value">{{ detail.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                            <v-flex xs12 mt-4 projects>
                                <h2 class="headline indigo--text text--darken-1">Projects</h2>
                                <v-layout wrap fill-height>
                                    <v-flex xs4 v-for="(project, index) in projects" :key="project.id" :class="{'px-2': index === 1}">
                                        <v-card>
                                            <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>
                                            <v-card-title primary-title>
                                            <div class="content">
                                                <h3 class="headline mb-0">{{ project.name }}</h3>
                                                <h4>
                                                    Using skills:
                                                    <span v-for="project_skill in project.project_skills" :key="project_skill.id">
                                                        {{ project_skill.name }}
                                                    </span>
                                                </h4>
                                                <p class="mt-4" v-html="project.description"></p>
                                            </div>
                                            </v-card-title>
                                            <v-card-actions>
                                                <v-btn flat color="secondary" :href="project.site_url" target="_blank">Site</v-btn>
                                                <v-btn flat color="secondary" :href="project.github_url" target="_blank">GitHub</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                            <v-flex xs12 mt-4 contact>
                                <h2 class="headline indigo--text text--darken-1">Contact</h2>
                                <p>If you have any questions, please feel free to contact me via ways below.</p>
                                <h3 class="title">GitHub / Twitter</h3>
                                <a href="https://github.com/kuromoka" target="_blank" class="github"><v-icon large>fab fa-github-square</v-icon></a>
                                <a href="https://twitter.com/kuromoka16" target="_blank" class="twitter"><v-icon large>fab fa-twitter-square</v-icon></a>
                                <h3 class="title mt-3">Contact Form</h3>
                                <v-form ref="form" v-model="valid" lazy-validation>
                                    <v-text-field
                                    v-model="name"
                                    :rules="nameRules"
                                    :counter="10"
                                    label="Name"
                                    required
                                    ></v-text-field>
                                    <v-text-field
                                    v-model="email"
                                    :rules="emailRules"
                                    label="E-mail"
                                    required
                                    ></v-text-field>
                                    <v-textarea
                                    name="input-7-1"
                                    label="Content"
                                    ></v-textarea>
                                    <v-btn color="primary" @click="submit">Submit</v-btn>
                                </v-form>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                </v-layout>
                <v-layout justify-end>
                    <v-flex xs1>
                        <v-btn flat color="secondary" @click="$vuetify.goTo('#app', {offset: 0})">
                            Top<v-icon medium class="ml-2">fas fa-arrow-circle-up</v-icon>
                        </v-btn>
                    </v-flex>
                </v-layout>
            </v-container>
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
  export default {
    data () {
      return {
        drawer: false,
        menus: [
          { name: "About", icon: "fas fa-user", target: ".about", offset: -80 },
          { name: "Skills", icon: "fas fa-code", target: ".skills", offset: -80 },
          { name: "Projects", icon: "fas fa-briefcase", target: ".projects", offset: -80 },
          { name: "Contact", icon: "fas fa-envelope", target: ".contact", offset: -80 },
        ],
        skills: [
          {
            name: "PHP",
            color: "primary",
            details: [
              { name: "PHP", value: 100 },
              { name: "CakePHP", value: 60 },
              { name: "PHPUnit", value: 60 },
              { name: "Composer", value: 60 },
              { name: "Laravel", value: 40 },
            ],
          },
          {
            name: "JavaScript",
            color: "secondary",
            details: [
              { name: "JavaScript", value: 80 },
              { name: "jQuery", value: 80 },
              { name: "React", value: 40 },
              { name: "Vue.js", value: 40 },
            ],
          },
          {
            name: "Tools",
            color: "blue darken-1",
            details: [
              { name: "Git", value: 100 },
              { name: "GitHub", value: 80 },
              { name: "Slack", value: 80 },
              { name: "Docker", value: 60 },
              { name: "CI Tools", value: 60 },
            ],
          },
          {
            name: "Others",
            color: "grey darken-1",
            details: [
              { name: "Linux", value: 60 },
              { name: "MySQL", value: 60 },
              { name: "HTML", value: 60 },
              { name: "CSS", value: 60 },
              { name: "C#", value: 40 },
            ],
          },
        ],
        projects: null,
      }
    },
    mounted () {
      axios
        .get('/api/projects')
        .then(response => (this.projects = response.data))
    },
  }
</script>
