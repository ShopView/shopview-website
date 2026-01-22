@props(['resultsTable', 'title' => 'Results with ShopView'])

<section class="py-16 bg-[#0f1218]">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">{{ $title }}</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 text-left text-lg font-semibold bg-red-500/20 text-red-400 border border-white/10 rounded-tl-lg">Before</th>
                            <th class="px-6 py-4 text-left text-lg font-semibold bg-green-500/20 text-green-400 border border-white/10 rounded-tr-lg">After</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($resultsTable['before']); $i++)
                            <tr>
                                <td class="px-6 py-4 text-white/70 border border-white/10 bg-white/5">
                                    {{ $resultsTable['before'][$i] }}
                                </td>
                                <td class="px-6 py-4 text-white/90 border border-white/10 bg-white/5 font-medium">
                                    {{ $resultsTable['after'][$i] }}
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
