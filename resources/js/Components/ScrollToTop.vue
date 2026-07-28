<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const isVisible = ref(false);

const checkScroll = () => {
    if (typeof window !== 'undefined') {
        isVisible.value = window.scrollY > 300;
    }
};

const scrollToTop = () => {
    if (typeof window !== 'undefined') {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    }
};

onMounted(() => {
    if (typeof window !== 'undefined') {
        window.addEventListener('scroll', checkScroll);
    }
});

onUnmounted(() => {
    if (typeof window !== 'undefined') {
        window.removeEventListener('scroll', checkScroll);
    }
});
</script>

<template>
    <Transition name="scroll-btn">
        <button
            v-if="isVisible"
            @click="scrollToTop"
            type="button"
            aria-label="Kembali ke Atas"
            class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full bg-[#004AAD] hover:bg-[#00357F] text-white flex items-center justify-center shadow-xl shadow-blue-600/30 border border-white/20 hover:scale-110 active:scale-95 transition-all duration-300 group cursor-pointer"
        >
            <!-- Up Arrow Vector Icon -->
            <svg 
                class="w-6 h-6 transform group-hover:-translate-y-0.5 transition-transform duration-200" 
                fill="none" 
                stroke="currentColor" 
                viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </Transition>
</template>

<style scoped>
.scroll-btn-enter-active,
.scroll-btn-leave-active {
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.scroll-btn-enter-from,
.scroll-btn-leave-to {
    opacity: 0;
    transform: translateY(16px) scale(0.8);
}
</style>
