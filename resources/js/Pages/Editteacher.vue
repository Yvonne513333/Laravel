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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">新增課程</h2>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <div class="mb-4 flex text-center h-[40px]">
                                <select
                                    class="w-[300px] block appearance-none  bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5"
                                    id="class">
                                    <option>請選課程</option>
                                </select>
                                <label class="leading-[40px] block text-gray-700 text-xl font-bold mb-2" for="class">
                                </label>
                            </div>
                            <div>
                                <p>教師姓名</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                            </div>
                            <div class="mt-5">
                                <p>教師簡介</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>
