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
                    <p>Oups ! Il y a des erreurs dans le formulaire</p>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname" class="form__label">Votre prénom :</label>
                    <input type="text" name="firstname" id="firstname" class="form__input">
                </div>
                <div class="form__field">
                    <label for="name" class="form__label">Votre nom :</label>
                    <input type="text" name="name" id="name" class="form__input">
                </div>
                <div class="form__field">
                    <label for="phone" class="form__label">Votre téléphone :</label>
                    <input type="tel" name="phone" id="phone" class="form__input">
                </div>
                <div class="form__field">
                    <label for="mail" class="form__label">Votre email :</label>
                    <input type="email" name="mail" id="mail" class="form__input">
                </div>
                <div class="form__field">
                    <label for="message" class="form__label">Votre message :</label>
                    <textarea type="message" name="message" cols="30" rows="10" id="message" class="form__input">
                    </textarea>
                </div>
                <div class="form__field">
                    <label for="rules" class="form__checkbox">
                        <input type="checkbox" name="rules"  id="rules" value="1">
                        <span>J'accepte les <a href="#">conditions d'utilisations</a>.</span>
                    </label>
                </div>
                <div class="form__action">
                    <?php wp_nonce_field('nonce_submit_contact') ?>
                    <input type="hidden" name="action" value="submit_contact_form"/>
                    <button class="form__button" type="submit">Envoyez</button>
                </div>
            </form>
        <?php else : ?>
            <p id="contact">Merci ! Votre message a bien été envoyé.</p>
            <?php unset($_SESSION['contact_form_feedback']); endif; ?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
