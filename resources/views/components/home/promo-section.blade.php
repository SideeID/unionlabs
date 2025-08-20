<section class="p-4">
  <div class="embla embla-promo overflow-hidden">
    <div class="embla__container flex">
      <div class="embla__slide flex-[0_0_100%]">
        <img src="/assets/Cashback.png" class="w-full h-48 object-cover" />
      </div>
      <div class="embla__slide flex-[0_0_100%]">
        <img src="/assets/Cashback.png" class="w-full h-48 object-cover" />
      </div>
      <div class="embla__slide flex-[0_0_100%]">
        <img src="/assets/Cashback.png" class="w-full h-48 object-cover" />
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const emblaNode = document.querySelector('.embla-promo')
  if (!emblaNode) return
  const embla = EmblaCarousel(emblaNode, { loop: true })

  let promoInterval = setInterval(() => embla.scrollNext(), 3000)

  emblaNode.addEventListener('mouseenter', () => clearInterval(promoInterval))
  emblaNode.addEventListener('mouseleave', () => {
    promoInterval = setInterval(() => embla.scrollNext(), 3000)
  })
})
</script>
