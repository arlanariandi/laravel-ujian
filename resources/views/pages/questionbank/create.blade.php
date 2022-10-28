<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Question Bank &raquo; Create Question
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                {{-- Error Handling --}}
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('dashboard.questionbank.store') }}" class="w-full" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Soal
                                <span class="text-red-500">*</span></label>
                            <input type="text" name="question" value="{{ old('question') }}"
                                class="appearance-none block w-full lg:w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jawaban 1
                                <span class="text-red-500">*</span></label>
                            <input type="hidden" value="0" name="answers[0][is_checked]">
                            <input type="checkbox" value="1" name="answers[0][is_checked]">
                            <span class="min-w-full mx-auto px-5">
                                <input name="answers[0][answer]" value="{{ old('answers.0.answer') }}" type="text"
                                    class="mt-1 text-xs block w-full bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jawaban 1
                                <span class="text-red-500">*</span></label>
                            <input type="hidden" value="0" name="answers[1][is_checked]">
                            <input type="checkbox" value="1" name="answers[1][is_checked]">
                            <span class="min-w-full mx-auto px-5">
                                <input name="answers[1][answer]" value="{{ old('answers.1.answer') }}" type="text"
                                    class="mt-1 text-xs block w-full bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan</button>

                            <a href="{{ route('dashboard.questionbank.index') }}"
                                class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 ml-3 rounded shadow-lg">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('question');
    </script> --}}

</x-app-layout>
