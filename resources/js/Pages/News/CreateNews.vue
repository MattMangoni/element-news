<template>
    <Head title="Aggiungi news" />

    <div>
        <page-header>
            <div class="flex justify-between items-center">
                <h1>Aggiungi una news</h1>
                <Link class="text-sm font-normal" :href="route('latest-episode')">Torna alla pagina iniziale</Link>
            </div>
        </page-header>
        <page-content>
            <form @submit.prevent="form.post('/login')">
                // TODO: create form
            </form>
        </page-content>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import { Head } from '@inertiajs/inertia-vue3'
import { useForm } from '@inertiajs/inertia-vue3'
import PageHeader from "@/Layouts/Shared/PageHeader"
import PageContent from "@/Layouts/Shared/PageContent"
</script>
