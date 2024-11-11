<?php

namespace App\Policies;

use App\Models\Chapter;
use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\Response;

class ChapterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Chapter $chapter): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Course $course): bool
    {
        return $this->isInstructorOfCourse($user, $course);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Chapter $chapter): bool
    {
        return $this->isInstructorOfCourse($user, $chapter->course);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Chapter $chapter): bool
    {
        return $this->isInstructorOfCourse($user, $chapter->course);
    }

    /**
     * Check if the user is an instructor of the given course.
     */
    protected function isInstructorOfCourse(User $user, Course $course): bool
    {
        return $course->instructors()->where('users.id', $user->id)->exists();
    }
}
