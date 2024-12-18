<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Assessments For This Course</h1>

        <div class="overflow-x-auto">
            <table id="myTable" class="display w-full">
                <thead>
                    <tr>
                        <th class="text-sm md:text-base">Chapter Name</th>
                        <th class="text-sm md:text-base">Assessment</th>
                        <th class="text-sm md:text-base">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($course->chapters as $chapter)
                        @if ($chapter->assessments->isEmpty())
                            {{-- Jika chapter tidak memiliki assessment --}}
                            <tr>
                                <td class="text-sm md:text-base">{{ $chapter->title }}</td>
                                <td class="text-sm md:text-base" colspan="2">No assessments available</td>
                            </tr>
                        @else
                            {{-- Tampilkan semua assessment dengan chapter diulang --}}
                            @foreach ($chapter->assessments as $assessment)
                            <tr>
                                <td class="text-sm md:text-base">{{ $chapter->title }}</td>
                                <td class="text-sm md:text-base">{{ $assessment->name }}</td>
                                <td class="text-sm md:text-base">
                                    <a href="{{ route('instructor.assessments.show',  $assessment->id) }}">
                                        <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">
                                            View Attempts
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</x-app-layout>
