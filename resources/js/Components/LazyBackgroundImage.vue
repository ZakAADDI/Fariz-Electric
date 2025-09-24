<template>
  <section 
    :class="sectionClasses"
    :style="computedStyle"
    ref="sectionRef"
  >
    <slot />
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  imageUrl: {
    type: String,
    required: true
  },
  sectionClasses: {
    type: String,
    default: ''
  },
  minHeight: {
    type: String,
    default: 'min-h-[210px] sm:min-h-[260px] md:min-h-[300px] lg:min-h-[320px]'
  }
})

const sectionRef = ref(null)
const isLoaded = ref(false)
const isIntersecting = ref(false)

const computedStyle = computed(() => {
  if (isLoaded.value) {
    return {
      backgroundImage: `url(${props.imageUrl})`,
      backgroundSize: 'cover',
      backgroundPosition: 'center'
    }
  }
  return {}
})

const observer = ref(null)

onMounted(() => {
  if (!sectionRef.value) return

  // Intersection Observer pour détecter quand la section devient visible
  observer.value = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !isLoaded.value) {
          isIntersecting.value = true
          // Précharger l'image
          const img = new Image()
          img.onload = () => {
            isLoaded.value = true
          }
          img.src = props.imageUrl
          
          // Arrêter d'observer une fois chargé
          observer.value?.unobserve(entry.target)
        }
      })
    },
    {
      rootMargin: '50px 0px', // Commencer à charger 50px avant que l'élément soit visible
      threshold: 0.1
    }
  )

  observer.value.observe(sectionRef.value)
})

onUnmounted(() => {
  if (observer.value) {
    observer.value.disconnect()
  }
})
</script>

