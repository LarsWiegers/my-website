<template>
    <div>
        <div class="py-24 bg-gray-100 dark:bg-gray-600"></div>
        <footer class="border-t dark:border-gray-800 w-full p-8 bg-white dark:bg-gray-700">
            <div class=" flex justify-center items-center">
                <div class="mr-4">
                    <inertia-link href="/">
                        <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </inertia-link>
                </div>
                <div>
                    <ul class="flex">
                        <li class="mx-4 my-2 text-md">
                            <inertia-link :href="route('posts.index')" class="underline dark:text-white">Posts</inertia-link>
                        </li>
                        <li class="mx-4 my-2 text-md">
                            <a href="https://twitter.com/LarsWiegers" class="underline dark:text-white">
                                <span class="label">Twitter</span>
                            </a>
                        </li>
                        <li class="mx-4 my-2 text-md">
                            <a href="https://linkedin.com/in/larswiegers" class="underline dark:text-white">
                                <span class="label">LinkedIn</span>
                            </a>
                        </li>
                        <li class="mx-4 my-2 text-md">
                            <a href="mailto:larswiegers@live.nl" class="underline dark:text-white">
                                <span class="label">Email</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</template>
