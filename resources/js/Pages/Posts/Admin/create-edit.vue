<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex flex-row justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>

                <a :href="route('admin.posts.create')">
                    Create
                </a>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <breeze-validation-errors class="mb-4" />
                        <form method="POST" @submit.prevent="post?.id ? form.put(route('admin.posts.update', post)) : form.post(route('admin.posts.store'))">
                            <breeze-label for="title" value="Title:" />
                            <breeze-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autocomplete="title" />
                            <breeze-label for="body" value="Body:" class="mt-6" />
                            <breeze-textarea id="body" type="textarea" cols="40" rows="20" class="mt-1 block w-full" v-model="form.body" required autocomplete="body" />
                            <breeze-button type="submit" class="mt-6">
                                Save
                            </breeze-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeButton from '@/Components/Button'
    import BreezeInput from '@/Components/Input'
    import BreezeCheckbox from '@/Components/Checkbox'
    import BreezeLabel from '@/Components/Label'
    import BreezeTextarea from '@/Components/Textarea'
    import BreezeValidationErrors from '@/Components/ValidationErrors'
    export default {
        props: [
            'post',
        ],
        data() {
            return {
                form: this.$inertia.form({
                    title: this.post?.title ?? '',
                    body: this.post?.body ?? '',
                })
            }
        },
        components: {
            BreezeButton,
            BreezeInput,
            BreezeCheckbox,
            BreezeLabel,
            BreezeValidationErrors,
            BreezeAuthenticatedLayout,
            BreezeTextarea,
        },
    }
</script>
