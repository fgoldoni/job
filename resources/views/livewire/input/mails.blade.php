<fieldset class="my-8">
    <legend class="sr-only">Choose a memory option</legend>
    <div class="grid grid-cols-3 gap-3 lg:grid-cols-6">
        <!--
         In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
         Active: "ring-2 ring-offset-2 ring-indigo-500"
         Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"
       -->
        @foreach($items as $item)
            <label class="{{  ($mailDriver === $item ? 'bg-' . config('setting.color') . '-600 border-transparent text-white hover:bg-' . config('setting.color') . '-700 ' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50 ') }} border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none" wire:click="$set('mailDriver', '{{$item}}')">
                <input type="radio" name="memory-option" value="4 GB" class="sr-only" aria-labelledby="memory-option-0-label">
                <p id="memory-option-0-label">{{ $item }}</p>
            </label>
        @endforeach
    </div>
</fieldset>
