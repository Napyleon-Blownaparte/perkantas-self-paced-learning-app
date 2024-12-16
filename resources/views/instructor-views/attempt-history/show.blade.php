<section class="py-10">
    <div class="container mx-auto">
        <h3 class="text-xl font-semibold mb-6">Quiz</h3>
        <div class="space-y-8">
            <x-essay question="Apa makna dari perikop ini?" />
            <x-essay question="Apa yang menyebabkan kelebihan Sang Tunas dalam menghadirkan zaman baru?" />
            <div>
                <x-multiple-choice question="Situasi Israel yang tergambar dalam Yesaya adalah..." />
                <div class="mt-4 space-y-2">
                    <x-choice choice="Berkat bagi semua orang" />
                    <x-choice choice="Pekik perang yang tinggal" />
                    <x-choice choice="Keturunan Israel" />
                    <x-choice choice="Turunnya yang rusak dan perlu diselamatkan" />
                </div>
            </div>
        </div>
        <button class="bg-blue-800 py-4 px-6 my-10 text-xl font-semibold text-white text-center">Submit</button>
    </div>
</section>
