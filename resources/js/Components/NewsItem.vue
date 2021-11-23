<template>
    <div class="mb-2 px-4 py-3 bg-white rounded-lg flex justify-between items-center">
        <div>
            <h3 class="font-bold text-gray-800 text-lg">{{ news.title }}</h3>
            <p class="text-xs text-gray-400">Inserita da: <strong>{{ news.newser.username }}</strong> ({{ news.newser.email }})</p>
        </div>
        <div>
            <p class="px-2 py-1 text-xs text-white rounded-lg font-bold" :class="status.class">{{ status.label }}</p>
        </div>
    </div>
</template>

<script setup>
import { computed } from "vue";

const { news } = defineProps({ news: Object })

const status = computed(() => ({
    label: news.isDiscussion ? 'Discussione' : 'Notizia Breve',
    class: news.isDiscussion ? 'bg-green-500' : 'bg-red-500'
}))
</script>
