<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-3xl p-16 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-8 text-center">Add Quiz</h1>

        <form action="/quizzes" method="POST" x-data="{ questionType: 'multiple-choice' }" @submit.prevent="submitForm">
            @csrf
            <div class="flex justify-between items-center mb-6">
                <div class="flex-1 mr-2">
                    <x-input-label for="question" value="Question" class="block !text-black !font-bold !text-sm mb-2" />
                    <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2" />
                </div>

                <div class="w-1/3">
                    <x-input-label for="questionType" value="Type" class="block !text-black !font-bold !text-sm mb-2" />
                    <x-dropdown align="right" width="48" contentClasses="py-1 bg-white">
                        <x-slot name="trigger">
                            <button class="inline-flex justify-between w-full bg-white text-gray-700 py-3 px-4 border border-gray-300 rounded shadow-sm focus:outline-none">
                                <span x-text="questionType === 'multiple-choice' ? 'Multiple Choice' : 'Essay'"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" @click.prevent="questionType = 'multiple-choice'">Multiple Choice</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" @click.prevent="questionType = 'essay'">Essay</a>
                        </x-slot>                        
                    </x-dropdown>
                </div>
            </div>

            <div class="mb-4" x-show="questionType === 'multiple-choice'">
                <x-input-label for="choices" value="Choice(s)" class="block !text-black !font-bold !text-sm mb-2" />
                @for($i = 1; $i <= 4; $i++)
                    <div class="flex items-center mb-2">
                        <x-text-input type="radio" name="correct_answer" class="form-radio text-blue-500" />
                        <x-text-input name="choices[]" placeholder="Choice {{ $i }}" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 ml-2" />
                    </div>
                @endfor
            </div>

            <x-primary-button class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
                Next
            </x-primary-button>
        </form>
    </div>
    
</body>

</html>
