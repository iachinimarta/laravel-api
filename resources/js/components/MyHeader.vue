<template>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boolpress</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li v-for="(item, index) in menuItems" :key="index" class="nav-item">
                            <a class="nav-link active" aria-current="page" :href="item.link">{{ item.label }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        name: 'MyHeader',
        data() {
            return {
                menuItems : [
                {
                    label: 'Home', 
                    link: '#'
                },
                {
                    label: 'Blog', 
                    link: '#'
                },
                {
                    label: 'About Us', 
                    link: '#'
                },
                {
                    label: 'Contact', 
                    link: '#'
                }
            ]}  
        }
    }
</script>

<style>

</style>