{{-- todo add modal --}}
<div>
@if($show)
<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-25 shadow-lg animated fadeIn faster px-3
">
<!-- modal -->
<div class="bg-white shadow-lg md:w-1/2 w-full">
<!-- modal header -->
<div class="flex justify-between items-center bg-red-500 text-white shadow-lg">
<div></div>
<h3 class="font-bold text-lg relative">DELETE CONFIRMATION</h3>
<button wire:click='hideDeleteTodoModal' class="text-white h-10 w-10 flex items-center justify-center hover:bg-red-700">&cross;</button>
</div>
<!-- modal body -->
<div class="pb-10 flex-col text-center justify-center items-center">
    <div class="p-3">
        Are you sure, you want to delete this record?
    </div>
    <div>
        <button wire:click='deleteTodo' class="tw-btn-md tw-btn-main bg-red-500 hover:bg-red-700">Delete</button>
    </div>
</div>
</div>
</div>
@endif
</div>
{{-- todo add modal --}}