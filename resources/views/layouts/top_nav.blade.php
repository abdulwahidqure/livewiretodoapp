<nav x-data="{open:false}" id="header" class="bg-pink-500 fixed w-full z-10 top-0 shadow">
	<div class="w-full container mx-auto flex justify-between items-center mt-0 px-2 py-2">
		<!--Logo-->
		<div class="flex w-full">
			<a class="font-extrabold text-white no-underline hover:text-white hover:no-underline" href="#">
				<svg class="inline fill-current text-white h-6 mb-2 md:mb-3" viewBox="0 0 20 20"><path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path></svg> 
				<span class="text-2xl xl:text-3xl pl-2">Todo App</span>
			</a>
		</div>
		<!--/Logo-->
		<div class="w-3/4 flex items-center justify-end">
			{{-- Menu Toggle Button --}}
			<div class="px-4 flex items-center justify-center">
				<button @click="open = !open" class="outline:none">
					<svg
						class="h-6 w-6 fill-current"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						>
						<path
						class="hidden"
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
						/>
						<path
						fill-rule="evenodd"
						d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
						/>
					</svg>
				</button>
			</div>
			{{-- Menu Toggle Button End --}}
			
			<!--Profile-->
			<div class="flex justify-center items-center px-4">
				<div class="h-10 w-10 flex text-center justify-center items-center bg-gray-200">
					<img class="rounded-full cursor-pointer" src="{{asset('images/abdulwahid.jpg')}}" />
				</div>
			</div>
			<!--End Profile-->

		</div>
	</div>
	
		<!--Main Nav-->
		<div x-show="open" class="w-full bg-gray-200 shadow-md overflow-x-auto whitespace-no-wrap scrolling-touch">
			<ul class="container mx-auto flex border-b text-base animated bounceInRight">
				<li class="mr-1">
					<a href="https://www.alpinetoolbox.com/guides" class="tab">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" viewBox="0 0 20 20"><path d="M2,1.99079514 C2,0.891309342 2.89706013,0 4.00585866,0 L14.9931545,0 C15.5492199,0 16,0.443864822 16,1 L16,2 L5.00247329,2 C4.44882258,2 4,2.44386482 4,3 C4,3.55228475 4.44994876,4 5.00684547,4 L16.9931545,4 C17.5492199,4 18,4.44463086 18,5.00087166 L18,18.0059397 C18,19.1072288 17.1054862,20 16.0059397,20 L3.99406028,20 C2.8927712,20 2,19.1017876 2,18.0092049 L2,1.99079514 Z M6,4 L10,4 L10,12 L8,10 L6,12 L6,4 Z"></path></svg>	
					Users</a>
				</li>
				<li class="mr-1">
					<a href="https://www.alpinetoolbox.com/examples" class="active-tab">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" viewBox="0 0 20 20"><path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"></path></svg>
					Todos</a>
				</li>
				<li class="mr-1">
					<a href="https://www.alpinetoolbox.com/media" class="tab">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" viewBox="0 0 20 20"><path d="M2.929 17.071c3.905 3.905 10.237 3.905 14.142 0 3.905-3.905 3.905-10.237 0-14.142-3.905-3.905-10.237-3.905-14.142 0-3.905 3.905-3.905 10.237 0 14.142zm12.728-1.414A8 8 0 104.343 4.343a8 8 0 0011.314 11.314zM7 6l8 4-8 4V6z" fill="currentColor" fill-rule="evenodd"></path></svg>
					Archived</a>
				</li>
				
				<li class="mr-1">
					<a href="https://www.alpinetoolbox.com/tools" class="tab">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" viewBox="0 0 20 20"><path d="M6.47 9.8A5 5 0 0 1 .2 3.22l3.95 3.95 2.82-2.83L3.03.41a5 5 0 0 1 6.4 6.68l10 10-2.83 2.83L6.47 9.8z"></path></svg>
					Tools</a>
				</li>
				
				<li class="flex flex-1 justify-end">
					<a href="#" class="tab">
						<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg>
						Settings</a>
				</li>
			</ul>
		</div>
		<!--/Main Nav-->

		<!--Search Content-->
		<div id="search-content" class="relative w-full z-50">
			<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>
			<!-- No search results message-->
			<div id="nosearchresults" class="hidden flex px-6 bg-white">
				<svg class="fill-current text-indigo-600 h-6 w-6" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
				<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
			</div>
			<!-- / No search results -->
		</div>
		<!--/Search Content-->

	

</nav>