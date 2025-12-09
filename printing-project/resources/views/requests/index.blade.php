@vite('resources/css/app.css')
@include('layouts.header-auth')

<div class="flex flex-col items-center mt-10 w-full">
    
    {{-- Create Request Button --}}
    <a href="/requests/create"
       class="block bg-secondary p-4 w-40 text-center font-bold text-gray-800 
              hover:bg-primary hover:text-white 
              transition-all duration-300 rounded-lg shadow-md">
        Create Request
    </a>

    {{-- Request List --}}
    <div class="flex justify-center w-full mt-6">

        <div class="border border-gray-300 w-[90%] min-w-[60rem] p-5 shadow-lg flex flex-col gap-2">

            @foreach ($requestforms as $requestform)
            
            <div class="border-2 border-blue-300 p-3 bg-gray-100 shadow-lg rounded-lg cursor-pointer">
                <div class="flex justify-between items-center gap-4 clickable">
                    <p class="font-light text-gray-400">Request ID: {{ $requestform->requestFormId }}</p>
                    <h1 class="p-2 bg-green-800 text-white font-semibold text-2xl flex-1 text-center">
                        {{ $requestform->department->deptName ?? 'N/A' }}
                    </h1>
                    <p class="p-2 bg-yellow-300 text-gray-800">{{ $requestform->date }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25" />
                    </svg>
                </div>

                <div class="max-h-0 transition-[max-height] duration-500 overflow-hidden panel">
                    <div class="flex justify-between mt-4 overflow-hidden mb-4">
                        <p class="flex-1 text-center">Requested By: <span class="underline"><br>{{ $requestform->requestedBy }}</span></p>
                        <p class="flex-1 text-center">Forwarded By: <span class="underline"><br>{{ $requestform->forwardedBy }}</span></p>
                        <p class="flex-1 text-center">Received By: <span class="underline"><br>{{ $requestform->receivedBy }}</span></p>
                        <p class="flex-1 text-center">Approved By: <span class="underline"><br>{{ $requestform->approvedBy }}</span></p>
                    </div>
                    
                    {{-- JOB TABLE HEADER --}}
                    <div class="flex w-full bg-green-400 justify-between text-center py-2 font-semibold">
                        <div class="flex-1">Original×Copies</div>
                        <div class="flex-1">Paper Type</div>
                        <div class="flex-1">isB2B</div>
                        <div class="flex-1">Description</div>
                        <div class="flex-1">Service Type</div>
                        <div class="flex-1">Cost</div>
                    </div>

                    {{-- JOBS LOOP --}}
                    @php $count = 0; @endphp
                    @foreach ($requestform->requestJobs as $job)
                    @php $count++; @endphp
                    <div class="flex w-full @if($count%2==1) bg-gray-100 @else bg-gray-300 @endif border-b border-gray-300 justify-between text-sm text-center py-2 font-base">
                        <div class="flex-1">{{ $job->originals }} × {{ $job->copies }}</div>
                        <div class="flex-1">
                            @if($job->paperType === 0)
                                Newsprint
                            @elseif($job->paperType === 1)
                                US Bondpaper
                            @elseif($job->paperType === 2)
                                ColorBond
                            @endif
                        </div>
                        <div class="flex-1">{{ $job->isB2B ? 'Yes' : 'No' }}</div>
                        <div class="flex-1">{{ $job->description ?? 'N/A' }}</div>
                        <div class="flex-1">{{ $job->service_type }}</div>
                        <div class="flex-1">&#x20B1;{{ number_format($job->cost, 2) }}</div>
                    </div>
                    @endforeach
                        <div class="bg-yellow-200 w-full flex justify-between px-6 border-t border-yellow-900">
                            <span class="flex-1">Total Cost =</span> 
                            <span class="text-center w-24">&#x20B1;{{$requestform->totalCost}}</span>
                        </div>

                    <div class="flex justify-around mt-4 font-light">
                        @if($requestform->status === 'In Progress')
                            <p >Status: <span class="text-yellow-400 font-semibold"> {{ $requestform->status }} </span></p>
                        @else
                            <p >Status: <span class="text-green-700 font-semibold"> {{ $requestform->status }} </span></p>
                        @endif
                        <p>Time in: {{ $requestform->timeIn ?? '—' }}</p>
                        <p>Time out: {{ $requestform->timeOut ?? '—' }}</p>
                    </div>
                </div>

                
            </div>

            @endforeach
        </div>

    </div>
</div>

<script>
    document.querySelectorAll('.clickable').forEach((clickable) => {
    clickable.addEventListener('click', function() {
        // find the panel that is a sibling of this clickable
        let panel = this.nextElementSibling;
        if(panel.style.maxHeight){
            panel.style.maxHeight = null; // collapse
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px"; // expand
        }
    });
});
</script>
