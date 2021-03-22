<template>
    <div class="py-4 px-4 border-b dark:border-gray-800 flex justify-center bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
        <inertia-link :href="route('home')" class="mr-4 dark:text-gray-300">
            Home
        </inertia-link>

        <inertia-link :href="route('posts.index')" class="mr-4 dark:text-gray-300">
            Posts
        </inertia-link>
    </div>
</template>
