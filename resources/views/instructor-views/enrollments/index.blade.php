<x-app-layout>
    <nav class="bg-white w-16 p-4 flex flex-col items-center justify-between shadow-lg fixed top-0 z-10 h-screen">
        <!-- Menu Icons -->
        <div class="flex flex-col space-y-6 justify-center flex-grow">
            <a href="#"
                class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg bg-gray-200">
                <!-- Icon  -->
                <svg viewBox="0 0 64 64" width="35" height="35">
                    <path
                        d="M14.9763 53.6418C13.7479 53.6418 12.723 53.2311 11.9017 52.4098C11.0803 51.5884 10.6688 50.5627 10.667 49.3324V15.2844C10.667 14.056 11.0785 13.0311 11.9017 12.2098C12.7248 11.3884 13.7497 10.9769 14.9763 10.9751H41.539L53.3337 22.7698V49.3351C53.3337 50.5618 52.923 51.5867 52.1017 52.4098C51.2803 53.2329 50.2546 53.6435 49.0243 53.6418H14.9763ZM14.9763 50.9751H49.027C49.5052 50.9751 49.8981 50.8213 50.2057 50.5138C50.5132 50.2062 50.667 49.8133 50.667 49.3351V24.3084H40.0003V13.6418H14.9763C14.4963 13.6418 14.1025 13.7955 13.795 14.1031C13.4874 14.4107 13.3337 14.8044 13.3337 15.2844V49.3351C13.3337 49.8133 13.4874 50.2062 13.795 50.5138C14.1025 50.8213 14.4963 50.9751 14.9763 50.9751ZM20.0003 42.9751H44.0003V40.3084H20.0003V42.9751ZM20.0003 24.3084H32.0003V21.6418H20.0003V24.3084ZM20.0003 33.6418H44.0003V30.9751H20.0003V33.6418Z"
                        fill="#333333" />
                </svg>

                <span
                    class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    Courses
                </span>
            </a>
            <a href="{{ route('instructor.instructor-dashboard') }}"
                class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg ">
                <!-- Icon -->
                <svg width="35" height="35" viewBox="0 0 64 65" fill="none">
                    <path
                        d="M34.6667 8.30859V24.3086H56V8.30859M34.6667 56.3086H56V29.6419H34.6667M8 56.3086H29.3333V40.3086H8M8 34.9753H29.3333V8.30859H8V34.9753Z"
                        fill="#333333" />
                </svg>

                <!-- Tooltip -->
                <span
                    class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    Dashboard
                </span>
            </a>
            <a href="{{ route('profile.edit') }}"
                class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
                <!-- Icon -->
                <svg width="35" height="35" viewBox="0 0 64 61" fill="none">
                    <path
                        d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM14.25 41.6836H27.5V45.9961H14.25V41.6836ZM0 33.3086H27.5V37.6211H0V33.3086ZM0 25.6836H27.5V29.9961H0V25.6836Z"
                        fill="#333333" />
                </svg>

                <span
                    class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    Profile
                </span>
            </a>
        </div>
    </nav>
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