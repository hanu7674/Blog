<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User::class);
        $this->call(ProgramLevels::class);
        $this->call(Departments::class);
        $this->call(Programs::class);
        $this->call(Regulations::class);
        $this->call(Semesters::class);
        $this->call(SubjectOfferingTypes::class);
        $this->call(Subjects::class);
        $this->call(Syllabus::class);
        $this->call(SubjectMeta::class);
        $this->call(Specializations::class);
        $this->call(SubjectCategories::class);
        $this->call(InstructionSchemes::class);
        $this->call(InstructionSchemeSubject::class);
    }
}
