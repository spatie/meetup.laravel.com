<x-main-layout>
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
                 viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
                 viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
            </svg>
            <div class="text-center">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Propose a talk
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                    lacus arcu.
                </p>
            </div>
            <div class="mt-12">
                <form action="#" method="POST" class="grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                    <div>
                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First
                            name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="first_name"
                                   class="form-input py-3 px-4 block w-full transition ease-in-out duration-150"
                                   placeholder="John"/>
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last
                            name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="last_name"
                                   class="form-input py-3 px-4 block w-full transition ease-in-out duration-150"
                                   placeholder="Doe"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" type="email"
                                   class="form-input py-3 px-4 block w-full transition ease-in-out duration-150"
                                   placeholder="john@example.com"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Talk Title</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="title"
                                   class="form-input py-3 px-4 block w-full transition ease-in-out duration-150"
                                   placeholder="My Awesome Talk"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="length" class="block text-sm font-medium leading-5 text-gray-700">Talk
                            Length</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="length" class="form-input block w-full py-3 px-4 pr-20"/>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <span class="text-gray-500 sm:text-sm sm:leading-5">
                Minutes
              </span>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="abstract" class="block text-sm font-medium leading-5 text-gray-700">Abstract</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea id="abstract" rows="4"
                                      class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
          <span class="w-full inline-flex rounded-md shadow-sm">
            <button type="button"
                    class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:border-red-600 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
              Submit
            </button>
          </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
