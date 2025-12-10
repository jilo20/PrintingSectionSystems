{{-- @foreach($messages as $msg)
    <div class="mb-2 {{ $msg->senderId == $authUser->userId ? 'text-right' : 'text-left' }}">
        <span class="inline-block px-4 py-2 rounded-lg
            {{ $msg->senderId == $authUser->userId ? 'bg-blue-500 text-white' : 'bg-gray-300 text-black' }}">
            {{ $msg->content }}
        </span>
        <p class="text-xs text-gray-400">
            {{ $msg->created_at->format('H:i, M d') }}
        </p>
    </div>
@endforeach --}}
