<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <div class="contact__content">
            <?=  get_the_content();  ?>
        </div>
        <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
            <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="post" class="contact__form" >
                <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                    <p><?= __('Oups ! Il y a des erreurs dans le formulaire', 'Aline-db-antilope'); ?></p>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname" class="form__label"><?= __('Votre prénom', 'Aline-db-antilope'); ?> :</label>
                    <input type="text" name="firstname" id="firstname" class="form__input">
                </div>
                <div class="form__field">
                    <label for="name" class="form__label"><?= __('Votre Nom', 'Aline-db-antilope'); ?> :</label>
                    <input type="text" name="name" id="name" class="form__input">
                </div>
                <div class="form__field">
                    <label for="phone" class="form__label"><?= __('Votre téléphone', 'Aline-db-antilope'); ?> :</label>
                    <input type="tel" name="phone" id="phone" class="form__input">
                </div>
                <div class="form__field">
                    <label for="mail" class="form__label"><?= __('Votre email', 'Aline-db-antilope'); ?> :</label>
                    <input type="email" name="mail" id="mail" class="form__input">
                </div>
                <div class="form__field">
                    <label for="message" class="form__label"><?= __('Votre message', 'Aline-db-antilope'); ?> :</label>
                    <textarea type="message" name="message" cols="30" rows="10" id="message" class="form__input">
                    </textarea>
                </div>
                <div class="form__field">
                    <label for="rules" class="form__checkbox">
                        <input type="checkbox" name="rules"  id="rules" value="1">
                        <span><?= str_replace(':conditions', '<a href="http://localhost/Antilope/antilope/politique-de-confidentialite/">' . __('conditions générales d\'utilisation', 'Aline-db-antilope') . '</a>', __('J\'accepte les :conditions', 'Aline-db-antilope')); ?>
                        .</span>
                    </label>
                </div>
                <div class="form__action">
                    <?php wp_nonce_field('nonce_submit_contact') ?>
                    <input type="hidden" name="action" value="submit_contact_form"/>
                    <button class="form__button" type="submit"><?= __('Envoyer', 'Aline-db-antilope'); ?></button>
                </div>
            </form>
        <?php else : ?>
            <p id="contact"><?= __('Merci ! Votre message a bien été envoyé.', 'Aline-db-antilope'); ?>.</p>
            <?php unset($_SESSION['contact_form_feedback']); endif; ?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
