<fieldset>
    <div class="flex items-center space-x-3">
        <!--
          Active and Checked: "ring ring-offset-1"
          Not Active and Checked: "ring-2"
        -->
        @php
            $a = array_chunk($items, 5)[0];
            $b = array_chunk($items, 6)[1];
        @endphp

        @foreach($a as $item)
            <label class="{{  ($color === $item ? 'ring ring-offset-1 ' : '') }} -m-0.5  relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-{{ $item }}-500" wire:click="$set('color', '{{$item}}')">
                <input type="radio" name="color-choice" value="Pink" class="sr-only" aria-labelledby="color-choice-0-label">
                <p id="color-choice-0-label" class="sr-only">Pink</p>
                <span aria-hidden="true" class="h-8 w-8 bg-{{ $item }}-500 border border-black border-opacity-10 rounded-full"></span>
            </label>
        @endforeach


    </div>
    <div class="flex mt-4 items-center space-x-3">
        <!--
          Active and Checked: "ring ring-offset-1"
          Not Active and Checked: "ring-2"
        -->
        @foreach($b as $item)
            <label class="{{  ($color === $item ? 'ring ring-offset-1 ' : '') }} -m-0.5  relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-{{ $item }}-500" wire:click="$set('color', '{{$item}}')">
                <input type="radio" name="color-choice" value="Pink" class="sr-only" aria-labelledby="color-choice-0-label">
                <p id="color-choice-0-label" class="sr-only">Pink</p>
                <span aria-hidden="true" class="h-8 w-8 bg-{{ $item }}-500 border border-black border-opacity-10 rounded-full"></span>
            </label>
        @endforeach
    </div>
</fieldset>
