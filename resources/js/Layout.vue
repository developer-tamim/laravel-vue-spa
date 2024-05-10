<template>
  <div>
      <!-- <Example/> -->
      <Posts/>
  </div>
</template>

<script>
import Example from './components/Example.vue';
import Posts from './components/Posts.vue';


export default {
    name: 'Layout',
    components: {
        // Example,
        Posts
    }
};
</script>

