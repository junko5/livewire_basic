<div>
    <form wire:submit.prevent="submit">
        @csrf
            <div>
                <div>
                    <input wire:model="name" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block sm:text-sm border-gray-300 rounded-md">
                    {{-- エラーメッセージ表示 --}}
                    @error('name') <span class="font-bold text-red-600">{{ $message }}</span> @enderror
                </div>
            <x-button class="mt-4">送信する</x-button>

            {{-- 保存後のメッセージ表示箇所 --}}
            @if (session()->has('message'))
            <div class="text-red-800">
                {{ session('message') }}
            </div>
            @endif

            </div>
    </form>
</div>