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
            
            <div class="border-2 border-blue-300 p-3  bg-gray-100 shadow-lg rounded-lg">
                <div class="flex justify-between items-center gap-4">
                    <p class="font-light text-gray-400">Request: 32x8ujwy</p>
                    <h1 class="p-2 bg-green-800 text-white font-semibold text-2xl flex-1 text-center">
                        School of Computer Studies
                    </h1>
                    <p class="p-2 bg-yellow-300 text-gray-800">6/28/2005</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>

                <div class="flex justify-between mt-4 overflow-hidden mb-4">
                    <p class="flex-1 text-center">Requested By: <span class="underline"><br>John Leeroy Gadiane</span> </p>
                    <p class="flex-1 text-center">Forwarded By: <span class="underline"><br>Josh Rostata</span> </p>
                    <p class="flex-1 text-center">Received By: <span class="underline"><br>Edwin Allanic</span></p>
                    <p class="flex-1 text-center">Approved By: <span class="underline"><br>Mrs. Cuizon</span></p>
                </div>
                
                <div class="flex w-full bg-green-400 justify-between text-center py-2 font-semibold">
                    <div class="flex-1">OriginalxCopies</div>
                    <div class="flex-1">Paper Type</div>
                    <div class="flex-1">isB2B</div>
                    <div class="flex-1">Description</div>
                    <div class="flex-1">Service Type</div>
                    <div class="flex-1">Cost</div>
                </div>
                <div class="flex w-full bg-gray-100 border-b border-gray-300 justify-between text-sm text-center py-2 font-base">
                    <div class="flex-1">3x512</div>
                    <div class="flex-1">US Bondpaper</div>
                    <div class="flex-1">Yes</div>
                    <div class="flex-1">First Periodical Exam in Math</div>
                    <div class="flex-1">Risograph</div>
                    <div class="flex-1">&#x20B1;1500</div>
                </div>
            </div>
            
        </div>

    </div>

</div>






