<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


export default {
  props: {
    response: {
      type: Object,
    }
  },
  components: {
    Link,
    AuthenticatedLayout,
  },
};
</script>


<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">新增課表</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div>
              <div class="flex">
                <div class="w-1/2">
                  <p>學年度</p>
                  <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                </div>
                <div class="ml-5 w-1/2">
                  <p>學期</p>
                  <input type="text" class="w-full rounded-md border-slate-400 shadow-sm">
                </div>
              </div>

              <div class="w-full h-[500px] flex justify-between mt-3 ">
                <div class="w-2/5 h-[500px] rounded-md border border-black">
                  <div
                    class="w-full h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold rounded-t-md">
                    全部課程</div>
                  <div class="flex">
                    <div class="w-1/2 h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold">
                      課程
                    </div>
                    <div class="w-1/2 h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold">
                      教師
                    </div>
                  </div>

                  <div class="flex">
                    <div class="w-1/2 h-[40px] border-b  text-center leading-[40px]">國語</div>
                    <div class="w-1/2 h-[40px] border-b  text-center leading-[40px]">Yvonne</div>
                  </div>

                </div>

                <div class="w-1 h-[500px] mt-[200px]">
                  <i class="fa-solid fa-arrow-right" style="font-size: 3em; transform: translateX(-50%);"></i>
                  <i class="fa-solid fa-arrow-left" style="font-size: 3em; transform: translateX(-50%);"></i>
                </div>

                <div class="w-2/5 h-[500px] rounded-md border border-black">
                  <div
                    class="w-full h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold rounded-t-md">
                    學期課程</div>
                  <div class="flex">
                    <div class="w-1/2 h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold">
                      課程
                    </div>
                    <div class="w-1/2 h-[40px] bg-slate-300 border-b border-black text-center leading-[40px] font-bold">
                      教師
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-5 flex justify-center">
                <Link href="./Test" type="button"
                  class="border border-black p-1 bg-slate-600 font-bold rounded-md text-white">返回列表
                </Link>
                <Link href="./Test" type="button"
                  class="border border-black p-1 bg-blue-500 font-bold rounded-md text-white ml-2">儲存
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>

</template>
