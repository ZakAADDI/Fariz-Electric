<template>
  <!-- Hero -->
  <section
    class="bg-cover bg-center text-white min-h-[210px] sm:min-h-[260px] md:min-h-[300px] lg:min-h-[320px] flex items-center"
    :style="{ backgroundImage: `url(${heroBgImage})` }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 lg:py-24">
      <div
        class="bg-[#539254]/30 backdrop-blur-sm rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 border border-white text-center transform transition-all duration-[900ms] ease-out will-change-transform"
        :class="heroEnter ? 'opacity-100 scale-100' : 'opacity-0 scale-90'">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">Mentions légales</h1>
        <p class="mt-3 sm:mt-4 text-white/90 text-sm sm:text-base md:text-lg">Informations légales de Fariz Electric</p>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="pt-8 pb-0 sm:pt-12 sm:pb-0 md:pt-16 md:pb-0 bg-neutral">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-xl border-2 border-[#539254] shadow-xl p-6 sm:p-8 space-y-6">
        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">1. Éditeur du site</h2>
          <div class="mt-2 text-gray-700 space-y-1">
            <p>Dénomination sociale : <strong>Fariz Electric</strong></p>
            <p>Forme juridique : <strong>SARL au capital de 5 000 €</strong></p>
            <p>Siège social : <strong>34 rue François Vernex, 74960</strong></p>
            <p>Immatriculation : <strong>RCS Annecy n° [En cours]</strong></p>
            <p>Numéro de TVA intracommunautaire : <strong>[En cours]</strong></p>
            <p>Téléphone : <strong>06 49 81 94 60</strong></p>
            <p>Email : <a href="mailto:contact@farizelectric.fr"
                class="text-[#539254] underline">contact@farizelectric.fr</a></p>
            <p>Responsable de la publication : <strong>Fariz BEN JADDY</strong> - Électricien et fondateur de Fariz
              Electric</p>
          </div>
        </div>

        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">2. Hébergement du site</h2>
          <div class="mt-2 text-gray-700 space-y-1">
            <p>Nom de l’hébergeur : <strong>OVH</strong></p>
            <p>Adresse : <strong>2 rue Kellermann, 59100 Roubaix</strong></p>
            <p>Téléphone : <strong>1007</strong> ou <strong>+33 9 72 10 10 07</strong> depuis une ligne en dehors de la
              France</p>
          </div>
        </div>

        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">3. Propriété intellectuelle</h2>
          <div class="mt-2 text-gray-700 space-y-2">
            <p>L’ensemble des éléments du site (textes, logos, graphismes, structure, etc.) est la propriété exclusive
              de Fariz Electric, sauf mention contraire.</p>
            <p>Certaines images présentes sur le site proviennent de banques d’images libres de droits et sont utilisées
              conformément à leurs conditions d’utilisation.</p>
            <p>Toute reproduction, représentation, modification, publication, transmission ou adaptation, totale ou
              partielle, des éléments du site est interdite sans autorisation préalable.</p>
          </div>
        </div>

        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">4. Responsabilité</h2>
          <p class="mt-2 text-gray-700">L’éditeur s’efforce de fournir sur le site des informations aussi précises que
            possible. Toutefois, il ne pourra être tenu responsable des omissions, des inexactitudes ou des carences
            dans la mise à jour.</p>
        </div>

        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">5. Données personnelles</h2>
          <div class="mt-2 text-gray-700 space-y-2">
            <p>Les informations collectées via le formulaire de contact sont destinées uniquement à Fariz Electric afin
              de répondre aux demandes des utilisateurs.</p>
            <p>Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi « Informatique et
              Libertés », vous disposez d’un droit d’accès, de rectification et de suppression de vos données. Vous
              pouvez exercer ce droit en nous contactant à l’adresse suivante : <a
                href="mailto:contact@farizelectric.fr" class="text-[#539254] underline">contact@farizelectric.fr</a>.
            </p>
            <p>Le site peut être amené à utiliser des cookies uniquement à des fins de navigation et de statistiques.
            </p>
          </div>
        </div>

        <div>
          <h2 class="text-xl sm:text-2xl font-bold text-[#539254]">6. Droit applicable</h2>
          <p class="mt-2 text-gray-700">Les présentes mentions légales sont régies par le droit français. En cas de
            litige, et à défaut de solution amiable, les tribunaux français seront seuls compétents.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import heroBgImage from '/public/assets/images/bg-mentions-legales.png'

const heroEnter = ref(false)
onMounted(() => {
  requestAnimationFrame(() => {
    heroEnter.value = true
  })
})
</script>
