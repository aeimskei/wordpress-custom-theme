<?php
/**
 * The template for displaying the sidebar and widgets
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php if (is_active_sidebar( 'sidebar-1') ) : ?>
    <!-- aside is actually an HTML tag, class helps us target via CSS -->
    <aside id="secondary" class="sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1'); ?>
    </aside>
<?php endif; ?>