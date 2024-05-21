<x-layout>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="note-container">
        <h2><a href="{{route('note.create')}}" class="new-note-btn">New Note</a></h2>
        <div class="notes">
            @foreach ($note as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note->note,20) }} 
                </div>
                <div class="note-buttons">
                    <a href="{{route('note.show',$note)}}" class="note-edit-button">View</a>
                    <a href="{{route('note.edit',$note)}}" class="note-edit-button">Edit</a>
                    {{-- <button class="note-delete-button">Delete</button> --}}
                    <form action="{{route('note.destroy',$note)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        {{-- {{ $note->links() }} --}}
    </div>
</x-layout>
