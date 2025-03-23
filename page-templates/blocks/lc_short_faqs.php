<section class="faq_split_layout position-relative">
    <div class="faq_split_layout__background">
        <div class="faq_split_layout__left-bg"></div>
        <div class="faq_split_layout__right-bg"></div>
    </div>

    <div class="container-xl position-relative">
        <div class="row">
            <div class="col-lg-9 faq_split_layout__left">
                <h2 data-aos="fade">Frequently Asked Questions</h2>

                <?php if (have_rows('faqs')) {
                    $d = 0;
                ?>
                    <div class="accordion faq_accordion mb-4" id="faqAccordion">
                        <?php
                        $schema_items = [];
                        $i = 0;
                        while (have_rows('faqs')) {
                            the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                            $id = 'faq' . $i;
                            $schema_items[] = [
                                "@type" => "Question",
                                "name" => wp_strip_all_tags($question),
                                "acceptedAnswer" => [
                                    "@type" => "Answer",
                                    "text" => wp_strip_all_tags($answer)
                                ]
                            ];
                        ?>
                            <div class="accordion-item" data-aos="fade" data-aos-delay="<?= $d ?>">
                                <h3 class="accordion-header" id="heading<?= $i ?>">
                                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#<?= $id ?>" aria-expanded="false"
                                        aria-controls="<?= $id ?>">
                                        <span><?= $question ?></span>
                                    </button>
                                </h3>
                                <div id="<?= $id ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?= wp_kses_post($answer) ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $i++;
                            $d += 100;
                        } ?>
                    </div>
                    <div class="text-end">
                        <a href="/faqs/" class="has-arrow">Read More</a>
                    </div>

                    <!-- JSON-LD schema output -->
                    <script type="application/ld+json">
                        {
                            "@context": "https://schema.org",
                            "@type": "FAQPage",
                            "mainEntity": <?= json_encode($schema_items, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
                        }
                    </script>
                <?php } ?>
            </div>
            <div class="col-lg-3 faq_split_layout__right">
                <?= wp_get_attachment_image(get_field('image'), 'full', false, ['class' => 'img-fluid faq_split_layout__image', 'data-aos' => 'fade']) ?>
            </div>
        </div>
    </div>
</section>