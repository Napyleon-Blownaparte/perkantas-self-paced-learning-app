<x-app-layout>
    <div class="flex-1 p-8 ml-16 sm:ml-4 md:ml-8">
        <h1 class="text-4xl font-bold mb-4 sm:text-2xl md:text-3xl">Enrollments From My Courses</h1>

        <div class="overflow-x-auto">
            <table id="myTable" class="display min-w-full">
                <thead>
                    <tr>
                        <th class="text-left px-4 py-2">Course Name</th>
                        <th class="text-left px-4 py-2">Learner</th>
                        <th class="text-left px-4 py-2">Status</th>
                        <th class="text-left px-4 py-2">Action</th>
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
                            <td class="px-4 py-2">{{ $course ? $course->title : 'No Course' }}</td>
                            <td class="px-4 py-2">{{ $learner && $learner->user ? $learner->user->name : 'No Learner' }}
                            </td>
                            <td class="px-4 py-2">
                                <span class="{{ $statusClass }} rounded-md border px-2 py-1">
                                    {{ $enrollment->status }}
                                </span>
                            </td>
                            <td class="px-4 py-2 border border-gray-300">
                                <form action="{{ route('instructor.enrollments.update', $enrollment->id) }}"
                                    method="POST">
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
                                        <option value="pending"
                                            {{ $enrollment->status == 'pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="accepted"
                                            {{ $enrollment->status == 'accepted' ? 'selected' : '' }}>
                                            Accepted</option>
                                        <option value="stopped"
                                            {{ $enrollment->status == 'stopped' ? 'selected' : '' }}>
                                            Stopped</option>
                                        <option value="finished"
                                            {{ $enrollment->status == 'finished' ? 'selected' : '' }}>
                                            Finished</option>
                                    </select>
                                    <button type="submit"
                                        class="bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if (session('success'))
        <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('success-modal');
            });
        </script>
    @endif


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</x-app-layout>
