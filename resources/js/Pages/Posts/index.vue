<template>
    <breeze-guest-layout class="max-w-6xl">
        <ul>
            <li v-for="post in posts" :key="post.id">
                <inertia-link :href="route('posts.show', post.id)" class="dark:text-gray-300">- {{ post.title }}
                    <span class="float-right">{{ post.readingTime }}</span>
                </inertia-link>
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
