<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({
    user: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <Head :title="user.name" />

    <AuthenticatedLayout :title="user.name">
        <div class="rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center space-x-5">
                    <div class="shrink-0">
                        <img
                            :src="`https://i.pravatar.cc/150?u=${user.id}`"
                            :alt="user.name"
                            class="size-24 rounded-full border-4 border-white object-cover shadow"
                        />
                    </div>
                    <div class="min-w-0 flex-1">
                        <h2 class="truncate text-2xl font-bold text-gray-900">
                            {{ user.name }}
                        </h2>
                        <div class="mt-1 text-sm text-gray-500">
                            <span>{{ user.email }}</span>
                        </div>
                    </div>
                    <div
                        class="space-x-3 whitespace-nowrap px-6 py-4 text-right text-sm font-medium"
                    >
                        <ModalLink
                            :dusk="`edit-user-${user.id}`"
                            :href="route('users.edit', user)"
                            class="text-indigo-600 hover:text-indigo-900"
                        >
                            Edit
                        </ModalLink>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
