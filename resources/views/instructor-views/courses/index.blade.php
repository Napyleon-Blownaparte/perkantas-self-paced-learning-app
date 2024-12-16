<x-app-layout>
    <div class="flex-1 p-8 ml-16 mb-8">
        <h1 class="text-4xl font-bold mb-4">Manage Courses</h1>

        <!-- Filter dropdown -->
        @auth
            <div class="mb-4 flex items-center">
                <label for="enrollment-status" class="mr-2 text-lg font-medium">Filter by Enrollment Status:</label>
                <form method="GET" action="{{ url()->current() }}">
                    <select name="status" id="instruction-status" class="border rounded px-3 py-2 w-64"
                        onchange="this.form.submit()">
                        <option value="">All Courses</option>
                        <option value="instructor" {{ request('status') === 'instructor' ? 'selected' : '' }}>Courses I'm
                            Instructing</option>
                    </select>
                </form>
            </div>
        @endauth

        @if ($courses->isEmpty())
            <div class=" mb-64">
                <svg class="svg-icon text-slate-400 m-auto translate-y-20" width="200" height="200"
                    style="fill: currentColor;" viewBox="0 0 1024 1024" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M945.643909 899.025661 767.204891 720.555943c-1.134847-1.136893-2.585895-1.641383-3.815909-2.555196 58.732659-68.858274 94.376461-158.0302 94.376461-255.623935 0-217.74114-176.577624-394.350486-394.350486-394.350486-217.771839 0-394.350486 176.608324-394.350486 394.350486 0 34.792411 4.952802 68.322062 13.406335 100.464109 10.219759-15.58393 36.712133-52.364625 52.549843-59.237149-1.702782-13.532201-2.838651-27.220968-2.838651-41.22696 0-182.917006 148.31493-331.264683 331.264683-331.264683s331.263659 148.346653 331.263659 331.264683c0 143.771451-91.758844 265.811971-219.7284 311.643809-6.088672 25.960255-15.929808 50.720172-29.335119 73.747631 65.640999-14.005992 125.32124-44.097334 174.432775-86.301552 0.914836 1.199315 1.419326 2.648316 2.524496 3.784186l178.468694 178.375573c12.33391 12.396331 32.268938 12.396331 44.601824 0C958.007495 931.355997 958.007495 911.358547 945.643909 899.025661L945.643909 899.025661zM480.417189 541.360701c-45.421492-45.421492-105.827257-70.436212-170.111353-70.436212-64.284095 0-124.657114 25.01472-170.07963 70.436212-45.453215 45.422516-70.466911 105.826234-70.466911 170.109306 0 64.285119 25.013697 124.658138 70.466911 170.111353 45.453215 45.454238 105.857956 70.465888 170.111353 70.465888 0 0 0 0 0.030699 0 64.253396 0 124.659161-25.045419 170.07963-70.465888 45.422516-45.388746 70.437236-105.826234 70.437236-170.111353C550.853401 647.217634 525.837658 586.812893 480.417189 541.360701zM435.815365 836.979536c-33.530674 33.531698-78.100776 51.982932-125.477806 51.982932l0 0c-47.408753 0-92.010577-18.48398-125.509529-51.982932-33.529651-33.529651-51.982932-78.099752-51.982932-125.509529 0-47.408753 18.453281-91.977831 51.982932-125.506459 33.529651-33.532721 78.069053-51.953256 125.477806-51.953256 47.409776 0 91.978854 18.453281 125.509529 51.953256 33.529651 33.529651 51.981908 78.097706 51.981908 125.506459C487.797273 758.911506 469.345016 803.450908 435.815365 836.979536zM420.895561 600.914052c-12.33391-12.335956-32.268938-12.335956-44.601824 0l-65.988924 65.986877-65.9879-65.986877c-12.332886-12.335956-32.267914-12.335956-44.600801 0-12.33391 12.332886-12.33391 32.266891 0 44.601824l65.986877 65.985854-65.986877 65.9879c-12.33391 12.332886-12.33391 32.267914 0 44.601824 6.15007 6.151094 14.226003 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502l65.9879-65.986877 65.988924 65.986877c6.15007 6.151094 14.224979 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502 12.33391-12.33391 12.33391-32.268938 0-44.601824l-65.986877-65.9879 65.986877-65.985854C433.196725 633.212666 433.196725 613.246939 420.895561 600.914052L420.895561 600.914052z" />
                </svg>
                <p class="text-slate-500 text-center translate-y-[6em]">Pencarian tidak ditemukan :(</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Grid container untuk kartu -->
                @foreach ($courses as $course)
                @php
                    $classworkUrl = auth()->user()->can('update', $course)
                        ? route('instructor.courses.chapters.index', $course->id)
                        : null;
                @endphp

                <div class="flex-none mb-12">
                    <x-course-card-instructor
                        image_src="{{ $course->thumbnail_image }}"
                        title="{{ $course->title }}"
                        id="{{ $course->id }}"
                        link_url="{{ route('instructor.courses.show', $course->id) }}"
                        classwork_url="{{ $classworkUrl }}"
                        text_color="text-black"
                    />
                </div>
            @endforeach



            </div>

            <p class="text-black mt-8">
                {{ $courses->appends(request()->query())->onEachSide(5)->links() }}
            </p>

            <div class="relative py-2">
                <a href="{{ route('instructor.courses.create') }}">
                    <div
                        class="m-12 my-6 md:m-24 md:my-12 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                        <div class="m-2 md:m-6">
                            <svg class="m-auto my-8" fill="#303030" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="1.5em" height="1.5em" viewBox="0 0 45.402 45.402" xml:space="preserve">
                                <g>
                                    <path
                                        d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                </g>
                            </svg>

                            <a href="{{ route('instructor.courses.create') }}">
                                <button
                                    style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                    class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                    Add More Course
                                </button>
                            </a>
                            <p class="mt-8 text-gray-600">Click the button above to Add Course</p>
                        </div>
                    </div>
                </a>
            </div>


        @endif

    </div>
    <x-footer class=""></x-footer>
    @if (session('success'))
        <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('success-modal');
            });
        </script>
    @endif
</x-app-layout>
