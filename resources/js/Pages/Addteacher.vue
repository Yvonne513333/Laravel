<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

export default {
    data() {
        return {
            teachers: this.response,
            teachersData: {
                teachers_name: '',
                teachers_describe:'',
            }
        };
    },
    props: {
        response: {
            type: Object,
        }
    },

    components: {
        Link,
        AuthenticatedLayout,
    },
    methods: {
    addteacher() {
        this.$inertia.post('/Addteacher', this.teachersData)
            .then(() => {
                // 在新增成功後再訪問 Teacherlist 頁面，並將 response 設置為 teachersData
                this.$inertia.visit('/Teacherlist', { props: { response: this.teachersData } });
            });
    },
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
                                    <option>國文</option>
                                    <option>英文</option>
                                    <option>數學</option>
                                </select>
                                <label class="leading-[40px] block text-gray-700 text-xl font-bold mb-2" for="class">
                                </label>
                            </div>
                            <div>
                                <p>教師姓名</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm" v-model="teachersData.teachers_name">
                            </div>
                            <div class="mt-5">
                                <p>教師簡介</p>
                                <input type="text" class="w-full rounded-md border-slate-400 shadow-sm" v-model="teachersData.teachers_describe">
                            </div>
                                <div class="mt-5 flex justify-center">
                                <Link href="./Teacherlist" type="button"
                                    class="border border-black p-1 bg-slate-600 font-bold rounded-md text-white">返回列表
                                </Link>
                                <button type="button"
                                    class="border border-black p-1 bg-blue-500 font-bold rounded-md text-white ml-2" @click="addteacher">儲存
                            </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>
