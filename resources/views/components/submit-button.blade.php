<div>
    <button wire:loading.class="cursor-not-allowed opacity-50" wire:loading.attr="disabled" wire:target='addTodo' type="submit" {{ ($submitButton)?'':'disabled' }} class="tw-btn-md tw-btn-main {{ ($submitButton)?'':'opacity-50 cursor-not-allowed' }}">
        <div wire:loading.remove wire:target='{{$wireTarget}}'>
            SUBMIT
        </div>
        <svg wire:loading wire:target='{{$wireTarget}}' class="animate-spin -ml-1 mr-3 h-5 w-5 text-white block-inline" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <div wire:loading wire:target='{{$wireTarget}}'>
        Processing
        </div>
        
    </button>
</div>