import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Movie from "./components/movie.vue";
const app=createApp({
    components:{
        Movie,
    }
});

app.mount("#app");
