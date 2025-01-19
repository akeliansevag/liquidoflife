<?php get_header(); ?>
<section>
    <div class="container">
        <h1 class="section-title text-center"><?= the_title(); ?></h1>
        <div class="flex flex-col gap-3 my-10">
            <div class="bg-secondary rounded-3xl p-8">
                <h2 class="text-3xl font-bold text-[#676767] pl-3">Bottle-free Dispensers</h2>
                <div class="flex flex-col gap-4 mt-5">
                    <!-- FAQ Item -->
                    <div class="bg-white rounded-xl border border-[#D8D8D8] overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg text-gray-700">How are bottle-free dispensers actually installed?</span>
                            <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="px-6 pb-4 pt-2">
                                <p class="text-gray-600">Our professional technicians handle the entire installation process with meticulous attention to detail. The installation typically follows these steps:</p>
                                <ul class="list-disc ml-6 mt-3 space-y-2 text-gray-600">
                                    <li>Initial site assessment to determine the optimal location</li>
                                    <li>Professional connection to your existing water line using industry-grade materials</li>
                                    <li>Installation of the filtration system with multiple stages of purification</li>
                                    <li>Thorough testing of water quality and pressure</li>
                                    <li>Complete system setup and calibration</li>
                                </ul>
                                <p class="mt-3 text-gray-600">The entire process usually takes 2-3 hours, and our technicians ensure everything meets local building codes and regulations.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

</section>
<?php get_footer(); ?>