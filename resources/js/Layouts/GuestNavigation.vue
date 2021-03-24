<template>
    <div class="flex bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
        <div class="flex-none w-5/6  py-4 px-4 border-b dark:border-gray-800 flex justify-center">
            <inertia-link :href="route('home')" class="pt-2 ml-80 mr-4 dark:text-gray-300">
                Home
            </inertia-link>

            <inertia-link :href="route('posts.index')" class="pt-2 mr-4 dark:text-gray-300">
                Posts
            </inertia-link>
        </div>
        <div class="flex-initial justify-self-end border-b dark:border-gray-800 w-1/6">
            <search></search>
        </div>
    </div>
</template>
<script>
    import search from './Search';
    export default {
        components: {
            search
        }
    }
</script>
