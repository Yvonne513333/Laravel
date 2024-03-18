<!-- 尚未做 -->
<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

export default {
    props: {

    },

    components: {
        Link,
        AuthenticatedLayout,
    },
};

</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯課程</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <div>
                                <p>課程名稱</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                            </div>
                            <div class="mt-5">
                                <p>課程簡介</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                            </div>
                            <div class="mt-5">
                                <p>課程照片</p>
                                <input type="file" class="p-1 rounded-md">
                            </div>
                            <div class="mt-5 flex justify-center">
                                <button type="button"
                                    class="border border-black p-1 bg-slate-600 font-bold rounded-md text-white">返回列表
                                </button>
                                <button type="button"
                                    class="border border-black p-1 bg-blue-500 font-bold rounded-md text-white ml-2">儲存
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>
