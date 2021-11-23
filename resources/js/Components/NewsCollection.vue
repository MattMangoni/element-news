<template>
    <div v-for="news in newsData" :key="news.id">
        <news-item :news="news" />
    </div>
</template>

<script setup>
import NewsItem from '@/Components/NewsItem'

defineProps({ newsData: Array })
</script>
