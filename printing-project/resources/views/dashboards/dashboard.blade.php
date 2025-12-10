@include ('layouts.header-auth')

<div class="ml-20 grid grid-cols-4 gap-6 p-6">
    <x-card class="col-span-2 text-center sm:overflow-x-hidden flex flex-col gap-x-4 gap-y-2 row-span-2">
        <h4 class="font-extrabold text-3xl px-16 text-green-800">
            PENDING REQUESTS
        </h4>
        <div>
            @foreach ($requests as $request)
            @if($request->status === 'In Progress'):
                <div class="bg-yellow-300 font-bold text-2xl p-2 mt-2"> 
                    {{ $request->department->deptName }}
                </div>
                <div class="grid grid-cols-2 border border-b-2 border-l-2 border-r-2">
                    <p class="col-span-2">Requested By: <span class="underline">{{ $request->requestedBy }}</span></p>

                    <div class="flex flex-col text-center truncate">
                        <p>Descriptions:</p>
                         <span class="underline text-sm h-4">
                        @foreach ($request->requestJobs as $job)
                        <p>{{$job->description}}...</p>
                        @endforeach
                        </span>
                    </div>
                    <div class="flex flex-col text-center">
                        <p>Forwarded Date:</p>
                        <span class="underline text-sm">
                        <p>{{$request->date}}</p></span>
                    </div>
                    <div class="mt-4">
                        <p>Forwarded By:</p>
                        <span class="underline text-sm">
                        <p>{{ $request->forwardedBy }}</p></span>
                    </div>
                    <div class="mt-2">
                        <p>Status:</p>
                        <div>
                            <form action="{{ route('requestforms.complete', $request->requestFormId) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="bg-yellow-400 text-sm rounded-full p-2 hover:bg-green-600 hover:text-gray-200 transition-all duration-500">
                                    {{ $request->status }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </x-card>

    <div class="flex flex-col gap-4">
        <p class="font-base text-gray-700 text-center">Highest Requests</p>
        <x-card>
            <p class="text-lg text-green-800 font-bold text-center">Mr. John Leeroy Gadiane made</p>
            <p class="-mt-2 text-[5em] text-center text-gray-900 font-extrabold">42</p>
            <p class="text-sm text-gray-500 text-center -mt-6">requests this month</p>
        </x-card>
    </div>

    <div class="flex flex-col gap-4">
        <p class="font-base text-gray-700 text-center">Total Requests</p>
        <x-card>
            <p class="text-lg text-green-800 font-bold text-center">This month made</p>
            <p class="-mt-2 text-[5em] text-center text-gray-900 font-extrabold">128</p>
            <p class="text-sm text-gray-500 text-center -mt-6">requests this month</p>
        </x-card>
    </div>
    
    <div class="flex flex-col gap-4 col-span-2">
        <p class="font-base text-gray-700 text-center">Most Requests Departments</p>
        <x-card>
            <img src="{{asset('images/barchart.jpg') }}" class="object-cover">
        </x-card>
    </div>
    <div class="flex flex-col gap-4 col-span-4">
        <x-card class="flex flex-col items-center">
            <p class="font-extrabold text-green-800 text-3xl text-center mb-4">REVENUE CHART</p>
            <img src="{{asset('images/linegraph.jpg') }}" class="object-cover">
        </x-card>
    </div>
</div>

<script>
    let status = document.getElementById('status');

    status.addEventListener('mouseenter', () => {
        status.textContent = 'Completed?';
    });

    status.addEventListener('mouseleave', () => {
        status.textContent = 'In Progress';
    });
</script>