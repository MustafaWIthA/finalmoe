<div>
    <div class="absolute inset-0 overflow-hidden">
        <section class="absolute inset-y-0 right-0 pl-10  max-w-md flex sm:pl-16 mt-20">
          <!--
            Slide-over panel, show/hide based on slide-over state.
    
            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
          <div class="w-screen max-w-md ">
            <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
              <div class="flex-1">
                <!-- Header -->
                <header class="px-4 py-6 bg-gray-50 sm:px-6">
                  <div class="flex items-start justify-between space-x-3">
                    <div class="space-y-1">
                      <h2 class="text-lg leading-7 font-medium text-gray-900">
                        Upload Document
                      </h2>
                      
                      <p class="text-sm text-gray-500 leading-5">
                        <div  x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                        </div>
                        <div wire:loading wire:target="document">Uploading...</div>
                        @error('document') <span class="error">{{ $message }}</span> @enderror
                      </p>
                    </div>
                    <div class="h-7 flex items-center">
                      <button aria-label="Close panel" class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                        <!-- Heroicon name: x -->
                        <svg @click="isDoc = !isDoc" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </header>

                <div class="py-6 space-y-6 sm:py-0 sm:space-y-0 sm:divide-y sm:divide-gray-200">
                  <!-- Project name -->
                  <div class="space-y-1 px-4 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
                    <div>
                      <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900 sm:mt-px sm:pt-2">
                        Project name
                      </label>
                    </div>
                    <div class="sm:col-span-2">
                      <div class="rounded-md shadow-sm">
                        <form wire:submit.prevent="save">
                        <input type="number" wire:model="project_id" value="23" disabled>
                          <input type="file" wire:model="document">
                          {{-- <button type="submit">Save Docuemnt</button> --}}
                         
                      </div>
                    </div>
                  </div>


                <div class="flex-shrink-0 px-4 border-t border-gray-200 py-5 sm:px-6">
                  <div class="space-x-3 flex justify-end">
                    <span class="inline-flex rounded-md shadow-sm">
                      <button @click="isDoc = !isDoc"  type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                        Cancel
                      </button>
                    </span>
                    <span class="inline-flex rounded-md shadow-sm">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Create
                      </button>
                    </form>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
</div>
