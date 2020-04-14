

<?php if (have_rows('acordeon')) { ?>
    <div itemscope itemtype="https://schema.org/FAQPage" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php
        $faq_a = 0; //add counter for targeting first acccordion element
        while (have_rows('acordeon')) {
            the_row();
            ?>
            <div class="panel panel-default" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="panel-heading" role="tab" id="heading_<?php echo $faq_a ?>">
                    <h3 itemprop="name" class="panel-title">
                        <a class="<?php if ($faq_a != 0) echo 'collapsed' ?> " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $faq_a ?>" aria-expanded="<?php
                        if ($faq_a == 0) {
                            echo 'true';
                        } else {
                            echo 'false';
                        };
                        ?>" aria-controls="collapse_<?php echo $faq_a ?>">
                               <?php the_sub_field('tytul'); ?>
                        </a>
                    </h3>
                </div>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapse_<?php echo $faq_a ?>" class="panel-collapse collapse <?php if ($faq_a == 0) echo 'in' ?> <?php the_sub_field('otwarte'); ?>" role="tabpanel" aria-labelledby="heading_<?php echo $faq_a ?>">
                    <div itemprop="text" class="panel-body italic">
                        <?php the_sub_field('tresc'); ?>
                    </div>
                </div>
            </div>

            <?php
            $faq_a++;
        }
        ?>
    </div>
<?php } ?>


<!-- <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "FAQPage",
  "name": "Philippa's Pharmacy",
  "description": "A superb collection of fine pharmaceuticals.",
  "openingHours": "Mo,Tu,We,Th 09:00-12:00"
}
</script>
 -->










