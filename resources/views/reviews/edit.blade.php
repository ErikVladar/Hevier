<x-app-layout>
    <x-foreground>
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl py-10">
            <h1 class="text-2xl font-bold mb-6">Upraviť recenziu</h1>
            <form method="POST" action="{{ route('reviews.update', $review) }}" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-1">Meno</label>
                    <input type="text" name="name" value="{{ $review->name }}" class="w-full border rounded p-2"
                        required>
                </div>

                <div>
                    <label class="block mb-1">Recenzia</label>
                    <textarea name="text" rows="4" class="w-full border rounded p-2" required>{{ $review->text }}</textarea>
                </div>

                <div>
                    <label class="block mb-1">Hodnotenie (0–5)</label>
                    <input type="number" name="rating" value="{{ $review->rating }}" min="0" max="5" step="1"
                           class="w-full border rounded p-2" required>
                </div>
                
                <div>
                    <label class="block mb-1">Fotka (voliteľné)</label>
                    @if ($review->photo)
                        <img src="{{ asset('storage/imgs/' . $review->photo) }}" class="w-24 h-24 rounded-full mb-2">
                    @endif
                    <input type="file" name="photo" class="w-full">
                </div>

                <button type="submit" class="px-6 py-2 bg-yellow-600 text-white rounded-lg">Uložiť zmeny</button>
            </form>
        </div>
    </x-foreground>
</x-app-layout>
