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
            <form class="block" @submit.prevent="submit()">
                <div class="my-3">
                    <label class="block text-sm font-medium" for="title">Titolo della News</label>
                    <input type="text" id="title" name="title" v-model="form.title" class="w-full border border-gray-300 rounded-lg">
                </div>
                <div class="my-3">
                    <label class="block text-sm font-medium">Titolo della News</label>
                    <textarea id="body" class="w-full border border-gray-300 rounded-lg resize-none" rows="10" v-model="form.body" />
                </div>

                <div>
                    <div class="flex justify-end mt-6">
                        <button class="text-white font-medium bg-gray-900 rounded-lg px-6 py-3" type="submit">Invia la news</button>
                    </div>
                </div>
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

const { auth } = defineProps({
    auth: Object
})

const form = useForm({
    title: '',
    body: ''
})

function submit() {
    form.transform((data) => ({
        ...data,
        user_id: auth.user.id
    }))
    .post(route('news.create'))
}
</script>
