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

        <div class="w-full sm:max-w-lg md:max-w-prose max-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
        <footer class="mt-16 bg-white border-t w-full p-8 flex justify-center items-center">
            <div class="mr-4">
                <inertia-link href="/">
                    <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </inertia-link>
            </div>
            <div>
                <ul class="flex">
                    <li class="mx-4 my-2 text-md">
                        <inertia-link :href="route('posts.index')" class="underline">Posts</inertia-link>
                    </li>
                    <li class="mx-4 my-2 text-md">
                        <a href="https://twitter.com/LarsWiegers" class="underline">
                            <span class="label">Twitter</span>
                        </a>
                    </li>
                    <li class="mx-4 my-2 text-md">
                        <a href="https://linkedin.com/in/larswiegers" class="underline">
                            <span class="label">LinkedIn</span>
                        </a>
                    </li>
                    <li class="mx-4 my-2 text-md">
                        <a href="mailto:larswiegers@live.nl" class="underline">
                            <span class="label">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
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
