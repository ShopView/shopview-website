@props(['title', 'sections'])

<section class="guide-section py-20 bg-zinc-900/30">
    <div class="container">
        <div class="guide-layout">
            <!-- Sidebar -->
            <aside class="guide-sidebar">
                <h3 class="guide-sidebar-title">Guide Topics</h3>
                <nav class="guide-nav">
                    <ul class="guide-nav-list">
                        @foreach($sections as $index => $section)
                            <li>
                                <a href="#{{ $section['id'] }}" class="guide-nav-link" data-section="{{ $section['id'] }}">
                                    <span class="guide-nav-number">{{ $index + 1 }}</span>
                                    <span class="guide-nav-title">{{ $section['title'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <!-- Trial Card -->
                <div class="guide-trial-card">
                    <div class="guide-trial-header">
                        <img src="/images/guide-avatar.png" alt="ShopView Expert" class="guide-trial-avatar" onerror="this.style.display='none'">
                        <div>
                            <p class="text-sm font-medium mb-2">Ready to see ShopView in action?</p>
                            <a href="/trial" class="guide-trial-btn">Start Free Trial</a>
                        </div>
                    </div>
                    <div class="guide-trial-divider"></div>
                    <p class="text-sm text-white/80">
                        No credit card required. Get full access for 14 days.
                    </p>
                </div>
            </aside>

            <!-- Content -->
            <div class="guide-content">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-12">{{ $title }}</h2>

                @foreach($sections as $section)
                    <div id="{{ $section['id'] }}" class="guide-content-block">
                        <h3 class="text-xl md:text-2xl font-bold mb-4 text-primary-400">{{ $section['title'] }}</h3>
                        <div class="prose prose-invert max-w-none">
                            {!! $section['content'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const guideSection = document.querySelector('.guide-section');
    if (!guideSection) return;

    const sidebar = guideSection.querySelector('.guide-sidebar');
    const navLinks = guideSection.querySelectorAll('.guide-nav-link');
    const contentBlocks = guideSection.querySelectorAll('.guide-content-block');

    // Scroll tracking
    let isScrolling = false;
    let scrollTimeout;

    function updateActiveLink() {
        if (isScrolling) return;

        const scrollPosition = window.scrollY + 150;
        let currentSection = null;

        contentBlocks.forEach((block) => {
            const blockTop = block.offsetTop;
            const blockBottom = blockTop + block.offsetHeight;

            if (scrollPosition >= blockTop && scrollPosition < blockBottom) {
                currentSection = block.id;
            }
        });

        // Update active states
        navLinks.forEach((link) => {
            const sectionId = link.getAttribute('data-section');
            if (sectionId === currentSection) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Smooth scroll on link click
    navLinks.forEach((link) => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                isScrolling = true;

                // Remove all active states and add to clicked
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                // Scroll to target
                const targetPosition = targetElement.offsetTop - 100;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                // Reset scrolling flag after animation
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    isScrolling = false;
                }, 1000);

                // Update URL without triggering scroll
                history.replaceState(null, '', `#${targetId}`);
            }
        });
    });

    // Throttled scroll listener
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateActiveLink();
                ticking = false;
            });
            ticking = true;
        }
    });

    // Initial state
    updateActiveLink();

    // Set first link as active if none are
    if (!guideSection.querySelector('.guide-nav-link.active') && navLinks.length > 0) {
        navLinks[0].classList.add('active');
    }
});
</script>
