<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Students On This Assessment</h1>

        <div class="overflow-x-auto">
            <table id="myTable" class="display w-full">
                <thead>
                    <tr>
                        <th class="text-sm md:text-base">No.</th>
                        <th class="text-sm md:text-base">Learner</th>
                        <th class="text-sm md:text-base">Enrollment</th>
                        <th class="text-sm md:text-base">Status</th>
                        <th class="text-sm md:text-base">Attempts</th>
                        <th class="text-sm md:text-base">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assessment->chapter->course->learners as $learner)
                        @php
                            // Menentukan class status berdasarkan status enrollment
                            $enrollmentStatus = $learner->courses->firstWhere('id', $assessment->chapter->course->id)
                                ->pivot->status;

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
                            <td class="text-sm md:text-base"></td> <!-- Nomor urut otomatis oleh DataTables -->
                            <td class="text-sm md:text-base">{{ $learner->user->name }}</td>
                            <td class="{{ $statusClass }} text-sm md:text-base">
                                {{ $enrollmentStatus }}
                            </td>
                            @if ($learner->attempt_histories->contains('assessment_id', $assessment->id))
                                <td class="bg-green-200 border-green-400 text-sm md:text-base">Attempted</td>
                            @else
                                <td class="bg-red-200 border-red-400 text-sm md:text-base">Not Attempted</td>
                            @endif

                            <td class="text-sm md:text-base">
                                {{ $learner->attempt_histories->where('assessment_id', $assessment->id)->count() }}
                            </td>
                            <td class="text-sm md:text-base">
                                @if ($learner->attempt_histories->contains('assessment_id', $assessment->id))
                                    @php
                                        // Mendapatkan data enrollment yang sesuai
                                        $enrollment = $learner->courses->firstWhere(
                                            'id',
                                            $assessment->chapter->course->id,
                                        )->pivot;

                                        // Mencari ID dari enrollment yang memiliki learner_id dan course_id yang sama
                                        $enrollmentId = \DB::table('enrollments')
                                            ->where('learner_id', $enrollment->learner_id)
                                            ->where('course_id', $enrollment->course_id)
                                            ->value('id');
                                    @endphp
                                    <a
                                        href="{{ route('instructor.enrollments.assessments.attempt-histories.index', [$enrollmentId, $assessment->id]) }}">
                                        <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">
                                            View Attempts
                                        </button>
                                    </a>
                                @else
                                    <span class="text-gray-400">No Attempts</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
