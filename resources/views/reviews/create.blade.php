<x-app-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Pridať recenziu</h1>
        <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block mb-1">Meno</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block mb-1">Recenzia</label>
                <textarea name="text" rows="4" class="w-full border rounded p-2" required></textarea>
            </div>

            <div>
                <label class="block mb-1">Fotka (voliteľné)</label>
                <input type="file" name="photo" class="w-full">
            </div>

            <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg">Uložiť</button>
        </form>
    </div>
</x-app-layout>
