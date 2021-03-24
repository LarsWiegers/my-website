<template>
    <div class="relative py-2 pr-2">
        <div class="py-2 pr-2">
            <input type="search" name="search" v-model="search" @keyup="runSearch" class="bg-gray-100 rounded-xl w-full px-8 dark:bg-gray-700 dark:text-gray-400">
        </div>
        <ul class="absolute mt-8 my-2 mr-2 dark:bg-gray-700 dark:text-gray-400 p-3" style="width: 95%;" v-show="results.length > 0">
            <li v-for="result in results" :key="result.url">
                <a :href="result.url" class="mb-4">{{ result.text }}</a>
            </li>
        </ul>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                search: '',
                results: [],
            }
        },
        methods: {
            runSearch() {
                axios.get('/search' + '?search=' + this.search).then((response) => {
                    this.results = response.data;
                })
                .catch((response) => {
                    this.results = response;
                })
            }
        }
    }
</script>
