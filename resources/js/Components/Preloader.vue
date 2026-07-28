<script setup>
import { ref, onMounted } from 'vue';

const isLoading = ref(true);
const fillPercentage = ref(0);

onMounted(() => {
    // Animate percentage count-up synced with liquid fill
    const duration = 1200; // 1.2s liquid fill animation
    const startTime = performance.now();

    const animateFill = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        fillPercentage.value = Math.floor(progress * 100);

        if (progress < 1) {
            requestAnimationFrame(animateFill);
        } else {
            // Hide preloader after liquid fill completes
            setTimeout(() => {
                isLoading.value = false;
                if (typeof window !== 'undefined') {
                    window.dispatchEvent(new Event('preloaderFinished'));
                }
            }, 300);
        }
    };

    requestAnimationFrame(animateFill);
});
</script>

<template>
    <Transition name="fade">
        <div 
            v-if="isLoading" 
            class="fixed inset-0 z-[9999] bg-[#001945] flex flex-col items-center justify-center text-white select-none overflow-hidden"
        >
            <!-- Liquid Water Filling Logo Container -->
            <div class="relative w-28 h-28 sm:w-36 sm:h-36 flex items-center justify-center">
                <!-- SVG Masked Logo with Liquid Rising Wave Effect -->
                <svg class="w-full h-full" viewBox="0 0 100 100">
                    <defs>
                        <!-- SVG Mask from Logo Geometry -->
                        <mask id="logo-mask">
                            <!-- Background Logo Mask Shape in Solid White -->
                            <path 
                                d="M50 5C32 5 18 20 18 42C18 64 36 82 50 90C64 82 82 64 82 42C82 20 68 5 50 5Z M50 16C60 25 66 38 64 52C62 66 53 74 50 78C47 74 38 66 36 52C34 38 40 25 50 16Z" 
                                fill="#FFFFFF"
                            />
                            <path 
                                d="M50 26C43 33 40 42 41 51C42 60 47 66 50 70C53 66 58 60 59 51C60 42 57 33 50 26Z" 
                                fill="#FFFFFF"
                            />
                        </mask>

                        <!-- Liquid Water Gradient -->
                        <linearGradient id="liquid-gradient" x1="0" y1="1" x2="0" y2="0">
                            <stop offset="0%" stop-color="#004AAD" />
                            <stop offset="50%" stop-color="#2563EB" />
                            <stop offset="100%" stop-color="#60A5FA" />
                        </linearGradient>
                    </defs>

                    <!-- Base Dimmed Logo Outline (0% Fill Outline) -->
                    <path 
                        d="M50 5C32 5 18 20 18 42C18 64 36 82 50 90C64 82 82 64 82 42C82 20 68 5 50 5Z M50 16C60 25 66 38 64 52C62 66 53 74 50 78C47 74 38 66 36 52C34 38 40 25 50 16Z" 
                        fill="rgba(255, 255, 255, 0.12)"
                        stroke="rgba(255, 255, 255, 0.25)"
                        stroke-width="1.5"
                    />

                    <!-- Masked Liquid Layer rising from bottom to top -->
                    <g mask="url(#logo-mask)">
                        <!-- Rising Water Rect with Wave Animation -->
                        <g class="animate-[#liquid-rise]">
                            <path 
                                class="animate-wave"
                                d="M-100 0 C-50 10, 0 -10, 50 0 C100 10, 150 -10, 200 0 V120 H-100 Z"
                                fill="url(#liquid-gradient)"
                            />
                        </g>
                    </g>
                </svg>

                <!-- Glowing Ripple Ring around logo -->
                <div class="absolute inset-0 rounded-full border border-blue-400/20 animate-ping pointer-events-none"></div>
            </div>

            <!-- Percentage Counter & Brand Label -->
            <div class="mt-6 text-center space-y-2">
                <div class="font-heading text-3xl font-extrabold text-blue-400 tracking-wider">
                    {{ fillPercentage }}%
                </div>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.fade-leave-active {
    transition: opacity 0.45s cubic-bezier(0.16, 1, 0.3, 1);
}
.fade-leave-to {
    opacity: 0;
}

/* Rising Liquid Motion Keyframes (Bottom to Top) */
@keyframes liquidRise {
    0% {
        transform: translateY(90px);
    }
    100% {
        transform: translateY(-10px);
    }
}

/* Undulating Horizontal Water Wave Effect */
@keyframes waveMotion {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50px);
    }
}

.animate-\[\#liquid-rise\] {
    animation: liquidRise 1.2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

.animate-wave {
    animation: waveMotion 1.5s linear infinite;
}
</style>
