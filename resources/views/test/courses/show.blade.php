<div>
    {{-- {{ dd($course) }} --}}
    <form method="POST" action="{{ route('enrollments.store') }}">
       @csrf
       <input type="hidden" name="course_id" value="{{ $course->id }}">
       <button type="submit">Enroll</button>
    </form>
 </div>
