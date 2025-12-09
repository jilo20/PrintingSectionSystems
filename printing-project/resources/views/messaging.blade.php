@vite('resources/css/app.css')
@include('layouts.header-auth')

<style>
    *{
        object-fit: cover
    }
</style>

<div class="flex ml-20 h-[90.5%] gap-2">
    <!-- Sidebar parent -->
    <div class="flex flex-col border-r-2 border-gray-300 w-[25em] h-full bg-gray-100">
        <div class="w-full p-6">
            <p class="font-extrabold text-[2em]">Chats</p>
        </div>
        <!-- All items stacked in one column -->
        <div class="flex flex-col">
            <!-- Item 1 -->
            <div class="p-4 flex items-center gap-4 bg-gray-200">
                <img src="https://media.gettyimages.com/id/2579843/photo/lebron-james-poses.jpg?s=2048x2048&w=gi&k=20&c=Pfk3AhAceDkZGDca5JPihpCZaPmKuXVh4B-3euX6T5U=" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Lebron James</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            <!-- Item 2 -->
            <div class="p-4 flex items-center gap-4">
                <img src="https://media.gettyimages.com/id/2077895368/photo/scholz-receives-filipino-president-marcos.jpg?s=2048x2048&w=gi&k=20&c=yhNr75QWlhVejhtwb6_nguFgbsUCBBk-oatpydkt2iE=" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Bongbong Marcos</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            <div class="p-4 flex items-center gap-4">
                <img src="https://media.gettyimages.com/id/1403805173/photo/philippines-inaugurates-incoming-vp-sara-duterte.jpg?s=2048x2048&w=gi&k=20&c=bfPBtBb-8zNG_unxaw3GzHoJ_S74GB0euHHobXQuIrk=" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Sarah Duterte</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            <div class="p-4 flex items-center gap-4">
                <img src="https://media.gettyimages.com/id/142085195/photo/portrait-of-ferdinand-magellan.jpg?s=612x612&w=gi&k=20&c=I9oXQKVhg9V-jt5IPpuqXKIUVai9o_J27pctglAIaw8=" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Jeffrey Goral</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            <div class="p-4 flex items-center gap-4">
                <img src="https://media.gettyimages.com/id/1257641093/photo/stone-and-bark-centipede.jpg?s=2048x2048&w=gi&k=20&c=zkEhCncahOapCTe2lU7fWgTKOUHjsDWBiohtVa7k8Pg=" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Kuan hipan</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            <div class="p-4 flex items-center gap-4">
                <img src="{{ asset('images/piolo.png') }}" class="rounded-full w-20 h-20">
                <div class="flex flex-col">
                    <p class="text-lg">Jeffrey Goral</p>
                    <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                </div>
                <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
            </div>

            
        </div>

    </div>
    <div class="w-full bg-gray-200 h-24 p-2 pl-4">
        <div class="flex justify-between">
            <div class="flex gap-4">
                <div class="relative inline-block">
                    <img src="https://media.gettyimages.com/id/2579843/photo/lebron-james-poses.jpg?s=2048x2048&w=gi&k=20&c=Pfk3AhAceDkZGDca5JPihpCZaPmKuXVh4B-3euX6T5U=" 
                        class="rounded-full w-20 h-20 border border-gray-100">
                    <div class="absolute bottom-0 right-0 bg-green-400 h-4 w-4 rounded-full border-2 border-white"></div>
                </div>
                <div class="flex flex-col justify-center">
                                <p class="font-semibold text-xl">Lebron James</p>
                                <p class="font-light text-sm">Active now</p>
                </div>
            </div>

            <div class="mt-4">
                <button class="border-2 border-red-600 text-red-600 py-2 px-10 rounded-md mr-10"> Report</button>
                <button class="border-2 border-gray-800 text-gray-800 py-2 px-10 rounded-md"> Block</button>
            </div>
        </div>
        
    </div>
</div>

