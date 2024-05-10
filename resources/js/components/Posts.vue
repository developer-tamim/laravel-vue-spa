<template>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">CREATED AT</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.content }}</td>
                    <td>{{ post.created_at }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { onMounted } from 'vue';
import usePosts from '../composables/posts'

export default {
    setup(){
        const { posts, getPosts } = usePosts()
        onMounted(getPosts)

        return {posts}
    },
    name: "Posts",
    // data() {
    //     return{
    //         posts:[]
    //     }
    // },
    // mounted() {
    //     this.fetchPosts()
    // },
    // methods: {
    //     fetchPosts(){
    //         axios.get('/api/posts')
    //         .then(response => this.posts = response.data)
    //         .catch(error => console.log(error))
    //     }
    // }
};
</script>
