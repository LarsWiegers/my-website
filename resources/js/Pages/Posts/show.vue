<template>
    <breeze-guest-layout>
        <template v-slot:navigation>
            <ul>
                <li v-for="chapter in chapters" v-html="chapter" class="list-disc mb-4"></li>
            </ul>
        </template>
        <p class="-ml-6 -mr-6 -my-4 py-3 mb-4 px-6 bg-gray-200 text-gray-700 dark:text-gray-200 dark:bg-gray-700" style="width: 150%">Estimated reading time: {{estimatedTime}}</p>
        <h1 class="font-bold text-4xl dark:text-gray-200">
            {{ post.title }}
        </h1>
        <p class="leading-5 post-body dark:text-gray-200 " v-html="post.laraberg_content.rendered_content"></p>
    </breeze-guest-layout>
</template>

<script>
    import BreezeGuestLayout from '@/Layouts/Guest'

    export default {
        props: [
            'post',
            'estimatedTime',
            'chapters',
        ],
        meta: function () {
            return [
                { name: 'description', content: this.post.title }
            ]
        },
        components: {
            BreezeGuestLayout,
        },
    }
</script>
