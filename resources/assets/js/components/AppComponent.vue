<template>
    <v-app>
        <v-toolbar app color="primary">
            <v-layout align-center>
                <v-flex xs6 offset-xs3>
                    <v-layout row wrap justify-end>
                        <v-flex xs12>
                            <v-toolbar-items>
                                <h1 class="mb-0"><a href="/"><img src="/images/logo.png" alt="kuromo works" width="234" height="60"></a></h1>
                                <v-spacer></v-spacer>
                                <v-btn flat dark>About</v-btn>
                                <v-btn flat dark>Skills</v-btn>
                                <v-btn flat dark>Projects</v-btn>
                                <v-btn flat dark>Contact</v-btn>
                            </v-toolbar-items>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-toolbar>
        <v-content>
            <v-layout wrap header align-center>
                <v-flex xs6 offset-xs3>
                    <h3 class="display-1 white--text">About me</h3>
                </v-flex>
            </v-layout>
            <v-container fluid>
                <v-layout align-center>
                    <v-flex xs6 offset-xs3>
                        <v-layout row wrap>
                            <v-flex xs12>
                                <h2 class="headline indigo--text text--darken-1">About</h2>
                                <p>Hi, I'm Web Engineer. I have mainly been working as PHP Engineer.</p>
                                <p>Now I'm working at a development job related to ad technology in Tokyo.</p>
                            </v-flex>
                            <v-flex xs12 mt-3>
                                <h2 class="headline indigo--text text--darken-1">Skills</h2>
                                <p>Here is my skill sets and those levels of understanding.</p>
                                <v-layout wrap align-center skills>
                                    <v-flex xs2>
                                    <h3 class="title">PHP</h3>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center v-for="phpSkill in phpSkills" :key="phpSkill.name">
                                        <h4 class="subheading">{{ phpSkill.name }}</h4>
                                        <v-progress-circular size="64" color="primary" v-model="phpSkill.value">{{ phpSkill.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
                                <v-layout wrap align-center skills>
                                    <v-flex xs2 >
                                        <h3 class="title">JavaScript</h3>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center v-for="jsSkill in jsSkills" :key="jsSkill.name">
                                        <h4 class="subheading">{{ jsSkill.name }}</h4>
                                        <v-progress-circular size="64" color="secondary" v-model="jsSkill.value">{{ jsSkill.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
                                <v-layout wrap align-center skills>
                                    <v-flex xs2>
                                        <h3 class="title">Tools</h3>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center v-for="toolSkill in toolSkills" :key="toolSkill.name">
                                        <h4 class="subheading">{{ toolSkill.name }}</h4>
                                        <v-progress-circular size="64" color="blue darken-1" v-model="toolSkill.value">{{ toolSkill.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
                                <v-layout wrap align-center skills>
                                    <v-flex xs2>
                                        <h3 class="title">Others</h3>
                                    </v-flex>
                                    <v-flex xs2 text-xs-center v-for="otherSkill in otherSkills" :key="otherSkill.name">
                                        <h4 class="subheading">{{ otherSkill.name }}</h4>
                                        <v-progress-circular size="64" color="grey darken-1" v-model="otherSkill.value">{{ otherSkill.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                            <v-flex xs12 mt-5>
                                <h2 class="headline indigo--text text--darken-1">Projects</h2>
                                <v-layout wrap fill-height>
                                    <v-flex xs4 projects v-for="(project, index) in projects" :key="project.id" :class="{'px-2': index === 1}">
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
                            <v-flex xs12 mt-5>
                                <h2 class="headline indigo--text text--darken-1">Contact</h2>
                                <p>a</p>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
  export default {
    data () {
      return {
        phpSkills: [
          { name: "PHP", value: 100 },
          { name: "CakePHP", value: 60 },
          { name: "PHPUnit", value: 60 },
          { name: "Composer", value: 60 },
          { name: "Laravel", value: 40 },
        ],
        jsSkills: [
          { name: "JavaScript", value: 80 },
          { name: "jQuery", value: 80 },
          { name: "React", value: 40 },
          { name: "Vue.js", value: 40 },
        ],
        toolSkills: [
          { name: "Git", value: 100 },
          { name: "GitHub", value: 80 },
          { name: "Slack", value: 80 },
          { name: "Docker", value: 60 },
          { name: "CI Tools", value: 60 },
        ],
        otherSkills: [
          { name: "Linux", value: 60 },
          { name: "MySQL", value: 60 },
          { name: "HTML", value: 60 },
          { name: "CSS", value: 60 },
          { name: "C#", value: 40 },
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
