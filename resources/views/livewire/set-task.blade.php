<div>
@if(auth()->user()->all_roles()->contains('Admin'))
    <form wire:submit.prevent="submit">


        <div class="mt-4 w-2/3 flex justify-center mx-auto">
            <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mb-10" rows="5" name="name" wire:model.lazy="name"  placeholder="Messege"></textarea>

        </div>
        <button class="primary-btn uppercase w-1/3 flex justify-center mx-auto"  >Set a task </button>

    </form>
    @if (session()->has('message'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            {{ session('message') }}
        </div>
    @endif
@endif
</div>
