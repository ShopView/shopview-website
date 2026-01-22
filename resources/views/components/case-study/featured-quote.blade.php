@props(['quote', 'variant' => 'default'])

@php
    $bgClass = $variant === 'highlight' ? 'bg-[#247CFF]/10' : 'bg-[#0f1218]';
@endphp

<div class="py-12 {{ $bgClass }}">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-start gap-4">
                <!-- Quote Icon Left -->
                <svg class="w-8 h-8 text-[#247CFF] flex-shrink-0 mt-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                </svg>
                
                <div class="flex-1">
                    <blockquote class="text-xl md:text-2xl text-white/90 mb-4 leading-relaxed">
                        "{{ $quote['text'] }}"
                    </blockquote>
                    <p class="text-white/60">
                        {{ $quote['author'] }} - {{ $quote['company'] }}
                    </p>
                </div>
                
                <!-- Quote Icon Right -->
                <svg class="w-8 h-8 text-[#247CFF] flex-shrink-0 mt-2 rotate-180" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                </svg>
            </div>
        </div>
    </div>
</div>
