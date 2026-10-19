
<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                                New Arrivals
                            </h1>

                            <div class="flex items-center">
                                <div date-rangepicker class="flex items-center">
                                    <div class="relative">
                                        <input
                                            name="start"
                                            type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-3 p-2.5"
                                            placeholder="Select date start"
                                        >
                                    </div>

                                    <span class="mx-4 text-gray-500">to</span>

                                    <div class="relative">
                                        <input
                                            name="end"
                                            type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-3 p-2.5"
                                            placeholder="Select date end"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="pt-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                                Upcoming Events
                            </h2>

                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                                <div class="border rounded-lg p-4">
                                    <h3 class="text-lg font-semibold">
                                        Kecak Fire
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600">
                                        Traditional Balinese cultural performance.
                                    </p>
                                </div>

                                <div class="border rounded-lg p-4">
                                    <h3 class="text-lg font-semibold">
                                        Cultural Event
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600">
                                        Discover local cultural activities.
                                    </p>
                                </div>

                                <div class="border rounded-lg p-4">
                                    <h3 class="text-lg font-semibold">
                                        Community Event
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600">
                                        Explore upcoming community events.
                                    </p>
                                </div>

                            </div>
                        </section>

                    </main>

                </div>
            </div>
        </div>
    </div>
</x-home-layout>
