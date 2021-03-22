<template>
    <guest-navigation></guest-navigation>

    <div class="min-h-screen pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-600">
        <div class="mx-auto w-20 pt-16 pb-16">
            <inertia-link href="/" aria-label="go to homepage">
                <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </inertia-link>
        </div>
        <div class="mx-auto">
            <div class="sticky w-64 p-8 bg-white dark:bg-gray-700 dark:text-white rounded-lg" style="top: 3rem; left: 18%;">
                <slot name="navigation"></slot>
            </div>
            <div class="mx-auto -mt-96 relative w-full sm:max-w-lg md:max-w-prose max-xl mt-6 px-6 py-4 bg-white dark:bg-gray-700 shadow-md overflow-hidden sm:rounded-lg">
                <slot />
            </div>
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
