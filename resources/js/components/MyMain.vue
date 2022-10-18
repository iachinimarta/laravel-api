<template>
    <div class="container">
        <h1>All</h1>
        <div class="row">
            <div class="card col-12 mb-4" v-for="(post, index) in posts" :key="index">
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text">{{truncateText(post.content, 50)}}</p>
                    <p class="card-text">{{post.category?post.category.name:'undefined'}}</p>
                    <a href="#">Read post</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'MyMain',
        data() {
            return {
                posts: []
            }
        },
        methods: {
            getPosts() {
                axios.get('api/posts')
                .then((response) => {
                    this.posts = response.data.results;
                });
            },
            truncateText(text, maxLength) {
                if(text.length < maxLength) {
                    return text.substring(0, maxLength);
                } else {
                    return text.substring(0, maxLength) + '...';
                }
            }
        },
        mounted() {
            this.getPosts();
        }
    }
</script>

<style>

</style>