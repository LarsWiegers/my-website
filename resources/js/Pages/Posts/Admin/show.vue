<template>
    <breeze-guest-layout>
        <h1 class="font-bold text-4xl">
            {{ post.title }}
        </h1>
        <p class="leading-5">
            {{ post.body }}
        </p>
    </breeze-guest-layout>
</template>

<script>
    import BreezeGuestLayout from '@/Layouts/Guest'

    export default {
        props: [
            'post'
        ],
        components: {
            BreezeGuestLayout,
        },
    }
</script>
