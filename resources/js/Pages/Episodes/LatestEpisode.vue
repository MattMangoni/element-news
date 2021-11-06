<script setup>
    import { Link } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        episode: Object
    })
</script>

<template>
    <div class="max-w-2xl mx-auto flex justify-center py-12">
        <div class="w-full">
            <h2 class="mb-4 text-3xl font-black">Episodio del {{ props.episode.scheduledFor }}</h2>

            <div class="bg-gray-100 rounded-lg my-1 px-8 py-4">
                <div v-for="news in props.episode.news" :key="news.title">
                    <h6 class="font-bold"><Link :href="route('news.show', news.slug)">{{ news.title }}</Link></h6>
                    <p class="text-xs text-gray-600">scritta da: {{ news.newser.username }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
