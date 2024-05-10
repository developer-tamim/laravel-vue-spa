import './bootstrap';

import { createApp } from 'vue';
// import Example from './components/Example.vue';
// import About from './components/About.vue';
import Layout from './Layout.vue';

// const app = createApp({
//     components: {
//         Example,
//         About,
//     }
// })



const app = createApp();

// app.component("Example", Example)
// app.component("About", About)
app.component("Layout", Layout)

app.mount("#app");
