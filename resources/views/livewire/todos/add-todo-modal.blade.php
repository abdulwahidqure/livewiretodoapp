{{-- todo add modal --}}
<div>
  @if($show)    
<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-25 shadow-lg animated fadeIn faster">
<!-- modal -->
<div class="bg-white rounded-b-xl shadow-lg w-1/2">
<!-- modal header -->
<div class="flex justify-between items-center bg-blue-500 text-white shadow-lg">
<div></div>
<h3 class="font-bold text-lg relative">ADD A TODO</h3>
<button wire:click='hideAddTodoModal' class="text-white h-10 w-10 flex items-center justify-center hover:bg-blue-700">&cross;</button>
</div>
<!-- modal body -->
<div class="p-3">
<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
<div class="pb-10">
    <form wire:submit.prevent.lazy="addTodo" autocomplete="off">
        <div>
            <label for="author" class="block text-sm font-medium">
                Author
            </label>

            <div class="mt-1">
                <input wire:model="author" id="author" name="author" type="text" placeholder="Jane Doe" class="tw-form-input tw-form-input-md w-full @error('author') tw-form-input-error @enderror" />
            </div>

            @error('author')
                <p class="mt-2 text-sm text-red-600">
                   {{ $message }} 
                </p>
            @enderror
        </div>
        <div>
            <label for="task" class="block text-sm font-medium text-gray-700 leading-5">
                Task
            </label>

            <div class="mt-1">
                <input wire:model="task" id="task" name="task" type="text" class="tw-form-input tw-form-input-md w-full @error('task') tw-form-input-error @enderror" />
            </div>

            @error('task')
                <p class="mt-2 text-sm text-red-600">
                   {{ $message }} 
                </p>
            @enderror
        </div>

        <div class="mt-6">
            <span class="block w-full">
                <x-submit-button wireTarget="addTodo" submitButton="{{$submitButton}}"></x-submit-button>
            </span>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endif
</div>
{{-- todo add modal --}}