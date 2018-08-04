<template>
    <v-app>
        <v-toolbar app color="primary">
            <v-layout row wrap>
                <v-flex xs8 offset-xs2>
                    <v-toolbar-items>
                        <v-btn flat dark>Top</v-btn>
                        <v-btn flat dark>About</v-btn>
                        <v-btn flat dark>Skills</v-btn>
                        <v-btn flat dark>Projects</v-btn>
                    </v-toolbar-items>
                </v-flex>
            </v-layout>
        </v-toolbar>
        <v-content>
            <v-container fluid>
                <v-layout align-center>
                    <v-flex xs6 offset-xs3>
                        <v-layout align-center fill-height>
                            <v-flex text-xs-center>
                                <v-jumbotron height="200px">
                                    <div class="display-3">Welcome to my portfolio</div>
                                    <div class="headline">Web Engineer</div>
                                </v-jumbotron>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap justify-space-between>
                            <v-flex xs12>
                                <h3 class="headline teal--text text--darken-1">About</h3>
                                <p>Hi, I'm Web Engineer. I have mainly been working as PHP Engineer.</p>
                                <p>Now I'm working as PHP Engineer in ad technology company of Tokyo.</p>
                            </v-flex>
                            <v-flex xs12 mt-3>
                                <h3 class="headline teal--text text--darken-1">Skills</h3>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>
