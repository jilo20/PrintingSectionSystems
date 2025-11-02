@vite('resources/css/app.css')

@include('layouts.header-auth')

<h1 class="text-2xl font-bold mb-4">Welcome to create</h1>

<form action="/requests" method="post" class="space-y-4">
    @csrf 

    <!-- Service Type Dropdown -->
    <label for="service_type" class="block font-medium">Select Service Type:</label>
    <select name="service_type" id="service_type" class="border rounded px-2 py-1 w-64">
        <option value="" selected disabled>Select a service</option>
        <option value="RISOGRAPH">Risograph</option>
        <option value="PHOTOCOPY">Photocopy</option>
        <option value="LAMINATE">Lamination</option>
        <option value="SORT">Sort</option>
        <option value="PRINT">Print</option>
    </select>

    <!-- RISOGRAPH -->
    <div id="riso" class="grid grid-cols-2 gap-2 w-64 hidden mt-4">
        <h3 class="col-span-2 font-bold">RISOGRAPH</h3>

        <label for="original">Original</label>
        <input type="number" id="original" name="original" min="0">

        <label for="copies">Copies</label>
        <input type="number" id="copies" name="copies" min="0">

        <label for="type_of_paper">Type of Paper</label>
        <input type="text" id="type_of_paper" name="type_of_paper">

        <label for="isB2B">
            <input type="checkbox" id="isB2B" name="isB2B" value="1">
            B2B
        </label>

        <label for="forwarded_by">Forwarded By</label>
        <input type="text" id="forwarded_by" name="forwarded_by">

        <label for="requested_by">Requested By</label>
        <input type="text" id="requested_by" name="requested_by">
    </div>

    <!-- PHOTOCOPY -->
    <div id="photocopy" class="grid grid-cols-2 gap-2 w-64 mt-6 hidden">
        <h3 class="col-span-2 font-bold">PHOTOCOPY</h3>

        <label for="photo_original">Original</label>
        <input type="number" id="photo_original" name="photo_original" min="0">

        <label for="photo_copies">Copies</label>
        <input type="number" id="photo_copies" name="photo_copies" min="0">

        <label for="photo_type_of_paper">Type of Paper</label>
        <input type="text" id="photo_type_of_paper" name="photo_type_of_paper">

        <label for="photo_isB2B">
            <input type="checkbox" id="photo_isB2B" name="photo_isB2B" value="1">
            B2B
        </label>

        <label for="photo_forwarded_by">Forwarded By</label>
        <input type="text" id="photo_forwarded_by" name="photo_forwarded_by">

        <label for="photo_requested_by">Requested By</label>
        <input type="text" id="photo_requested_by" name="photo_requested_by">
    </div>

    <!-- LAMINATE -->
    <div id="laminate" class="grid grid-cols-2 gap-2 w-64 mt-6 hidden">
        <h3 class="col-span-2 font-bold">LAMINATE</h3>

        <label for="laminate_originals">Originals</label>
        <input type="number" id="laminate_originals" name="laminate_originals" min="0">

        <label for="laminate_forwarded_by">Forwarded By</label>
        <input type="text" id="laminate_forwarded_by" name="laminate_forwarded_by">

        <label for="laminate_requested_by">Requested By</label>
        <input type="text" id="laminate_requested_by" name="laminate_requested_by">
    </div>

    <!-- SORT -->
    <div id="sort" class="grid grid-cols-2 gap-2 w-64 mt-6 hidden">
        <h3 class="col-span-2 font-bold">SORT</h3>

        <label for="sort_copies">Copies</label>
        <input type="number" id="sort_copies" name="sort_copies" min="0">

        <label for="sort_forwarded_by">Forwarded By</label>
        <input type="text" id="sort_forwarded_by" name="sort_forwarded_by">

        <label for="sort_requested_by">Requested By</label>
        <input type="text" id="sort_requested_by" name="sort_requested_by">
    </div>

    <!-- PRINT -->
    <div id="print" class="grid grid-cols-2 gap-2 w-64 mt-6 hidden">
        <h3 class="col-span-2 font-bold">PRINT</h3>

        <label for="print_originals">Originals</label>
        <input type="number" id="print_originals" name="print_originals" min="0">

        <label for="print_copies">Copies</label>
        <input type="number" id="print_copies" name="print_copies" min="0">

        <label for="print_type_of_paper">Type of Paper</label>
        <input type="text" id="print_type_of_paper" name="print_type_of_paper">

        <label for="print_isB2B">
            <input type="checkbox" id="print_isB2B" name="print_isB2B" value="1">
            B2B
        </label>

        <label for="print_forwarded_by">Forwarded By</label>
        <input type="text" id="print_forwarded_by" name="print_forwarded_by">

        <label for="print_requested_by">Requested By</label>
        <input type="text" id="print_requested_by" name="print_requested_by">
    </div>

    <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Submit Request</button>
</form>

<a href="/requests" class="mt-4 inline-block">Back to requests</a>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const type = document.getElementById('service_type');
        const sections = {
            "RISOGRAPH": document.getElementById('riso'),
            "PHOTOCOPY": document.getElementById('photocopy'),
            "LAMINATE": document.getElementById('laminate'),
            "SORT": document.getElementById('sort'),
            "PRINT": document.getElementById('print')
        };

        type.addEventListener('change', () => {
            const selected = type.value;
            // Hide all sections
            Object.values(sections).forEach(sec => sec.classList.add('hidden'));
            // Show selected section
            if (sections[selected]) sections[selected].classList.remove('hidden');
        });
    });
</script>
