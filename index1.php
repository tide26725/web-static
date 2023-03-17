<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>

    <!-- Vuetify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <v-app>

            <!-- Navigation Bar -->
            <v-app-bar app>
                <v-toolbar-title>My Website</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn text>Home</v-btn>
                <v-btn text>About Us</v-btn>
                <v-btn text>Contact Us</v-btn>
            </v-app-bar>

            <!-- Main Content -->
            <v-content>
                <v-container fluid>
                    <v-row>

                        <!-- Sidebar -->
                        <v-col cols="12" sm="4" md="3">
                            <v-card class="mb-3">
                                <v-card-title>Categories</v-card-title>
                                <v-list>
                                    <v-list-item-group>
                                        <v-list-item>Category 1</v-list-item>
                                        <v-list-item>Category 2</v-list-item>
                                        <v-list-item>Category 3</v-list-item>
                                    </v-list-item-group>
                                </v-list>
                            </v-card>
                        </v-col>

                        <!-- Main Content Area -->
                        <v-col cols="12" sm="8" md="9">
                            <v-card class="mb-3">
                                <v-card-title>Latest News</v-card-title>
                                <v-card-text>
                                    <v-row>
                                        <v-col cols="12" md="4">
                                            <v-card>
                                                <v-card-media src="https://via.placeholder.com/300x200"></v-card-media>
                                                <v-card-title>Title 1</v-card-title>
                                                <v-card-text>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" md="4">
                                            <v-card>
                                                <v-card-media src="https://via.placeholder.com/300x200"></v-card-media>
                                                <v-card-title>Title 2</v-card-title>
                                                <v-card-text>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" md="4">
                                            <v-card>
                                                <v-card-media src="https://via.placeholder.com/300x200"></v-card-media>
                                                <v-card-title>Title 3</v-card-title>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>
            </v-content>
        </v-app>
    </div>
</body>
<footer>
    
</footer>