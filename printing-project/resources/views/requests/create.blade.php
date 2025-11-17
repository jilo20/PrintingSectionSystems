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

            <div class="flex bg-green-600 text-gray-100 font-semibold mt-5 py-4 text-center">
                <div class="px-4 w-1/6">Original</div>
                <div class="px-4 w-1/6">Copies</div>
                <div class="px-4 w-1/6">Paper Type</div>
                <div class="px-4 w-1/6">B2B</div>
                <div class="px-10 w-2/6">Description</div>
            </div>

            <div id="jobs-table" class="">
                
            </div>

            <button type="button" id="add-job" class="btn-1 text-white px-4 py-2 mt-2 rounded">Add Job</button>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 mt-4 rounded">Generate Request</button>
        </div>
    </div>
</form>


<script>
    let jobstable = document.getElementById('jobs-table');
    let addjob = document.getElementById('add-job');

    addjob.addEventListener('click', function(){
        let newjob =  document.createElement('div');
        newjob.innerHTML = `
            <div class="flex mt-2 gap-2">
                    <input type="text" class="w-1/6 border p-1">
                    <input type="text" class="w-1/6 border p-1">
                    <input type="text" class="w-1/6 border p-1">
                    <input type="text" class="w-1/6 border p-1">
                    <input type="text" class="w-2/6 border p-1">
            </div>
        `;
        jobstable.append(newjob);
    });

</script>