@props(['comment'])
<div class="rounded-lg border bg-gray-100 px-6 py-4">
    <div class="mb-6 flex items-center">
        <img src="https://randomuser.me/api/portraits/men/{{ $comment->id }}.jpg" alt="Avatar" class="mr-4 h-12 w-12 rounded-full">
        <div>
            <div class="text-lg font-medium text-gray-800">{{ $comment->author->username }}</div>
            <div class="text-xs text-gray-500">
                Posted
                {{ $comment->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    <p class="mb-3 text-lg leading-relaxed">
        {{ $comment->body }}
    </p>

</div>
