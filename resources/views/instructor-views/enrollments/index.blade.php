<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Enrollments From My Courses</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Learner</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollment)
                    @php
                        // Get the course and learner data
                        $course = \App\Models\Course::find($enrollment->course_id);
                        $learner = \App\Models\Learner::find($enrollment->learner_id);

                        // Set the background color based on the status
                        $statusClass = '';
                        switch ($enrollment->status) {
                            case 'rejected':
                            case 'stopped':
                                $statusClass = 'bg-red-200 border-red-400'; // Light red for rejected/stopped
                                break;
                            case 'accepted':
                                $statusClass = 'bg-green-200 border-green-400'; // Light green for accepted
                                break;
                            case 'pending':
                                $statusClass = 'bg-orange-200 border-orange-400'; // Light orange for pending
                                break;
                            case 'finished':
                                $statusClass = 'bg-blue-200 border-blue-400';
                                break;
                            default:
                                $statusClass = '';
                                break;
                        }
                    @endphp
                    <tr>
                        <td>{{ $course ? $course->title : 'No Course' }}</td>
                        <td>{{ $learner && $learner->user ? $learner->user->name : 'No Learner' }}</td>
                        <td>
                            <span class="{{ $statusClass }} rounded-md border px-2 py-1">
                                {{ $enrollment->status }}
                            </span>
                        </td>
                        <td class="border border-gray-300 p-2">
                            <form action="{{ route('instructor.enrollments.update', $enrollment->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <select name="status" class="border border-gray-300 p-1 w-48">
                                    <option value="pending" {{ $enrollment->status == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="accepted" {{ $enrollment->status == 'accepted' ? 'selected' : '' }}>
                                        Accepted</option>
                                    <option value="stopped" {{ $enrollment->status == 'stopped' ? 'selected' : '' }}>
                                        Stopped</option>
                                    <option value="finished" {{ $enrollment->status == 'finished' ? 'selected' : '' }}>
                                        Finished</option>
                                </select>
                                <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                            </form>
                        </td>

                    </tr>
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
