<template>
    <v-container fluid pa-0>
        <v-layout align-center header>
            <v-flex xs12 md6 offset-md3>
                <h1 class="display-1 white--text">About kuromoka</h1>
            </v-flex>
        </v-layout>
        <v-layout align-center mt-4>
            <v-flex xs12 md6 offset-md3>
                <v-layout wrap>
                    <v-flex xs12 about>
                        <h2 class="headline indigo--text text--darken-1">About</h2>
                        <p>
                            {{ $t("Thank you for coming my portfolio website!") }}
                        </p>
                        <p>
                            {{ $t("I'm a Web Engineer and work in Tokyo.") }}<br>
                            {{ $t("Currently, I'm developing service related to Web advertising as a PHP Engineer.") }}
                        </p>
                    </v-flex>
                    <v-flex xs12 skills>
                        <h2 class="headline indigo--text text--darken-1">Skills</h2>
                        <p>{{ $t("My skill sets and those levels of understanding as below.") }}</p>
                        <v-layout wrap align-center v-for="skill in skills" :key="skill.name">
                            <v-flex xs12 md2>
                                <h3 class="title">{{ skill.name }}</h3>
                            </v-flex>
                            <v-flex md2 hidden-sm-and-down text-xs-center v-for="detail in skill.details" :key="'md_' + detail.name">
                                <h4 class="subheading">{{ detail.name }}</h4>
                                <v-progress-circular size="64" :color="skill.color" v-model="detail.value">{{ detail.value }}</v-progress-circular>
                            </v-flex>
                            <v-flex xs4 hidden-md-and-up text-xs-center v-for="detail in skill.details" :key="'xs_' + detail.name">
                                <h4 class="subheading">{{ detail.name }}</h4>
                                <v-progress-circular size="48" :color="skill.color" v-model="detail.value">{{ detail.value }}</v-progress-circular>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                    <v-flex xs12 mt-4 projects>
                        <h2 class="headline indigo--text text--darken-1">Projects</h2>
                        <v-layout wrap>
                            <v-flex xs12 md4 v-for="(project, index) in projects" :key="project.id" :class="{'center-px': index === 1}">
                                <v-card>
                                    <v-card-media :src="'/images/' + project.image_name" height="200px"></v-card-media>
                                    <v-card-title primary-title>
                                        <div class="content">
                                            <h3 class="headline mb-0">{{ project.name }}</h3>
                                            <h4>
                                                {{ $t("Using skills:") }}
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
                        <p>{{ $t("If you have any questions, please feel free to contact me.") }}</p>
                        <h3 class="title">GitHub / Twitter</h3>
                        <a href="https://github.com/kuromoka" target="_blank" class="github"><v-icon large>fab fa-github-square</v-icon></a>
                        <a href="https://twitter.com/kuromoka16" target="_blank" class="twitter"><v-icon large>fab fa-twitter-square</v-icon></a>
                        <h3 class="title mt-3">Form</h3>
                        <v-form ref="form" lazy-validation>
                            <v-alert :value="isSucceeded" type="success">
                                <p class="mb-0">
                                    {{ $t("Thank you for your inquiry. A confirmation email has been sent to your email.") }}
                                </p>
                            </v-alert>
                            <v-alert :value="isAlerted" type="error">
                                <p class="mb-0">
                                    {{ $t("An error occurred. Sorry, please try again later.") }}
                                </p>
                            </v-alert>
                            <v-text-field color="secondary" v-model="name" label="Name" :error-messages="nameErrors"></v-text-field>
                            <v-text-field color="secondary" v-model="email" label="E-mail" :error-messages="emailErrors"></v-text-field>
                            <v-textarea color="secondary" v-model="message" label="Message" :error-messages="messageErrors"></v-textarea>
                            <v-btn color="secondary" :disabled="isDisabled" :loading="isLoading" @click="submit">Submit</v-btn>
                        </v-form>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
        <v-layout text-xs-center justify-end>
            <v-flex xs3>
                <v-btn flat color="red darken-1" @click="$vuetify.goTo('#app', {offset: 0})">
                    Top<v-icon medium class="ml-2">fas fa-arrow-circle-up</v-icon>
                </v-btn>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
  export default {
    data () {
      return {
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
        isSucceeded: false,
        isAlerted: false,
        name: '',
        nameErrors: [],
        email: '',
        emailErrors: [],
        message: '',
        messageErrors: [],
        isLoading: false,
      }
    },
    computed: {
      isDisabled () {
        if (this.name !== '' && this.email !== '' && this.message !== '') {
          return false;
        } else {
          return true;
        }
      }
    },
    mounted () {
      axios
        .get('/api/projects', {
          params: {
            locale: this.$i18n.locale,
          }
        })
        .then(response => (this.projects = response.data));
    },
    methods: {
      submit () {
        this.isSucceeded = false;
        this.isAlerted = false;
        this.nameErrors = [];
        this.emailErrors = [];
        this.messageErrors = [];
        this.isLoading = true;

        axios
          .post('api/inquiries', {
            name: this.name,
            email: this.email,
            message: this.message,
            locale: this.$i18n.locale,
          })
          .then(response => {
            this.name = '';
            this.email = '';
            this.message = '';
            this.isSucceeded = true;
          })
          .catch(error => {
            if (error.response.status === 422) {
              // Validation errors
              const errors = error.response.data.errors;
              this.nameErrors = typeof errors.name !== 'undefined' ? errors.name : [];
              this.emailErrors = typeof errors.email !== 'undefined' ? errors.email : [];
              this.messageErrors = typeof errors.message !== 'undefined' ? errors.message : [];
            } else {
              // Other errors
              this.isAlerted = true;
              this.name = '';
              this.email = '';
              this.message = '';
            }
          })
          .finally(() => this.isLoading = false);
      }
    }
  }
</script>
