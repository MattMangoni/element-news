<template>
    <Head title="Ultimo episodio" />

    <div>
        <page-header>
            Episodio del {{ episode.scheduledFor }}
        </page-header>
        <page-content>
            <news-collection :news-data="episode.news" />
            <div class="flex justify-end mt-6">
                <Link class="text-xs text-white font-bold bg-blue-300 rounded-lg px-4 py-2" :href="route('news.create')">Aggiungi una news</Link>
            </div>
        </page-content>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import { Link } from "@inertiajs/inertia-vue3";
import NewsCollection from '@/Components/NewsCollection'
import PageHeader from "@/Layouts/Shared/PageHeader"
import PageContent from "@/Layouts/Shared/PageContent"

defineProps({ episode: Object })
</script>
