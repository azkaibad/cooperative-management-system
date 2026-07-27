<script setup>
import { ref, onMounted, watch } from 'vue';

const props = defineProps({
    to: {
        type: Number,
        required: true,
    },
    duration: {
        type: Number,
        default: 2000,
    },
    decimals: {
        type: Number,
        default: 0,
    },
    prefix: {
        type: String,
        default: '',
    },
    suffix: {
        type: String,
        default: '',
    },
    separator: {
        type: String,
        default: '.',
    }
});

const current = ref(0);
const targetRef = ref(null);
let hasAnimated = false;

const easeOutQuad = (t) => t * (2 - t);

const startCountUp = () => {
    if (hasAnimated) return;
    hasAnimated = true;
    
    const startTime = performance.now();
    const startValue = 0;
    const endValue = props.to;

    const updateCount = (now) => {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / props.duration, 1);
        const easeProgress = easeOutQuad(progress);

        current.value = startValue + (endValue - startValue) * easeProgress;

        if (progress < 1) {
            requestAnimationFrame(updateCount);
        } else {
            current.value = endValue;
        }
    };

    requestAnimationFrame(updateCount);
};

onMounted(() => {
    if (typeof window !== 'undefined' && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting) {
                    startCountUp();
                    observer.disconnect();
                }
            },
            { threshold: 0.2 }
        );

        if (targetRef.value) {
            observer.observe(targetRef.value);
        }
    } else {
        startCountUp();
    }
});

watch(() => props.to, (newVal) => {
    current.value = newVal;
});

const formattedDisplay = (val) => {
    const fixedVal = val.toFixed(props.decimals);
    const parts = fixedVal.split('.');
    
    // Format integer part with separator
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, props.separator);
    
    const numberStr = parts.join(',');
    return `${props.prefix}${numberStr}${props.suffix}`;
};
</script>

<template>
    <span ref="targetRef" class="inline-block tabular-nums transition-all">
        {{ formattedDisplay(current) }}
    </span>
</template>
