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
        <v-jumbotron>
            <v-container fill-height>
                <v-layout align-center>
                    <v-flex text-xs-center>
                        <div class="display-3">Welcome to my portfolio</div>
                        <div class="headline">Web Engineer</div>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-jumbotron>
        <v-layout row wra fill-height>
            <v-flex xs6 offset-xs3>
                <h3 class="headline teal--text text--darken-1">About</h3>
                <p>I have been working as a Web Engineer for fourth year.</p>
            </v-flex>
        </v-layout>
    </v-app>
</template>
