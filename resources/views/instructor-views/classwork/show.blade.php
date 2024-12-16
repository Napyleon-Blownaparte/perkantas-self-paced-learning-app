<x-app-layout>
    <div class="flex-1 p-8 ml-16 mb-8">
        <h1 class="text-4xl font-bold mb-4">(Student Name)'s Attempt (Assessment Name)</h1>

        <x-learner-answer-essay 
        question_text="THIS IS THE QUESTION???"
        question_key="KUNCI"
        learner_answer="BUKAN KUNCI"
        ></x-learner-answer-essay>

        <x-learner-answer-multi 
        question_text="THIS IS THE MULTI QUESTION?"
        answer_1="not this"
        answer_2="maybe this"
        answer_3="its this!"
        answer_4="bukan ini"
        key_index=0
        learner_answer=3
        ></x-learner-answer-multi>

    </div>
    <x-footer class=""></x-footer>
</x-app-layout>
