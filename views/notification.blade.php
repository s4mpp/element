<div x-data="{showNotification: false, title: '', text: ''}">
<div 
x-on:show-notification.window="function() {
	if(showNotification == true)
	{
		window.clearTimeout(timeoutHandle);

		showNotification = false;

		window.setTimeout(function() {
			title=$event.detail.title;
			text=$event.detail.text;
			showNotification = true;
			timeoutHandle = window.setTimeout(function() {showNotification=false}, 2000)
		}, 400)

	}
	else
	{
		showNotification = true;
		title=$event.detail.title;
		text=$event.detail.text;
		timeoutHandle = window.setTimeout(function() {showNotification=false}, 2000)
	}
}"

aria-live="assertive" class="pointer-events-none z-40 fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6" >
   <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
    <div x-cloak
    x-show="showNotification"
    x-transition:enter="transform ease-out duration-400 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="opacity-400"
    x-transition:leave-end="opacity-0"
    
    class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="p-4">
        <div class="flex items-start">
          <div class="flex-shrink-0">
            <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="ml-3 w-0 flex-1 pt-0.5">
            <p class="text-sm font-medium text-gray-900" x-text="title"></p>
            <p class="mt-1 text-sm text-gray-500" x-text="text"></p>
          </div>
          <div class="ml-4 flex flex-shrink-0">
            <button x-on:click="showNotification = false" type="button" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="sr-only">Close</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
