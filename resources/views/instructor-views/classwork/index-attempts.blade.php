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
                <tr>
                    <td>William Evan</td>
                    <td>28/10/2024</td>
                    <td>09:19</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">Attempt Detail</button></td>
                </tr>
                <tr>
                    <td>William Evan</td>
                    <td>28/10/2024</td>
                    <td>15:29</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">Attempt Detail</button></td>
                </tr>
                <tr>
                    <td>William Evan</td>
                    <td>23/10/2021</td>
                    <td>10:30</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">Attempt Detail</button></td>
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
