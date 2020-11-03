

    <div class="flex-grow container mx-auto px-4 pt-6 pb-8">
        <div class="flex-col">
            {{-- search and filters area --}}
            <div class="flex-col flex space-y-3 md:space-y-0 md:flex-row md:flex-no-wrap items-stretch w-full md:justify-end md:space-x-1">
              
              {{-- row item --}}
              <div class="">
                  <input wire:model='search' type="text" id="search" name="search" class="tw-form-input tw-form-input-sm" placeholder="Seach..."/>
              </div>
              {{-- row item --}}
              {{-- row item --}}
              <div class="flew-row flex space-x-1">
                <button wire:click.prefetch="showAddTodoModal" class="tw-btn-sm tw-btn-main">Add New</button>
                <button wire:click.prefetch="showAddTodoModal" class="tw-btn-sm tw-btn-main">Add New</button>
              </div>
              {{-- row item --}}
              

            </div>
            {{-- search and filters area --}}
            
            {{-- table or form area --}}
            
            {{-- pagination links --}}
            <div class="mt-3 mb-3">
                  {{$todos->links()}}
            </div>
            {{-- pagination links --}}

            <div  class="overflow-x-auto whitespace-no-wrap scrolling-touch">
                <table class="table-auto w-full cursor-pointer">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 border">Sr#</th>
                        <th class="px-4 py-2 border">Author Name</th>
                        <th class="px-4 py-2 border">Todo Date Time</th>
                        <th class="px-4 py-2 border">Task Description</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($todos as $todo)
                            
                        <tr wire:key="{{ $loop->index }}" class="bg-gray-100 hover:bg-gray-200 hover:shadow-lg transition duration-500 ease-in-out animated slideDown fadeOut">
                            <td  class="border px-4 py-2 hover:bg-gray-300 hover:shadow-lg transition duration-500 ease-in-out">{{$loop->iteration}}</td>
                            <td class="border px-4 py-2 hover:bg-gray-300 hover:shadow-lg transition duration-500 ease-in-out">{{$todo->author}}</td>
                            <td class="border px-4 py-2 hover:bg-gray-300 hover:shadow-lg transition duration-500 ease-in-out">{{$todo->created_at}}</td>
                            <td class="border px-4 py-2 hover:bg-gray-300 hover:shadow-lg transition duration-500 ease-in-out"> {{$todo->task}} </td>
                            <td class="border px-4 py-2 hover:bg-gray-300 hover:shadow-lg transition duration-500 ease-in-out">
                                <div class="sm:flex sm:flex-row sm:space-y-0 space-x-1 space-y-2">
                                    <button wire:click='showDeleteTodoModal({{$todo->id}})' class="bg-red-500 border px-2 py-1 rounded hover:bg-red-700 hover:shadow-lg focus:bg-red-400 text-white">Delete</button>
                                    <button wire:click="showEditTodoModal({{$todo->id}})" class="tw-btn-sm tw-btn-main">Edit</button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td>No record found.</td></tr>
                        @endforelse
                    
                    </tbody>
                </table>
              </div>
              {{-- pagination links --}}
              <div class="mt-3">
                {{$todos->links()}}
              </div>
              {{-- pagination links --}}
              
            </div>
            
          </div>
          
          
    
    <div class="bg-white border-t">
      <div class="container mx-auto px-4">
        <div class="md:flex justify-between items-center text-sm">
          <div class="text-center md:text-left py-3 md:py-4 border-b md:border-b-0">
            <a href="#" class="no-underline text-grey-dark mr-4">Home</a>
            <a href="#" class="no-underline text-grey-dark mr-4">Careers</a>
            <a href="#" class="no-underline text-grey-dark">Legal &amp; Privacy</a>
          </div>
          <div class="md:flex md:flex-row-reverse items-center py-4">
            <div class="text-center mb-4 md:mb-0 md:flex">
              <div>
                <a href="#" class="inline-block leading-tight bg-blue border border-blue-dark hover:bg-blue-dark px-3 py-2 no-underline rounded">Need help?</a>
              </div>
            </div>
            <div class="text-grey text-center md:mr-4">&copy; 2017 Cointoad</div>
          </div>
        </div>
      </div>
    </div>
    <div>
    <livewire:todos.add-todo-modal :key="12213213" >
    <livewire:todos.edit-todo-modal :key="234234234" >
    <livewire:todos.delete-todo-modal :key="3443423432" >

    <script>
      window.addEventListener('livewire:load', () => {
          @this.on('showAddTodoModal', () => {
              setTimeout(() => {
                document.querySelector('#author').focus()
              }, 500);
              
          })

          @this.on('showEditTodoModal', () => {
              setTimeout(() => {
                document.querySelector('#author').focus()
                
              }, 500);
              
          })
      })
  </script>
    </div>
    {{-- @livewire('todos.add-todo-modal', ['show' => $showModal]) --}}