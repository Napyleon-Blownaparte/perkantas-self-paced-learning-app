<x-app-layout>
    <div class="flex-1 p-8 ml-16">
        <h1 class="text-4xl font-bold mb-4">Classwork From This Course</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Chapter Name</th>
                    <th>Assessment</th>
                    <th>Learner</th>
                    <th>Attempt</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chapter 1</td>
                    <td>Assessment 1</td>
                    <td>John Doe</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempt</button></td>
                </tr>
                <tr>
                    <td>Chapter 2</td>
                    <td>Assessment 2</td>
                    <td>Jane Smith</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempt</button></td>
                </tr>
                <tr>
                    <td>Chapter 1</td>
                    <td>Assessment 1</td>
                    <td>John Doe</td>
                    <td>2</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempt</button></td>
                </tr>
                <tr>
                    <td>Chapter 3</td>
                    <td>Assessment 2</td>
                    <td>Mary Johnson</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempt</button></td>
                </tr>
                <tr>
                    <td>Chapter 4</td>
                    <td>Assessment 1</td>
                    <td>James Brown</td>
                    <td>1</td>
                    <td><button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">View Attempt</button></td>
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
