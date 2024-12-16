<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Students On This Assessment</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Learner</th>
                    <th>Enrollment</th>
                    <th>Status</th>
                    <th>Attempts</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assessment->chapter->course->learners as $learner)
                    @php
                        // Menentukan class status berdasarkan status enrollment
                        $enrollmentStatus = $learner->courses->firstWhere('id', $assessment->chapter->course->id)->pivot
                            ->status;

                        switch ($enrollmentStatus) {
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
                                $statusClass = 'bg-gray-200'; // Default grey for other statuses
                                break;
                        }
                    @endphp
                    <tr>
                        <td></td> <!-- Nomor urut otomatis oleh DataTables -->
                        <td>{{ $learner->user->name }}</td>
                        <td class="{{ $statusClass }}">
                            {{ $enrollmentStatus }}
                        </td>
                        @if ($learner->attempt_histories->contains('assessment_id', $assessment->id))
                            <td class="bg-green-200 border-green-400">Attempted</td>
                        @else
                            <td class="bg-red-200 border-red-400">Not Attempted</td>
                        @endif

                        <td>{{ $learner->attempt_histories->where('assessment_id', $assessment->id)->count() }}</td>
                        <td>
                            @if ($learner->attempt_histories->contains('assessment_id', $assessment->id))
                                @php
                                    // Mendapatkan data enrollment yang sesuai
                                    $enrollment = $learner->courses->firstWhere('id', $assessment->chapter->course->id)
                                        ->pivot;

                                    // Mencari ID dari enrollment yang memiliki learner_id dan course_id yang sama
                                    $enrollmentId = \DB::table('enrollments')
                                        ->where('learner_id', $enrollment->learner_id)
                                        ->where('course_id', $enrollment->course_id)
                                        ->value('id');
                                @endphp
                                <a href="{{ route('instructor.enrollments.assessments.attempt-histories.index', [$enrollmentId, $assessment->id]) }}">
                                    <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View
                                        Attempts</button>
                                </a>
                            @else
                                <!-- Tidak menampilkan tombol jika tidak ada attempt history -->
                                <span class="text-gray-400">No Attempts</span>
                            @endif
                        </td>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false // Nonaktifkan kolom nomor urut dari sorting
                }],
                "createdRow": function(row, data, dataIndex) {
                    // Menambahkan nomor urut ke kolom pertama
                    $('td', row).eq(0).html(dataIndex + 1);
                }
            });
        });
    </script>
</x-app-layout>
