<template>
    <breeze-guest-layout>
        <p class="-ml-6 -mr-6 -my-4 py-3 mb-4 px-6 bg-gray-200 text-gray-700" style="width: 150%">Estimated reading time: {{estimatedTime}}</p>
        <h1 class="font-bold text-4xl">
            {{ post.title }}
        </h1>
        <p class="leading-5 post-body " v-html="post.laraberg_content.rendered_content"></p>
    </breeze-guest-layout>
</template>

<script>
    import BreezeGuestLayout from '@/Layouts/Guest'

    export default {
        props: [
            'post',
            'estimatedTime',
        ],
        components: {
            BreezeGuestLayout,
        },
    }
</script>
