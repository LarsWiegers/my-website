<template>
    <breeze-guest-layout>
        <ul>
            <li v-for="post in posts" :key="post.id">
                <inertia-link :href="route('posts.show', post.id)" class="dark:text-gray-300">- {{ post.title }}</inertia-link>
            </li>
        </ul>
    </breeze-guest-layout>
</template>

<script>
    import BreezeGuestLayout from '@/Layouts/Guest'

    export default {
        props: [
            'posts'
        ],
        components: {
            BreezeGuestLayout,
        },
    }
</script>
