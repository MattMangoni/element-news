<template>
    <Head title="Aggiungi news" />

    <div>
        <page-header>
            Aggiungi una news
        </page-header>
        <page-content>
            <form @submit.prevent="form.post('/login')"></form>
        </page-content>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import { useForm } from '@inertiajs/inertia-vue3'
import PageHeader from "@/Layouts/Shared/PageHeader"
import PageContent from "@/Layouts/Shared/PageContent"


</script>
