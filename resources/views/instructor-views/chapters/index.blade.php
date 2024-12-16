<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Assessments For This Course</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Chapter Name</th>
                    <th>Assessment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course->chapters as $chapter)
                    @if ($chapter->assessments->isEmpty())
                        {{-- Jika chapter tidak memiliki assessment --}}
                        <tr>
                            <td>{{ $chapter->title }}</td>
                            <td colspan="2">No assessments available</td>
                        </tr>
                    @else
                        {{-- Tampilkan semua assessment dengan chapter diulang --}}
                        @foreach ($chapter->assessments as $assessment)
                        <tr>
                            <td>{{ $chapter->title }}</td>
                            <td>{{ $assessment->name }}</td>
                            <td>
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

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</x-app-layout>
