<template>
    <div class="py-4 px-4 border-b flex justify-center">
        <inertia-link :href="route('home')" class="mr-4">
            Home
        </inertia-link>

        <inertia-link :href="route('posts.index')" class="mr-4">
            Posts
        </inertia-link>
    </div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <div>
            <inertia-link href="/">
                <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </inertia-link>
        </div>

        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<script>
    import BreezeApplicationLogo from '@/Components/ApplicationLogo'

    export default {
        components: {
            BreezeApplicationLogo,
        }
    }
</script>
