<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Assessments For This Course</h1>

        <div class="overflow-x-auto">
            <table id="myTable" class="display w-full">
                <thead>
                    <tr>
                        <th class="text-sm md:text-base">Learner</th>
                        <th class="text-sm md:text-base">Attempt Date</th>
                        <th class="text-sm md:text-base">Attempt</th>
                        <th class="text-sm md:text-base">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assessment->chapter->course->learners as $learner)
                        @php
                            $attempts = $learner->attempt_histories->where('assessment_id', $assessment->id);
                            $attemptCount = $attempts->count();
                        @endphp
                        @foreach ($attempts as $index => $attempt)
                            <tr>
                                <td class="text-sm md:text-base">{{ $learner->user->name }}</td>
                                <td class="text-sm md:text-base">{{ $attempt->created_at->format('d/m/Y') }}</td>
                                <td class="text-sm md:text-base">Attempt {{ $index + 1 }}</td>
                                <td class="text-sm md:text-base">
                                    <a href="{{ route('instructor.attempt-histories.show', $attempt->id) }}">
                                        <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">
                                            Attempt Detail
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
