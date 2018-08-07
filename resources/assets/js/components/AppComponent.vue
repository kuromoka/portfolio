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
                                <p>Now I'm working as PHP Engineer in the ad technology company of Tokyo.</p>
                            </v-flex>
                            <v-flex xs12 mt-3>
                                <h2 class="headline indigo--text text--darken-1">Skills</h2>
                                I
                                <v-layout row wrap>
                                    <v-flex xs3 v-for="skill in skills" :key="skill.name">
                                        <h3>{{ skill.name }}</h3>
                                        <v-progress-circular size="128" color="primary" v-model="skill.value">{{ skill.value }}</v-progress-circular>
                                    </v-flex>
                                </v-layout>
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
        skills: [
          { name: "PHP", value: 100 },
          { name: "JavaScript", value: 80 },
        ],
      }
    }
  }
</script>
