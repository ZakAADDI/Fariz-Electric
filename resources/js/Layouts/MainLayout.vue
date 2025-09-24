<template>
    <div class="min-h-screen flex flex-col bg-neutral">
        <header class="border-b border-gray-100 bg-white/80 backdrop-blur">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2">
                    <span
                        class="inline-flex h-8 w-8 sm:h-9 sm:w-9 items-center justify-center rounded-full bg-primary text-white font-bold text-sm sm:text-base">F</span>
                    <img :src="logoPath" alt="Fariz Electric" class="h-16 sm:h-20 md:h-24 lg:h-32 xl:h-40">
                </a>
                <!-- Bouton burger (mobile) -->
                <button @click="isMobileMenuOpen = !isMobileMenuOpen"
                    class="md:hidden inline-flex items-center justify-center p-3 rounded-lg text-[#539254] hover:bg-[#539254]/10 focus:outline-none focus:ring-2 focus:ring-[#539254]/20 transition-all duration-200 transform hover:scale-105"
                    :aria-expanded="isMobileMenuOpen ? 'true' : 'false'" aria-controls="main-mobile-menu"
                    aria-label="Basculer la navigation">
                    <svg v-if="!isMobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Nav desktop -->
                <ul class="hidden md:flex items-center gap-6">
                    <li>
                        <Link href="/"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded transition transform duration-200 will-change-transform hover:scale-105"
                            :class="isActive('/') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254]'">
                        <span class="material-symbols-outlined text-[20px] transition-colors"
                            :class="isActive('/') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold">Accueil</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/about"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded transition transform duration-200 will-change-transform hover:scale-105"
                            :class="isActive('/about') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254]'">
                        <span class="material-symbols-outlined text-[20px] transition-colors"
                            :class="isActive('/about') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold">À propos</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/contact"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded transition transform duration-200 will-change-transform hover:scale-105"
                            :class="isActive('/contact') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254]'">
                        <span class="material-symbols-outlined text-[20px] transition-colors"
                            :class="isActive('/contact') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold">Contact</span>
                        </Link>
                    </li>
                </ul>
            </nav>
            <!-- Menu mobile -->
            <Transition name="fade">
                <div v-if="isMobileMenuOpen" id="main-mobile-menu"
                    class="md:hidden border-t border-gray-100 bg-white/95 backdrop-blur">
                    <div class="px-4 py-4 space-y-3">
                        <Link @click="closeMobile()" href="/"
                            class="group flex items-center gap-3 w-full text-left px-4 py-3 rounded-lg transition-all duration-200 transform hover:scale-105"
                            :class="isActive('/') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254] hover:bg-gray-50'">
                        <span class="material-symbols-outlined text-[24px] transition-colors"
                            :class="isActive('/') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold text-lg">Accueil</span>
                        </Link>
                        <Link @click="closeMobile()" href="/about"
                            class="group flex items-center gap-3 w-full text-left px-4 py-3 rounded-lg transition-all duration-200 transform hover:scale-105"
                            :class="isActive('/about') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254] hover:bg-gray-50'">
                        <span class="material-symbols-outlined text-[24px] transition-colors"
                            :class="isActive('/about') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold text-lg">À propos</span>
                        </Link>
                        <Link @click="closeMobile()" href="/contact"
                            class="group flex items-center gap-3 w-full text-left px-4 py-3 rounded-lg transition-all duration-200 transform hover:scale-105"
                            :class="isActive('/contact') ? 'bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white' : 'text-[#539254] hover:bg-gray-50'">
                        <span class="material-symbols-outlined text-[24px] transition-colors"
                            :class="isActive('/contact') ? 'text-yellow-400' : 'group-hover:text-yellow-400 text-current'">lightbulb</span>
                        <span class="font-bold text-lg">Contact</span>
                        </Link>
                    </div>
                </div>
            </Transition>
        </header>

        <main class="flex-1">
            <slot />
        </main>

        <footer class="bg-gray-50 border-t border-gray-100 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                    <div class="text-center sm:text-left lg:col-span-1">
                        <div class="font-semibold text-[#539254] mb-2 text-lg">Fariz Electric</div>
                        <p class="text-sm text-[#115d81]">Installation, rénovation et dépannage électrique.</p>
                    </div>

                    <div class="text-center sm:text-left lg:col-span-1">
                        <div class="font-semibold text-[#539254] mb-2 text-lg">Coordonnées</div>
                        <p class="text-sm text-[#115d81]"><strong>Email :</strong> contact@farizelectric.fr</p>
                        <p class="text-sm text-[#115d81]"><strong>Tél :</strong> 06 49 81 94 60</p>
                        <p class="text-sm text-[#115d81]"><strong>Adresse :</strong> 34 rue François Vernex, 74960
                            Annecy</p>
                    </div>

                    <div class="text-center sm:text-left lg:col-span-1">
                        <h3 class="font-semibold text-[#539254] mb-2 text-lg">Liens</h3>
                        <ul class="text-sm text-[#539254] space-y-1">
                            <li>
                                <Link href="/contact" class="text-[#115d81] hover:text-[#539254] transition">Demander un
                                devis</Link>
                            </li>
                            <li>
                                <Link href="/mentions-legales" class="text-[#115d81] hover:text-[#539254] transition">
                                Mentions légales</Link>
                            </li>
                        </ul>
                    </div>

                    <div class="flex justify-center sm:justify-start lg:justify-center items-center lg:col-span-1">
                        <img :src="logoPath" alt="Fariz Electric" class="h-12 sm:h-16 md:h-20 lg:h-24 xl:h-28">
                    </div>
                </div>

            </div>
            <div class="text-center text-xs text-gray-500 py-4">© {{ new Date().getFullYear() }} <a
                    href="https://farizelectric.fr" class="text-[#539254] font-bold">Fariz Electric</a>. Tous droits
                réservés.
                Développé par <a href="https://infinity-dev.dev" class="text-[#7f22fe] font-bold">Infinity Dev</a>.
            </div>
        </footer>
    </div>

</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed, ref } from 'vue'
import logoPath from '/public/assets/images/Logo-FarizElectric.png'

const page = usePage()
const flash = computed(() => page.props.flash || {})

const isMobileMenuOpen = ref(false)

const closeMobile = () => { isMobileMenuOpen.value = false }

const isActive = (href) => {
    const url = page?.url || ''
    if (!href || href === '/') return url === '/'
    return url.startsWith(href)
}
</script>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity .2s;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
