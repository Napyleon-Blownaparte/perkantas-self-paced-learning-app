<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Students On This Assessment</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Learner</th>
                    <th>Enrollment</th>
                    <th>Status</th>
                    <th>Attempts</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>William Evan</td>
                    <td class="bg-green-200">Enrolled</td>
                    <td class="bg-green-200">Attempted</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempts</button></td>
                </tr>
                <tr>
                    <td>Evan William</td>
                    <td class="bg-green-200">Enrolled</td>
                    <td class="bg-green-200">Attempted</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempts</button></td>
                </tr>
                <tr>
                    <td>NAPYLEON BLOWAPARTE</td>
                    <td class="bg-orange-200">Pending</td>
                    <td class="bg-red-200">No Attempts</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tehee</td>
                    <td class="bg-red-200">Not Enrolled</td>
                    <td class="bg-red-200">No Attempts</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama orang</td>
                    <td class="bg-green-200">Enrolled</td>
                    <td class="bg-green-200">Attempted</td>
                    <td>3</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempts</button></td>
                </tr>
            </tbody>
        </table>
        

    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</x-app-layout>
