@vite('resources/css/app.css')
@include('layouts.header-auth')

@php
$count = 0;
$images = [
    'https://fastly.picsum.photos/id/431/200/300.jpg?hmac=aUpIWBq8svIaK2ruTnNG-BZuvcDsK9Mr9PuJuYAYEQ0',
    'https://fastly.picsum.photos/id/164/200/300.jpg?hmac=lJgBIETeK-yv_xtPn_UpKfg8s9N38Jw6UzxnDF-m0sc',
    'https://fastly.picsum.photos/id/585/200/300.jpg?hmac=9pIkZ1OAqMKxQt7_5yNLOWAjZBmJ99k53TBNs3xQQe4',
    'https://fastly.picsum.photos/id/350/200/300.jpg?hmac=lAscVz0d1YWlAi5moOrwmJ0E7KNtxtLyHkE2pq3qnh8',
    'https://fastly.picsum.photos/id/605/200/300.jpg?hmac=XxO9Fq91nFhrH3zq-9AlrpU84EnKslY5CeTA_6dBlRg',
    'https://fastly.picsum.photos/id/618/200/200.jpg?hmac=749yPgO2NHLB8qH92MCDtCjdkglAPh6-J4CygmoI2JY',
    'https://fastly.picsum.photos/id/327/200/300.jpg?hmac=4XafWFg8DGNzz5ATxgKAXnhZmeCXdFEtK86ehmyQlE4'
];
@endphp

<style>
    *{ object-fit: cover }
</style>

<div class="flex ml-20 h-[90.5%]">

    <div class=" absolute flex flex-col border-r-2 border-gray-300 w-[25em] h-full bg-gray-100 z-0">
        <div class="w-full p-6">
            <p class="font-extrabold text-[2em]">Chats</p>
            <input type="text" class="rounded-md opacity-60" placeholder="Search users">
        </div>

        @if (Auth::user()->role !== 0)
            <div class="userBox flex flex-col cursor-pointer"
                data-id="printing"
                data-name="Printing Section"
                data-img="{{ asset('images/usjrcampus.jpg') }}">
                <div class="p-4 flex items-center gap-4 bg-gray-200 hover:bg-gray-100">
                    <img src="{{ asset('images/usjrcampus.jpg') }}" class="rounded-full w-20 h-20">
                    <div class="flex flex-col">
                        <p class="text-lg">Printing Section</p>
                        <p class="text-sm text-gray-400">Di diay ko | 3h</p>
                    </div>
                    <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
                </div>
            </div>
        @else
            @foreach ($users as $user)
                <div class="userBox flex flex-col cursor-pointer"
                     data-id="{{ $user->userId }}"
                     data-name="{{ $user->fname }} {{ $user->lname }}"
                     data-img="{{ $images[$count] }}">
                    <div class="p-4 flex items-center gap-4 bg-gray-200 cursor-pointer hover:bg-gray-100 hover:pl-6 transition-all duration-5">
                        <img src="{{ $images[$count] }}" class="rounded-full w-20 h-20">
                        <div class="flex flex-col">
                            <p class="text-lg">{{ $user->fname }} {{ $user->lname }}</p>
                            <p class="text-sm text-gray-400">Can I add 3 more copies.. | 3h</p>
                        </div>
                        <div class="h-3 w-3 ml-auto bg-green-500 rounded-full"></div>
                    </div>
                </div>
                @php $count++; @endphp
            @endforeach
        @endif

    </div>

    <div class="w-full ml-[25em] bg-gray-200 h-24 p-2 pl-4">
        <div class="flex justify-between">
            <div class="flex gap-4">
                <div class="relative inline-block">
                    <img id="chatHeadImg"
                        src="https://media.gettyimages.com/id/2579843/photo/lebron-james-poses.jpg?s=2048x2048&w=gi&k=20&c=Pfk3AhAceDkZGDca5JPihpCZaPmKuXVh4B-3euX6T5U="
                        class="rounded-full w-20 h-20 border border-gray-100">
                    <div class="absolute bottom-0 right-0 bg-green-400 h-4 w-4 rounded-full border-2 border-white"></div>
                </div>
                <div class="flex flex-col justify-center">
                    <p id="chatHeadName" class="font-semibold text-xl">Lebron James</p>
                    <p class="font-light text-sm">Active now</p>
                </div>
            </div>

            <div class="mt-4">
                <button class="border-2 border-red-600 text-red-600 py-[.5em] px-[2em] rounded-md mr-10 origin-center hover:py-[.6em] hover:px-[2.1em] transition-all duration-500"> Report</button>
                <button class="border-2 border-gray-800 text-gray-800 py-[.5em] px-[2em] rounded-md origin-center hover:py-[.6em] hover:px-[2.1em] transition-all duration-500"> Block</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.userBox').forEach(box => {
            box.addEventListener('click', function () {
                document.querySelectorAll('.userBox').forEach(b => b.classList.remove('bg-gray-300'));
                this.classList.add('bg-gray-300');

                document.getElementById('chatHeadName').textContent = this.dataset.name;
                document.getElementById('chatHeadImg').src = this.dataset.img;
                document.querySelector('input[name="receiverId"]').value = this.dataset.id;
            });
        });
    </script>

    <div class="fixed bottom-0 left-[30em] right-0 bg-gray-200 h-24 p-4 flex items-center gap-2">
        <form action="{{ route('sendMessage') }}" method="post" class="flex w-full">
            @csrf
            <input type="text" name="message" class="flex-1 rounded-lg h-14 px-4" placeholder="Type your message...">
            <input type="hidden" name="receiverId" value="">
            <button type="submit" class="ml-2 px-6 bg-green-800 text-white rounded-lg">Send</button>
        </form>
    </div>

</div>
