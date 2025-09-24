<template>

  <Head>
    <title>Électricien à Annecy (Haute-Savoie) | Fariz Electric</title>
    <meta name="description"
      content="Électricien à Annecy et en Haute‑Savoie. Installation, rénovation et dépannage électriques. Devis gratuit, interventions rapides, plus de 30 ans d'expérience." />
  </Head>
  <!-- Hero -->
  <section
    class="relative bg-cover bg-center text-white min-h-[210px] sm:min-h-[260px] md:min-h-[300px] lg:min-h-[320px] flex items-center"
    :style="{ backgroundImage: `url(${heroBgImage})` }">
    <!-- Effet lumière -->
    <div class="pointer-events-none absolute inset-0 transition-opacity duration-250"
      :class="isLighting ? 'opacity-100' : 'opacity-0'"
      style="background: radial-gradient(120% 120% at 50% 50%, rgba(255,255,255,0.65) 0%, rgba(255,255,224,0.35) 35%, rgba(255,255,224,0.15) 55%, rgba(255,255,255,0.0) 70%); mix-blend-mode: screen;"
      aria-hidden="true"></div>
    <div
      class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 items-center">
      <div
        class="bg-[#539254]/30 backdrop-blur-sm rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 border border-white text-center w-full md:col-span-2 transform transition-all duration-[1400ms] ease-out will-change-transform"
        :class="leftEnter ? 'translate-x-0 opacity-100' : '-translate-x-32 opacity-0'">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">Votre entreprise
          d'installation, de rénovation et de dépannage
          électriques.</h1>
        <p class="mt-3 sm:mt-4 text-white/90 text-sm sm:text-base md:text-lg">Interventions rapides, travaux soignés,
          mise aux normes et solutions
          durables.</p>
      </div>
      <div
        class="mt-6 md:mt-0 w-full flex items-center justify-center md:col-span-1 transform transition-all duration-[1400ms] ease-out will-change-transform"
        :class="rightEnter ? 'translate-x-0 opacity-100' : 'translate-x-32 opacity-0'">
        <button type="button" role="switch" :aria-checked="contactSwitchOn"
          class="inline-flex items-center gap-4 select-none">
          <span class="font-semibold text-white text-xl">Cliquez sur ON <br> et contactez‑nous !</span>
          <span
            class="relative inline-block w-20 h-32 bg-white rounded-xl border border-gray-200 shadow-lg p-2 transform transition-transform duration-300 will-change-transform hover:scale-105">
            <span class="absolute left-2 top-2 h-1.5 w-1.5 rounded-full bg-gray-300"></span>
            <span class="absolute right-2 bottom-2 h-1.5 w-1.5 rounded-full bg-gray-300"></span>

            <!-- Piste -->
            <span class="relative block w-full h-full rounded-md bg-neutral-100 shadow-inner overflow-hidden">
              <!-- Moitié OFF (haut) -->
              <span
                class="absolute top-0 left-0 w-full h-1/2 flex items-center justify-center text-sm font-semibold border-b border-gray-200"
                :class="contactSwitchOn ? 'text-gray-500 bg-transparent' : 'text-white bg-[#ef4444]'">
                OFF
              </span>
              <!-- Moitié ON (bas) -->
              <span
                class="absolute bottom-0 left-0 w-full h-1/2 flex items-center justify-center text-sm font-semibold border-t border-gray-200 cursor-pointer"
                :class="contactSwitchOn ? 'text-white bg-[#539254]' : 'text-gray-500 bg-transparent'"
                @click.stop="goToContact">
                ON
              </span>
            </span>
          </span>
        </button>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="py-8 sm:py-12 md:py-16 bg-neutral">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#539254] text-center">Nos services</h2>
      <p class="text-[#49b0cf] text-center mt-2 text-sm sm:text-base">Expérience, qualité et réactivité.</p>
      <div class="mt-6 sm:mt-8 md:mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <div
          class="px-6 sm:px-8 md:px-10 py-8 sm:py-6 bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white rounded-full border border-gray-100 shadow-xl transform transition-transform duration-300 will-change-transform hover:scale-105">
          <div
            class="flex flex-col sm:flex-row justify-center items-center mb-4 sm:mb-7 space-y-2 sm:space-y-0 sm:space-x-5">
            <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-md bg-white/20 text-white grid place-items-center">
              <span class="material-symbols-outlined text-[20px] sm:text-[24px]">handyman</span>
            </div>
            <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-center">Installation</h3>
          </div>

          <div class="flex justify-center">
            <div class="space-y-2">
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Éclairages, Prises et Tableaux</span>
              </div>
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Solutions sur-mesure</span>
              </div>
            </div>
          </div>
        </div>

        <div
          class="px-6 sm:px-8 md:px-10 py-8 sm:py-6 bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white rounded-full border border-gray-100 shadow-xl transform transition-transform duration-300 will-change-transform hover:scale-105">
          <div
            class="flex flex-col sm:flex-row justify-center items-center mb-4 sm:mb-7 space-y-2 sm:space-y-0 sm:space-x-5">
            <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-md bg-white/20 text-white grid place-items-center">
              <span class="material-symbols-outlined text-[20px] sm:text-[24px]">check_circle</span>
            </div>
            <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-center">Mise aux normes</h3>
          </div>

          <div class="flex justify-center">
            <div class="space-y-2">
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Conformité NF C 15‑100</span>
              </div>
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Protections des personnes et des biens</span>
              </div>
            </div>
          </div>
        </div>

        <div
          class="px-6 sm:px-8 md:px-10 py-8 sm:py-6 bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white rounded-full border border-gray-100 shadow-xl transform transition-transform duration-300 will-change-transform hover:scale-105">
          <div
            class="flex flex-col sm:flex-row justify-center items-center mb-4 sm:mb-7 space-y-2 sm:space-y-0 sm:space-x-5">
            <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-md bg-white/20 text-white grid place-items-center">
              <span class="material-symbols-outlined text-[20px] sm:text-[24px]">grade</span>
            </div>
            <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-center">Rénovation</h3>
          </div>

          <div class="flex justify-center">
            <div class="space-y-2">
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Installations, Extensions et Confort</span>
              </div>
              <div class="flex items-center">
                <div
                  class="w-2 h-2 sm:w-3 sm:h-3 bg-transparent rounded-full border-2 sm:border-3 border-white mr-2 flex-shrink-0">
                </div>
                <span class="font-bold text-sm sm:text-base">Sécurité suivant les normes électriques</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Différenciateurs -->
  <LazyBackgroundImage :image-url="diffBgImage" section-classes="py-12 sm:py-16 md:py-20 lg:py-25 flex justify-center"
    min-height="">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-white text-center">Pourquoi nous choisir ?</h2>
      <div class="mt-6 sm:mt-8 md:mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-12 md:gap-16">
        <div
          class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#539254]/30 backdrop-blur-sm rounded-full border-2 border-white shadow-xl w-48 h-48 sm:w-56 sm:h-56 md:w-60 md:h-60 text-center space-y-3 sm:space-y-4 md:space-y-5 mx-auto transform transition-transform duration-300 will-change-transform hover:scale-105">
          <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-white">Expérience</h3>
          <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white">Plus de 30 ans.</p>
        </div>

        <div
          class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#539254]/30 backdrop-blur-sm rounded-full border-2 border-white shadow-xl w-48 h-48 sm:w-56 sm:h-56 md:w-60 md:h-60 text-center space-y-3 sm:space-y-4 md:space-y-5 mx-auto transform transition-transform duration-300 will-change-transform hover:scale-105">
          <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-white">Écologie</h3>
          <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white">Conseils et économie d'énergie.</p>
        </div>

        <div
          class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#539254]/30 backdrop-blur-sm rounded-full border-2 border-white shadow-xl w-48 h-48 sm:w-56 sm:h-56 md:w-60 md:h-60 text-center space-y-3 sm:space-y-4 md:space-y-5 mx-auto transform transition-transform duration-300 will-change-transform hover:scale-105">
          <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-white">Qualité</h3>
          <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white">Matériaux, finitions et satisfaction.</p>
        </div>

        <div
          class="flex flex-col items-center justify-center p-4 sm:p-6 bg-[#539254]/30 backdrop-blur-sm rounded-full border-2 border-white shadow-xl w-48 h-48 sm:w-56 sm:h-56 md:w-60 md:h-60 text-center space-y-3 sm:space-y-4 md:space-y-5 mx-auto transform transition-transform duration-300 will-change-transform hover:scale-105">
          <h3 class="font-semibold text-lg sm:text-xl md:text-2xl text-white">Réactivité</h3>
          <p class="text-sm sm:text-base md:text-lg lg:text-xl text-white">Interventions et devis rapides.</p>
        </div>
      </div>
    </div>
  </LazyBackgroundImage>
</template>

<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'
import heroBgImage from '/public/assets/images/hero-bg-home-page-image.png'
import diffBgImage from '/public/assets/images/diff-bg-home-page-image.png'
import LazyBackgroundImage from '../Components/LazyBackgroundImage.vue'

const contactSwitchOn = ref(false)
const isLighting = ref(false)
const leftEnter = ref(false)
const rightEnter = ref(false)
const goToContact = (event) => {
  event.preventDefault()
  contactSwitchOn.value = true
  isLighting.value = true
  setTimeout(() => {
    router.visit('/contact')
  }, 300)
}

onMounted(() => {
  requestAnimationFrame(() => {
    leftEnter.value = true
    rightEnter.value = true
  })
})
</script>
