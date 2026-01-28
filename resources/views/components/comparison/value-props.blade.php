@props(['valueProps', 'competitor'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    Built by Heavy-Duty Shop Owners. Designed to Get You Paid Faster.
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $iconMap = [
                        'work order' => 'zap',
                        'workflow' => 'zap',
                        'faster' => 'zap',
                        'speed' => 'zap',
                        'invoice' => 'file-text',
                        'invoicing' => 'file-text',
                        'billing' => 'file-text',
                        'commercial-grade' => 'file-text',
                        'inventory' => 'package',
                        'parts' => 'package',
                        'fleet-aware' => 'package',
                        'technician' => 'clock',
                        'tracking' => 'clock',
                        'time' => 'clock',
                        'performance' => 'clock',
                        'billable' => 'clock',
                        'accounting' => 'refresh-cw',
                        'integrated' => 'refresh-cw',
                        'quickbooks' => 'refresh-cw',
                        'pricing' => 'dollar-sign',
                        'transparent' => 'dollar-sign',
                    ];
                    
                    $usedIcons = [];
                    $fallbackIcons = ['zap', 'clock', 'package', 'file-text', 'refresh-cw', 'dollar-sign', 'trending-up', 'wrench', 'bar-chart-3'];
                @endphp
                @foreach($valueProps as $index => $prop)
                    @php
                        $title = strtolower($prop['title']);
                        $iconName = null;
                        
                        // Find matching icon from map
                        foreach ($iconMap as $keyword => $icon) {
                            if (str_contains($title, $keyword)) {
                                $iconName = $icon;
                                break;
                            }
                        }
                        
                        // Ensure unique icons
                        if ($iconName && in_array($iconName, $usedIcons)) {
                            $iconName = null; // Reset if duplicate
                        }
                        
                        // Use fallback if no match or duplicate
                        if (!$iconName) {
                            foreach ($fallbackIcons as $fallbackIcon) {
                                if (!in_array($fallbackIcon, $usedIcons)) {
                                    $iconName = $fallbackIcon;
                                    break;
                                }
                            }
                        }
                        
                        $usedIcons[] = $iconName;
                    @endphp
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <x-dynamic-component :component="'lucide-' . $iconName" class="w-8 h-8 text-[#247CFF]" />
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $prop['title'] }}</h3>
                        <p class="text-white/60 text-sm">
                            {{ $prop['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
