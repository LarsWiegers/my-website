<template>
    <guest-navigation></guest-navigation>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-600">

        <div>
            <inertia-link href="/" aria-label="go to homepage">
                <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </inertia-link>
        </div>

        <div class="w-full sm:max-w-lg md:max-w-prose max-xl mt-6 px-6 py-4 bg-white dark:bg-gray-700 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
    <guest-footer></guest-footer>
</template>

<script>
    import BreezeApplicationLogo from '@/Components/ApplicationLogo'
    import GuestNavigation from '@/Layouts/GuestNavigation'
    import GuestFooter from '@/Layouts/GuestFooter'

    export default {
        components: {
            BreezeApplicationLogo,
            GuestNavigation,
            GuestFooter,
        }
    }
</script>
