<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


export default {
    props: {
        response: {
            type: Object,
        }
        // books:{
        //     type:Array,
        // },
        // count:{
        //     type:Number,
        // },
        // title:{
        //     type:String,
        // },
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課表列表</h2>
        </template>

        <!-- <div class="p-2">
        <div>書名：{{ response.books[0].name }} </div>
        <div>數量：{{ response.count }} </div>
        <div>書店：{{ response.title }} </div>
        <div>書名: {{ books[0].name }}</div>
        <div>count：{{ count }}</div>
        <div>title：{{ title }}</div>
    </div>

    <Link href="/" class="p-2 mt-1">回首頁</Link> -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <Link href="./Semesteraddclass" type="button"
                        class="border border-black p-1 bg-green-500 font-bold rounded-md text-white ml-5 mt-5">新增</Link>

                    <div class="p-6 text-gray-900 flex justify-center">
                        <table class="w-[800px] text-center border-collapse border border-slate-400">
                            <thead>
                                <tr>
                                    <th class="border border-slate-400">序號</th>
                                    <th class="border border-slate-400">學年</th>
                                    <th class="border border-slate-400">學期</th>
                                    <th class="border border-slate-400 w-[200px]">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-400">1</td>
                                    <td class="border border-slate-400">113</td>
                                    <td class="border border-slate-400">上學期</td>
                                    <td class="border border-slate-400">
                                        <button type="button"
                                            class="border border-black p-1 bg-blue-500 font-bold rounded-md text-white">編輯
                                        </button>
                                        <button type="button"
                                            class="border border-black p-1 bg-rose-600 font-bold rounded-md text-white ml-2">刪除
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-400">2</td>
                                    <td class="border border-slate-400">113</td>
                                    <td class="border border-slate-400">下學期</td>
                                    <td class="border border-slate-400">
                                        <button type="button"
                                            class="border border-black p-1 bg-blue-500 font-bold rounded-md text-white">編輯
                                        </button>
                                        <button type="button"
                                            class="border border-black p-1 bg-rose-600 font-bold rounded-md text-white ml-2">刪除
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>

</template>
