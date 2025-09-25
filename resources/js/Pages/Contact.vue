<template>

  <Head>
    <title>Contact | Fariz Electric - Électricien à Annecy</title>
    <meta name="description"
      content="Contactez Fariz Electric pour vos projets d'installation, de rénovation et de dépannage électriques à Annecy et en Haute‑Savoie. Devis gratuit, réponse rapide." />
  </Head>
  <!-- Hero -->
  <section
    class="bg-cover bg-center text-white min-h-[210px] sm:min-h-[260px] md:min-h-[300px] lg:min-h-[320px] flex items-center"
    :style="{ backgroundImage: `url(${contactBgImage})` }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 lg:py-24">
      <div
        class="bg-[#539254]/30 backdrop-blur-sm rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 border border-white text-center transform transition-all duration-[900ms] ease-out will-change-transform"
        :class="heroEnter ? 'opacity-100 scale-100' : 'opacity-0 scale-90'">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">Contactez-nous</h1>
        <p class="mt-3 sm:mt-4 text-white/90 text-sm sm:text-base md:text-lg">Une question, un devis ou un projet ? Nous
          répondons rapidement.</p>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="pt-8 sm:pt-12 md:pt-16 bg-neutral">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 items-start">

        <!-- Formulaire -->
        <div
          class="bg-white rounded-xl border-2 border-[#539254] shadow-xl overflow-hidden transform transition-all duration-[900ms] ease-out will-change-transform"
          :class="leftEnter ? 'translate-x-0 opacity-100' : '-translate-x-32 opacity-0'">
          <div class="px-6 sm:px-8 pt-8 pb-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#539254]">Écrivez‑nous</h2>
            <p class="mt-2 text-[#539254] text-sm sm:text-base">Remplissez le formulaire et recevez une réponse dans les
              plus brefs délais.</p>
          </div>

          <form @submit.prevent="submit" class="px-6 sm:px-8 pb-8 space-y-6">
            <div class="grid gap-6 md:grid-cols-2">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-800">NOM</label>
                <input v-model="form.name" id="name" type="text" :aria-invalid="!!form.errors.name"
                  class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                  :class="form.errors.name ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                  placeholder="Votre nom" required />
                <p v-if="form.errors.name" class="text-sm text-red-600 mt-1">{{ form.errors.name }}</p>
              </div>
              <div>
                <label for="firstname" class="block text-sm font-medium text-gray-800">Prénom</label>
                <input v-model="form.firstname" id="firstname" type="text" :aria-invalid="!!form.errors.firstname"
                  class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                  :class="form.errors.firstname ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                  placeholder="Votre prénom" />
                <p v-if="form.errors.firstname" class="text-sm text-red-600 mt-1">{{ form.errors.firstname }}</p>
              </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
              <div>
                <label for="email" class="block text-sm font-medium text-gray-800">E‑mail</label>
                <input v-model="form.email" id="email" type="email" :aria-invalid="!!form.errors.email"
                  class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                  :class="form.errors.email ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                  placeholder="vous@exemple.com" required />
                <p v-if="form.errors.email" class="text-sm text-red-600 mt-1">{{ form.errors.email }}</p>
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-800">Téléphone (facultatif)</label>
                <input v-model="form.phone" id="phone" type="tel" :aria-invalid="!!form.errors.phone"
                  class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                  :class="form.errors.phone ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                  placeholder="06 00 00 00 00" />
                <p v-if="form.errors.phone" class="text-sm text-red-600 mt-1">{{ form.errors.phone }}</p>
              </div>
            </div>
            <div>
              <label for="subject" class="block text-sm font-medium text-gray-800">Objet</label>
              <input v-model="form.subject" id="subject" type="text" :aria-invalid="!!form.errors.subject"
                class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                :class="form.errors.subject ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                placeholder="Objet de votre message" required />
              <p v-if="form.errors.subject" class="text-sm text-red-600 mt-1">{{ form.errors.subject }}</p>
            </div>
            <div>
              <label for="message" class="block text-sm font-medium text-gray-800">Message</label>
              <textarea v-model="form.message" id="message" rows="5" :aria-invalid="!!form.errors.message"
                class="mt-1 p-2 w-full rounded-md border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-[#539254] focus:ring-2 focus:ring-[#539254] focus:ring-offset-0 focus-visible:ring-2 focus-visible:ring-[#539254]"
                :class="form.errors.message ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
                placeholder="Décrivez votre besoin" required />
              <p v-if="form.errors.message" class="text-sm text-red-600 mt-1">{{ form.errors.message }}</p>
            </div>

            <div class="mt-6 space-y-4">
              <button :disabled="form.processing" type="submit"
                class="inline-flex items-center justify-center w-full px-5 py-3 rounded-md border border-white text-white font-semibold bg-[#539254]/80 hover:bg-[#539254] cursor-pointer">
                Envoyer
              </button>
            </div>

            <!-- Message de succès global (après les 2 cartes) -->
            <div v-if="showSuccessMessage" role="status" aria-live="polite" class="mt-6">
              <div
                class="max-w-3xl mx-auto flex items-center gap-2 rounded-md border border-[#539254]/30 bg-[#539254]/10 text-[#539254] px-4 py-3">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="12" cy="12" r="11" stroke="currentColor" stroke-width="2" opacity="0.25" />
                  <path d="M7 12l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                <span class="font-medium">Merci ! Votre message a été envoyé avec succès !</span>
              </div>
            </div>

            <!-- Message d'erreur global (après les 2 cartes) -->
            <div v-if="hasSubmitError && !showSuccessMessage" role="alert" aria-live="assertive" class="mt-4">
              <div
                class="max-w-3xl mx-auto flex items-center gap-2 rounded-md border border-red-300 bg-red-50 text-red-700 px-4 py-3">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="12" cy="12" r="11" stroke="currentColor" stroke-width="2" opacity="0.25" />
                  <path d="M12 8v4m0 4h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                <span class="font-medium">Une erreur s'est produite lors de l'envoi. Veuillez réessayer.</span>
              </div>
            </div>
          </form>
        </div>

        <!-- Infos de contact -->
        <div
          class="p-6 sm:p-8 bg-gradient-to-r from-[#539254] to-[#4ab1d0] text-white rounded-xl border border-white/30 shadow-xl transform transition-all duration-[900ms] ease-out will-change-transform"
          :class="rightEnter ? 'translate-x-0 opacity-100' : 'translate-x-32 opacity-0'">
          <h3 class="text-xl sm:text-2xl font-semibold">Nos coordonnées et Localisation</h3>
          <p class="mt-2 text-white/90 text-sm sm:text-base">Nous sommes disponibles et réactifs pour vos projets.</p>

          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="flex items-start gap-3">
              <div class="h-10 w-10 rounded-md bg-white/20 grid place-items-center">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <rect x="3" y="5" width="18" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2" />
                  <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <div class="font-semibold">Email</div>
                <a href="mailto:contact@farizelectric.fr"
                  class="text-white/90 hover:text-white break-words">contact@farizelectric.fr</a>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="h-10 w-10 rounded-md bg-white/20 grid place-items-center">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M6.6 10.8c1.2 2.4 3.2 4.4 5.6 5.6l1.9-1.9c.2-.2.5-.3.8-.2 1 .3 2 .5 3.1.5.4 0 .7.3.7.7V19c0 .4-.3.7-.7.7-8 0-14.5-6.5-14.5-14.5 0-.4.3-.7.7-.7H6c.4 0 .7.3.7.7 0 1.1.2 2.1.5 3.1.1.3 0 .6-.2.8l-1.4 1.4z" />
                </svg>
              </div>
              <div>
                <div class="font-semibold">Téléphone</div>
                <a href="tel:+33649819460" class="text-white/90 hover:text-white">06 49 81 94 60</a>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="h-10 w-10 rounded-md bg-white/20 grid place-items-center">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M12 2C8.7 2 6 4.7 6 8c0 5 6 14 6 14s6-9 6-14c0-3.3-2.7-6-6-6zm0 8.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 5.5 12 5.5s2.5 1.1 2.5 2.5S13.4 10.5 12 10.5z" />
                </svg>
              </div>
              <div>
                <div class="font-semibold">Zone d'intervention</div>
                <p class="text-white/90">Annecy et alentours</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="h-10 w-10 rounded-md bg-white/20 grid place-items-center">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M3 10l9-7 9 7v8a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-4H10v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <div class="font-semibold">Adresse</div>
                <p class="text-white/90">34 rue François Vernex, 74960 Annecy</p>
              </div>
            </div>
          </div>

          <!-- Carte Google -->
          <div class="overflow-hidden">
            <div class="mt-6 relative">
              <iframe title="Carte - Zone d'intervention Annecy" class="w-full h-56 sm:h-64 md:h-72 lg:h-90 rounded-xl"
                style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22687.86202118179!2d6.104!3d45.8995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8a8a3a3a3a3%3A0x0000000000000000!2sAnnecy!5e0!3m2!1sfr!2sfr!4v1700000000000">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'
import contactBgImage from '/public/assets/images/hero-bg-contact-page-image.png'

const heroEnter = ref(false)
const leftEnter = ref(false)
const rightEnter = ref(false)
const hasSubmitError = ref(false)
const showSuccessMessage = ref(false)

const form = useForm({
  name: '',
  firstname: '',
  email: '',
  phone: '',
  subject: '',
  message: '',
})

const submit = () => {
  hasSubmitError.value = false
  showSuccessMessage.value = false
  
  form.post('/contact', {
    preserveScroll: true,
    onSuccess: () => {
      form.reset()
      showSuccessMessage.value = true
      // Masquer le message de succès après 5 secondes
      setTimeout(() => {
        showSuccessMessage.value = false
      }, 5000)
    },
    onError: () => {
      hasSubmitError.value = true
    },
  })
}

onMounted(() => {
  requestAnimationFrame(() => {
    heroEnter.value = true
    leftEnter.value = true
    rightEnter.value = true
  })
})
</script>
