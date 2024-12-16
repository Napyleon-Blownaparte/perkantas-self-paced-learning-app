<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Assessments For This Course</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Learner</th>
                    <th>Attempt Date</th>
                    <th>Submitted At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assessment->chapter->course->learners as $learner)
                    @foreach ($learner->attempt_histories->where('assessment_id', $assessment->id) as $attempt)
                        <tr>
                            <td>{{ $learner->user->name }}</td>
                            <td>{{ $attempt->created_at->format('d/m/Y') }}</td>
                            <td>{{ $attempt->submitted_at ? $attempt->submitted_at->format('H:i') : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('instructor.attempt-histories.show', $attempt->id) }}">
                                    <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">Attempt Detail</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });\
    </script>
</x-app-layout>
