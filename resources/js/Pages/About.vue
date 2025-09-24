<template>

    <Head>
        <title>À propos | Fariz Electric - Électricien à Annecy</title>
        <meta name="description"
            content="Découvrez Fariz Electric : 30 ans d'expérience, qualité, sécurité et réactivité pour vos projets électriques à Annecy et en Haute‑Savoie." />
    </Head>
    <!-- Hero -->
    <section
        class="bg-cover bg-center text-white min-h-[210px] sm:min-h-[260px] md:min-h-[300px] lg:min-h-[320px] flex items-center"
        :style="{ backgroundImage: `url(${contactBgImage})` }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 lg:py-24">
            <div class="bg-[#539254]/30 backdrop-blur-sm rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 border border-white text-center transform transition-all duration-[900ms] ease-out will-change-transform"
                :class="heroEnter ? 'opacity-100 scale-100' : 'opacity-0 scale-90'">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">À propos</h1>
                <p class="mt-3 sm:mt-4 text-white/90 text-sm sm:text-base md:text-lg">Apprenez-en plus sur notre
                    expérience et nos valeurs.</p>
            </div>
        </div>
    </section>

    <!-- Fondateur -->
    <section class="py-8 sm:py-12 md:py-16 bg-neutral">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="transform transition-all duration-[900ms] ease-out will-change-transform"
                    :class="founderLeftEnter ? 'translate-x-0 opacity-100' : '-translate-x-32 opacity-0'">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#539254] mb-6">Le fondateur</h2>
                    <div class="space-y-4 text-gray-700">
                        <p class="text-sm sm:text-base leading-relaxed">
                            Fondée par <a href="https://www.linkedin.com/in/fariz-ben-jaddy-5ba388212/"
                                title="Lien vers LinkedIn"><strong class="text-[#539254]">Fariz BEN JADDY</strong></a>,
                            électricien passionné
                            qui met à votre service plus de <strong class="text-[#539254]">30 ans d'expérience</strong>
                            dans l'électricité.
                        </p>
                        <p class="text-sm sm:text-base leading-relaxed">
                            Spécialisé dans le courant fort et faible, le câblage, les armoires électriques et les
                            solutions de sécurité. Il intervient sur des projets variés allant du secteur tertiaire aux
                            sites à haute sensibilité.
                        </p>
                        <p class="text-sm sm:text-base leading-relaxed">
                            Reconnu pour sa rigueur, son leadership et son sens des responsabilités, il assure la
                            qualité, la sécurité et la fiabilité de chaque installation, tout en garantissant une
                            gestion optimale des chantiers.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end transform transition-all duration-[900ms] ease-out will-change-transform"
                    :class="founderRightEnter ? 'translate-x-0 opacity-100' : 'translate-x-32 opacity-0'">
                    <div
                        class="w-64 h-64 sm:w-80 sm:h-80 bg-gradient-to-r from-[#539254] to-[#4ab1d0] rounded-2xl flex items-center justify-center">
                        <div class="text-center text-white">
                            <div
                                class="w-40 h-40 bg-gradient-to-r from-violet-500 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center overflow-hidden">
                                <img src="/public/assets/images/photo-profil.jpg"
                                    alt="Portrait de Fariz BEN JADDY, fondateur de Fariz Electric" loading="lazy"
                                    class="w-full h-full object-cover rounded-full border-2 border-white">
                            </div>

                            <h3 class="text-lg sm:text-xl font-bold">Fariz BEN JADDY</h3>
                            <p class="text-sm sm:text-base opacity-90">Fondateur & Électricien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valeurs -->
    <LazyBackgroundImage :image-url="valuesBgImage"
        section-classes="py-12 sm:py-16 md:py-20 lg:py-25 flex justify-center" min-height="">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white text-center mb-6 sm:mb-8">Nos valeurs</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <div
                    class="p-4 sm:p-6 bg-[#539254]/50 backdrop-blur-sm rounded-full border border-white/20 text-white transform transition-transform duration-300 will-change-transform hover:scale-105 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-10 w-10 rounded-md bg-white/20 text-white grid place-items-center mr-4">
                            <span class="material-symbols-outlined text-[24px]">eco</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold">Écologie</h3>
                    </div>
                    <p class="text-sm sm:text-base text-white font-semibold">Économie d'énergie, réduction de votre
                        consommation sur le long terme et préservation de l'environnement.</p>
                </div>

                <div
                    class="p-4 sm:p-6 bg-[#539254]/50 backdrop-blur-sm rounded-full border border-white/20 text-white transform transition-transform duration-300 will-change-transform hover:scale-105 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-10 w-10 rounded-md bg-white/20 text-white grid place-items-center mr-4">
                            <span class="material-symbols-outlined text-[24px]">shield</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold">Sécurité</h3>
                    </div>
                    <p class="text-sm sm:text-base text-white font-semibold">Conformité aux normes électriques,
                        protection des personnes et des biens.</p>
                </div>

                <div
                    class="p-4 sm:p-6 bg-[#539254]/50 backdrop-blur-sm rounded-full border border-white/20 text-white transform transition-transform duration-300 will-change-transform hover:scale-105 sm:col-span-2 lg:col-span-1 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-10 w-10 rounded-md bg-white/20 text-white grid place-items-center mr-4">
                            <span class="material-symbols-outlined text-[24px]">verified</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold">Fiabilité</h3>
                    </div>
                    <p class="text-sm sm:text-base text-white font-semibold">Engagements tenus, suivi, disponibilité et
                        relation de confiance durable.</p>
                </div>
            </div>
        </div>
    </LazyBackgroundImage>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'
import contactBgImage from '/public/assets/images/bg-about-page-image.png'
import valuesBgImage from '/public/assets/images/values-bg-about-page-image.png'
import LazyBackgroundImage from '../Components/LazyBackgroundImage.vue'

const heroEnter = ref(false)
const founderLeftEnter = ref(false)
const founderRightEnter = ref(false)
onMounted(() => {
    requestAnimationFrame(() => {
        heroEnter.value = true
        founderLeftEnter.value = true
        founderRightEnter.value = true
    })
})
</script>
