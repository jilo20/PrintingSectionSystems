<head>@vite('resources/css/app.css')</head>
<x-header-guest>
    <form action="/register" method="POST">
        @csrf
        <div class="bg-background flex flex-col border-2 border-borderline w-[25em] rounded-md mt-16 shadow-xl p-8 items-center gap-6 my-4 transition-all duration-200">
            <h1 class="text-3xl font-bold">Create an account</h1>

            <input type="text" class="input-1 w-full" placeholder="First Name" name="fname" value="{{old('fname')}}">
            <input type="text" class="input-1 w-full" placeholder="Last Name" name="lname" value="{{old('lname')}}">
            <input type="text" class="input-1 w-full" placeholder="Email" name="email" value="{{old('email')}}">
            <input type="password" class="input-1 w-full" placeholder="Password" name="password">
            <input type="password" class="input-1 w-full" placeholder="Repeat Password" name="password_confirmation">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/css/multi-select-tag.min.css">
            <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/js/multi-select-tag.min.js"></script>
            
            <div class="w-full">
                <select name="deptId" id="departments">
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            

            <script>
                new MultiSelectTag('departments', {
                    maxSelection: 1,
                    required: true,
                    placeholder: 'Select a department',
                    onChange: (selected) => console.log('Selection changed:', selected)
                });
            </script>
            
            <div class="w-full">
                <select name="role" id="role">
                    <option value="3">READS</option>
                    <option value="2">Staff/Teacher</option>
                    <option value="1">Office Head</option>
                </select>
            </div>
            

            <script>
                new MultiSelectTag('role', {
                    maxSelection: 1,
                    required: true,
                    placeholder: 'Select a role',
                    onChange: (selected) => console.log('Selection changed:', selected)
                });
            </script>

            <a href="#" class="btn-2 text-xs font-light self-start">Already have an account?</a>
            <button class="btn-1">Register</button>
        </div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
</x-header-guest>