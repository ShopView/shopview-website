<section class="py-20 bg-zinc-900/50">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Calculate Your ROI
            </h2>
            <p class="text-lg text-white/60">
                Fill in all the fields to get your ROI Report
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Calculator Inputs -->
                <div class="card">
                    <h3 class="text-xl font-bold mb-6">Your Shop Details</h3>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-white/80 mb-2">Number of Technicians</label>
                            <input type="number" id="num-techs" value="5" min="1" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-white/80 mb-2">Average Hourly Labor Rate ($)</label>
                            <input type="number" id="hourly-rate" value="125" min="1" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-white/80 mb-2">Hours of Unbilled Time per Tech per Day</label>
                            <div class="flex gap-2">
                                <button class="unbilled-btn flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white hover:bg-white/20 transition-colors" data-value="0.5">0.5</button>
                                <button class="unbilled-btn flex-1 px-4 py-3 bg-blue-600 border border-blue-600 rounded-lg text-white" data-value="1">1</button>
                                <button class="unbilled-btn flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white hover:bg-white/20 transition-colors" data-value="1.5">1.5</button>
                                <button class="unbilled-btn flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white hover:bg-white/20 transition-colors" data-value="2">2</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results -->
                <div class="card bg-gradient-to-br from-blue-600/20 to-purple-600/20">
                    <h3 class="text-xl font-bold mb-6">Your Potential Results</h3>

                    <div class="space-y-6">
                        <div class="flex justify-between items-center pb-4 border-b border-white/10">
                            <span class="text-white/80">Hours Saved Daily</span>
                            <span id="hours-saved" class="text-2xl font-bold text-blue-400">7.5 hrs</span>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-white/10">
                            <span class="text-white/80">Monthly Billable Time Gained</span>
                            <span id="monthly-billable" class="text-2xl font-bold text-green-400">$23,438</span>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-white/10">
                            <span class="text-white/80">Annual Profit Increase</span>
                            <span id="annual-profit" class="text-2xl font-bold text-purple-400">$281,250</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-white/80">ROI Multiplier</span>
                            <span id="roi-multiplier" class="text-2xl font-bold text-yellow-400">47x</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="/demo" class="btn btn-primary w-full text-center">
                            Get Your Free Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const numTechs = document.getElementById('num-techs');
        const hourlyRate = document.getElementById('hourly-rate');
        const unbilledBtns = document.querySelectorAll('.unbilled-btn');
        let unbilledHours = 1;

        function updateResults() {
            const techs = parseInt(numTechs.value) || 0;
            const rate = parseInt(hourlyRate.value) || 0;

            // Calculate results (assuming ShopView recovers 75% of unbilled time)
            const recoveryRate = 0.75;
            const workDaysPerMonth = 22;
            const monthsPerYear = 12;

            const dailyHoursSaved = techs * unbilledHours * recoveryRate;
            const monthlyBillable = dailyHoursSaved * workDaysPerMonth * rate;
            const annualProfit = monthlyBillable * monthsPerYear;
            const roiMultiplier = Math.round(annualProfit / (techs * 500 * 12)); // Assuming ~$500/tech/month subscription

            document.getElementById('hours-saved').textContent = dailyHoursSaved.toFixed(1) + ' hrs';
            document.getElementById('monthly-billable').textContent = '$' + monthlyBillable.toLocaleString();
            document.getElementById('annual-profit').textContent = '$' + annualProfit.toLocaleString();
            document.getElementById('roi-multiplier').textContent = roiMultiplier + 'x';
        }

        unbilledBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                unbilledBtns.forEach(b => {
                    b.classList.remove('bg-blue-600', 'border-blue-600');
                    b.classList.add('bg-white/10', 'border-white/20');
                });
                btn.classList.remove('bg-white/10', 'border-white/20');
                btn.classList.add('bg-blue-600', 'border-blue-600');
                unbilledHours = parseFloat(btn.dataset.value);
                updateResults();
            });
        });

        numTechs.addEventListener('input', updateResults);
        hourlyRate.addEventListener('input', updateResults);

        updateResults();
    });
</script>
