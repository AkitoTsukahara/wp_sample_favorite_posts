<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>
<div class="post-list">
    <div class="post-content">
        <a href="#">
            <div class="post-image" style="background-image: url('/wp-content/uploads/2021/12/dagmara-dombrovska-OLmu1EFnSdk-unsplash.jpg')"></div>
        </a>
        <div class="post-data">
            <ul class="post-category">
                <li>
                    <a href="/sample"><span>sample</span></a>
                </li>
            </ul>
            <a href="/sample/1111"><h2>Traditional Christmas Market Begins in Strasbourg, France</h2></a>
            <p class="date">2021/12/04</p>
        </div>
    </div>
    <div class="post-content">
        <a href="#">
            <div class="post-image" style="background-image: url('/wp-content/uploads/2021/12/nick-de-partee-8Vd-WgpK9UQ-unsplash.jpg')"></div>
        </a>
        <div class="post-data">
            <ul class="post-category">
                <li>
                    <a href="/sample"><span>sample</span></a>
                </li>
            </ul>
            <a href="/sample/2222"><h2>Christmas tree lighting ceremony in the U.S. capital: famous artists present songs</h2></a>
            <p class="date">2021/12/04</p>
        </div>
    </div>
    <div class="post-content">
        <a href="#">
            <div class="post-image" style="background-image: url('/wp-content/uploads/2021/12/trnava-university-ec-QZhIWbho-unsplash.jpg')"></div>
        </a>
        <div class="post-data">
            <ul class="post-category">
                <li>
                    <a href="/sample"><span>sample</span></a>
                </li>
            </ul>
            <a href="/sample/3333"><h2>10 recommendations for stylish postcards. From Scandinavian designs to cute illustrations</h2></a>
            <p class="date">2021/12/04</p>
        </div>
    </div>
</div>
<style>
    .post-list {
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto;
    }
    .post-content {
        width: calc(100% / 3 - 18px);
        margin: 0 18px 18px 0;
        position: relative;
        height: 360px;
        background: #fff;
    }
    .post-image {
        width: 100%;
        height: 180px;
        background-position: center;
        background-size: cover;
    }
    .post-data {
        padding: 30px;
    }
    .post-category {
        font-size: 12px;
        font-weight: bold;
    }
    .post-data h2 {
        width: 100%;
        height: 72px;
        margin-top: 18px;
        font-size: 18px;
        font-weight: bold;
        line-height: 24px;
    }
    .post-list ul{
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .post-list .date {
        margin-top: 12px;
        color: #7e82a6;
        font-size: 12px;
    }
    .post-list a {
        text-decoration: none;
    }
</style>
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
