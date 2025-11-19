@vite('resources/css/app.css')

@include('layouts.header-auth')
@php
    $jobs = session('jobs',[]);
@endphp

<form action="{{ route('requests.store') }}" method="post">
    @csrf
    <div class="w-full flex justify-center mt-20">
        <div class="w-3/4">
            <input type="text" placeholder="Requested By" name="requestedBy" class="w-[49.5%]" required>
            <input type="text" placeholder="Forwarded By" name="forwardedBy" class="w-[49.5%]" required>

            <div class="grid grid-cols-7 bg-green-600 text-gray-100 font-semibold mt-5 py-4 text-center">
                <div>Original</div>
                <div>Copies</div>
                <div>Paper Type</div>
                <div>B2B</div>
                <div>Service Type</div>
                <div class="col-span-2">Description</div>
            </div>


            <div id="jobs-table" class="">
                
            </div>
            <div class="flex lg:w-full h-12 items-center flex-row mt-2 w-[40em] overflow-hidden justify-between">
                <div>
                    <button type="button" id="add-job" class="bg-green-800  font-base text-white px-4 py-2 rounded">Add Job</button>
                    <button type="button" id="remove-job" class="bg-red-800  font-base text-gray-200 px-4 py-2 rounded">Remove Job</button>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Generate Request</button>
                </div>
                <x-link-button class="">I dont know any of these</x-link-button>
            </div>
            
        </div>
    </div>
</form>

@if (session('success'))
    <div class="bg-green-500 text-white p-3 rounded mt-2">
        {{ session('success') }}
    </div>
@endif


<script>
    let jobstable = document.getElementById('jobs-table');
    let addjob = document.getElementById('add-job');
    let removejob = document.getElementById('remove-job');

    removejob.addEventListener('click', function(){
        let jobs = document.getElementsByClassName('jobs');
        let job = jobs[jobs.length -1];
        job.remove();
    });

    addjob.addEventListener('click', function(){
        let newjob =  document.createElement('div');
        let jobs = document.getElementsByClassName('jobs');
        newjob.innerHTML = `
            <div class="grid grid-cols-7 mt-2 gap-2 jobs">
                <input type="text" name="originals[]" class="border p-1" placeholder="# of originals">
                <input type="text" name="copies[]" class="border p-1" placeholder="# of copies">
                <select name="paperType[]">
                    <option value="" selected>Select a Paper Type</option>
                    <option value="0">US Bondpaper</option>
                    <option value="1">Newsprint Paper</option>
                    <option value="2">Color Bondpaper</option>
                </select>
                <select name="isB2B[]">
                    <option value="0" >No</option>
                    <option value="1" >Yes</option>
                </select>
                <select name="service_type[]">
                    <option value="RISOGRAPH" >RISOGRAPH</option>
                    <option value="PHOTOCOPY" >PHOTOCOPY</option>
                    <option value="LAMINATION">LAMINATION</option>
                    <option value="SORT">SORT</option>
                </select>
                <input type="text" name="description[]" class="border p-1 col-span-2">
            </div>
        `;
        jobstable.append(newjob);
    });

</script>

