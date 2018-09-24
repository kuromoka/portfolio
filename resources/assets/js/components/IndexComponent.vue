<template>
    <v-container fluid pa-0>
        <v-layout align-center header>
            <v-flex xs12 md6 offset-md3>
                <h1 class="display-1 white--text">Language Selection</h1>
            </v-flex>
        </v-layout>
        <v-layout align-center mt-4>
            <v-flex xs12 md6 offset-md3>
                <v-layout wrap>
                    <v-flex xs12 language>
                        <p>
                            Thank you for coming my portfolio website!
                        </p>
                        <p>
                            Please select your language.
                        </p>
                        <v-btn flat color="secondary" href="/en">English</v-btn>
                        <v-btn flat color="secondary" href="/ja">日本語</v-btn>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>
</template>
