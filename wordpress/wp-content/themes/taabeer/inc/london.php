<?php
/**
 * TAABEER 2.1 "From Pakistan to London": the client's November 2026 brief.
 *
 * - Pakistani pieces shown in London settings; the historical stories stay in Pakistan.
 * - Confirmed contact details replace the placeholders and "by appointment" wording.
 * - New About copy, Art sub-sections, a homepage Brands section and the Shawl Edit.
 *
 * Every layout is native Elementor containers and widgets. Nothing is deleted:
 * each page, header and footer is copied to a draft archive before it is rebuilt.
 *
 * @package Taabeer
 */

defined( 'ABSPATH' ) || exit;

define( 'TAABEER_LONDON_VERSION', '2.1.0' );

/** Confirmed by the client on 2026-11-14. */
function taabeer_london_contact() {
	return array(
		'phone'         => '07411 314590',
		'phone_link'    => 'tel:+447411314590',
		'email'         => 'Taabeerlondon@gmail.com',
		'address_lines' => array( 'Suite RA01', '195-197 Wood Street', 'London E17 3NU' ),
		'address_note'  => 'Correspondence only',
	);
}

function taabeer_london_contact_html() {
	$c = taabeer_london_contact();
	return '<p><a href="' . esc_attr( $c['phone_link'] ) . '">' . esc_html( $c['phone'] ) . '</a><br>'
		. '<a href="mailto:' . esc_attr( $c['email'] ) . '">' . esc_html( $c['email'] ) . '</a></p>'
		. '<p>' . implode( '<br>', array_map( 'esc_html', $c['address_lines'] ) ) . '<br><em>' . esc_html( $c['address_note'] ) . '</em></p>';
}

/**
 * Brands, in the client's order. "Heritage Pottery / Camel Lamps" stays one listing
 * until the client confirms whether it is one brand or two.
 */
function taabeer_london_brands() {
	return array( 'Ajrak', 'Gul Khan', 'Haathkari', 'Gabba Arts', 'Heritage Pottery / Camel Lamps', 'Taar', 'Raka Wear', 'Sufiyaana Threads', 'Belissa', 'Udaari Craft', 'Novin', 'Auris Atelier' );
}

function taabeer_london_brands_section() {
	$cells = array();
	foreach ( taabeer_london_brands() as $brand ) {
		$cells[] = taabeer_visual_container( array( taabeer_visual_heading( esc_html( $brand ), 'h3', 'tb-ldn-brand__name' ) ), 'tb-ldn-brand' );
	}
	$own = taabeer_visual_container(
		array(
			taabeer_hx_image( taabeer_brand_url( 'mark' ), 'tb-ldn-brand__mark' ),
			taabeer_hx_eyebrow( 'Our own collection', 'eyebrow--gold' ),
			taabeer_visual_heading( 'TAABEER Authentic Shawls', 'h3', 'tb-ldn-brand__name' ),
			taabeer_visual_button( 'Discover the shawls', home_url( '/art-of-wear/#shawl-edit' ), 'text-link text-link--light' ),
		),
		'tb-ldn-brand tb-ldn-brand--own'
	);
	$section = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'Curated by TAABEER', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Brands', 'h2' ),
					taabeer_visual_text( '<p>Discover the independent brands, makers and specialist collections brought together by TAABEER.</p>', 'tb-ldn-brands__intro' ),
				),
				'tb-hx-heading'
			),
			taabeer_visual_container( array_merge( array( $own ), $cells ), 'tb-ldn-brands__grid' ),
		),
		'tb-ldn-brands shell',
		'section'
	);
	$section['settings']['css_id'] = 'brands';
	return $section;
}

/** Art of Wear: the regional shawls and dupattas of Pakistan. */
function taabeer_london_shawls() {
	return array(
		array( 'Sindh', 'Ajrak', 'Block-printed cotton in deep indigo and madder red, resist-dyed by hand through many stages. Offered as a mark of respect and hospitality across Sindh.' ),
		array( 'Punjab', 'Phulkari', 'Literally “flower work”: silk-floss darning stitched from the back of hand-spun cloth, traditionally made by women for weddings and celebrations.' ),
		array( 'Khyber Pakhtunkhwa', 'Swati embroidery', 'Dense geometric embroidery in bright silk on dark cloth, from the valleys of Swat, where every motif is counted by thread.' ),
		array( 'Balochistan', 'Balochi needlework', 'Fine geometric stitching and mirror work, passed from mother to daughter and recognised by its jewel-like colour.' ),
		array( 'Chitral', 'Chitrali patti', 'Hand-woven wool from the mountains of Chitral: warm, textured and made for long winters.' ),
		array( 'Kashmir', 'Pashmina', 'Fine goat wool spun and woven by hand — light, warm and among the most treasured shawls in the world.' ),
	);
}

function taabeer_london_shawl_edit() {
	$cards = array();
	foreach ( taabeer_london_shawls() as $i => $shawl ) {
		$cards[] = taabeer_visual_container(
			array(
				taabeer_hx_eyebrow( sprintf( '%02d · %s', $i + 1, $shawl[0] ), 'eyebrow--gold' ),
				taabeer_visual_heading( $shawl[1], 'h3' ),
				taabeer_visual_text( '<p>' . esc_html( $shawl[2] ) . '</p>' ),
			),
			'tb-ldn-shawl'
		);
	}
	$section = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_image( taabeer_art_image_url( 'london-wear-shawl.webp' ), 'tb-ldn-shawls__image tb-arch', 'Detail of a hand-printed Pakistani shawl in madder red and indigo, worn on a London street' ),
				),
				'tb-ldn-shawls__media'
			),
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'The Shawl Edit', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Shawls and dupattas of Pakistan', 'h2' ),
					taabeer_visual_text( '<p>Every region of Pakistan has its own way of making a shawl. Our edit follows those traditions, from the block-printers of Sindh to the weavers of Chitral, and brings them to London to be worn over a winter coat as naturally as over a kurta.</p>', 'tb-ldn-shawls__intro' ),
					taabeer_visual_container( $cards, 'tb-ldn-shawls__grid' ),
					taabeer_visual_container(
						array(
							taabeer_visual_button( 'Enquire about TAABEER Authentic Shawls', home_url( '/contact/?enquiry=collection' ), 'button button--gold' ),
						),
						'button-row'
					),
				),
				'tb-ldn-shawls__content'
			),
		),
		'tb-ldn-shawls',
		'section'
	);
	$section['settings']['css_id'] = 'shawl-edit';
	return $section;
}

/** About page: the client's copy, verbatim. */
function taabeer_london_about_data() {
	$hero = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'About TAABEER', 'eyebrow--gold' ),
					taabeer_visual_heading( 'A curated house of Pakistani heritage', 'h1' ),
					taabeer_visual_text( '<p class="tb-hx-lede">Rooted in Pakistan. Based in London.</p><p>Bringing Pakistan’s heritage, craftsmanship and contemporary creativity together, and honouring the people who make it.</p>', 'tb-hx-art-hero__intro' ),
				),
				'tb-hx-art-hero__content'
			),
			taabeer_visual_container( array( taabeer_hx_image( taabeer_art_image_url( 'london-living-card.webp' ), 'tb-hx-art-hero__image tb-arch', 'A London drawing room with an embroidered cushion and an inlaid side table from Pakistan' ) ), 'tb-hx-art-hero__media' ),
		),
		'tb-hx-art-hero',
		'section'
	);

	$who = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_image( taabeer_art_image_url( 'heritage-arch.webp' ), 'tb-hx-split__image tb-arch', 'A carved Mughal arch framing the Lahore Fort' ) ), 'tb-hx-split__media' ),
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'Who we are', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Heritage and contemporary design, side by side', 'h2' ),
					taabeer_visual_text( '<p>TAABEER is a London-based curated house of Pakistani heritage and contemporary design. We bring together enduring craft traditions and the fresh perspectives of an evolving Pakistan, selecting pieces for their beauty, individuality and the stories they carry.</p>' ),
				),
				'tb-hx-split__content'
			),
		),
		'tb-hx-split shell',
		'section'
	);

	$purpose = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_eyebrow( 'Our purpose', 'eyebrow--gold' ), taabeer_visual_heading( 'Honouring the people behind the work', 'h2' ) ), 'tb-hx-heading' ),
			taabeer_visual_container(
				array(
					taabeer_visual_container(
						array(
							taabeer_visual_heading( 'Artisans and women makers', 'h3' ),
							taabeer_visual_text( '<p>At the heart of TAABEER is respect for the people behind the work. We seek to honour local artisans, recognise their skill and help sustain the knowledge and artistry passed through generations. Our purpose includes supporting women artisans and entrepreneurs, creating opportunities for their work to gain recognition, reach new customers and contribute to stronger livelihoods.</p>' ),
						),
						'tb-ldn-purpose'
					),
					taabeer_visual_container(
						array(
							taabeer_visual_heading( 'Emerging designers and independent brands', 'h3' ),
							taabeer_visual_text( '<p>Alongside established craftsmanship, we make space for emerging designers and small independent Pakistani businesses. Through thoughtful curation and storytelling, we aim to give their creativity an international platform while keeping each maker’s name, identity and contribution visible.</p>' ),
						),
						'tb-ldn-purpose'
					),
				),
				'tb-ldn-purpose__grid'
			),
		),
		'tb-ldn-purpose__wrap shell',
		'section'
	);

	$vision = taabeer_visual_container(
		array(
			taabeer_hx_ornament(),
			taabeer_hx_eyebrow( 'Our vision', 'eyebrow--gold' ),
			taabeer_visual_text( '<blockquote><p>Our vision is to bring Pakistan’s many creative expressions into homes and wardrobes around the world—and help build a future in which the people who create them can thrive.</p></blockquote>', 'tb-hx-quote__text' ),
		),
		'tb-hx-quote',
		'section'
	);

	$next = taabeer_visual_container(
		array(
			taabeer_hx_eyebrow( 'Begin a conversation', 'eyebrow--gold' ),
			taabeer_visual_heading( 'Discover the Curated Arts', 'h2' ),
			taabeer_visual_text( '<p>Explore the five Arts of TAABEER, or contact us about a piece, a maker or a partnership.</p>' ),
			taabeer_visual_container(
				array(
					taabeer_visual_button( 'Explore the Arts', home_url( '/#curated-arts' ), 'button button--gold' ),
					taabeer_visual_button( 'Contact TAABEER', home_url( '/contact/' ), 'text-link text-link--light' ),
				),
				'button-row'
			),
		),
		'tb-hx-appointment',
		'section'
	);

	return array( $hero, $who, $purpose, $vision, $next );
}

/** Contact page: confirmed details replace the placeholders; the layout itself is kept. */
function taabeer_london_patch_contact_tree( $nodes ) {
	$c   = taabeer_london_contact();
	$out = array();
	foreach ( $nodes as $node ) {
		if ( ! is_array( $node ) ) {
			$out[] = $node;
			continue;
		}
		$classes = $node['settings']['_css_classes'] ?? '';
		if ( false !== strpos( $classes, 'tb-contact-placeholder' ) ) {
			continue;
		}
		if ( 'icon-box' === ( $node['widgetType'] ?? '' ) ) {
			$title = $node['settings']['title_text'] ?? '';
			if ( in_array( $title, array( 'Location', 'Correspondence address' ), true ) ) {
				$node['settings']['title_text']       = 'Correspondence address';
				$node['settings']['description_text'] = implode( '<br>', array_map( 'esc_html', $c['address_lines'] ) ) . '<br><em>' . esc_html( $c['address_note'] ) . '</em>';
				$node['settings']['link']             = array( 'url' => '' );
			} elseif ( 'Email' === $title ) {
				$node['settings']['description_text'] = esc_html( $c['email'] );
				$node['settings']['link']             = array( 'url' => 'mailto:' . $c['email'] );
			} elseif ( 'Telephone' === $title ) {
				$node['settings']['description_text'] = esc_html( $c['phone'] );
				$node['settings']['link']             = array( 'url' => $c['phone_link'] );
			}
		}
		if ( ! empty( $node['elements'] ) ) {
			$node['elements'] = taabeer_london_patch_contact_tree( $node['elements'] );
		}
		$out[] = $node;
	}
	return $out;
}

/** Copy a post's current layout to a draft labelled with this release, once. */
function taabeer_london_archive( $post, $label ) {
	$existing = get_posts(
		array(
			'post_type'      => $post->post_type,
			'post_status'    => 'any',
			'posts_per_page' => 1,
			'meta_query'     => array(
				array( 'key' => '_taabeer_archive_of', 'value' => $post->ID ),
				array( 'key' => '_taabeer_archive_release', 'value' => TAABEER_LONDON_VERSION ),
			),
		)
	);
	if ( $existing ) {
		return $existing[0]->ID;
	}
	$id = taabeer_heritage_archive_copy( $post, $label );
	if ( $id ) {
		update_post_meta( $id, '_taabeer_archive_release', TAABEER_LONDON_VERSION );
		if ( 'elementor-hf' === $post->post_type ) {
			delete_post_meta( $id, 'ehf_target_include_locations' );
		}
	}
	return $id;
}

/** Same copy as the Heritage archive, without its "one archive per post" shortcut. */
function taabeer_heritage_archive_copy( $post, $label ) {
	$id = wp_insert_post(
		array(
			'post_type'    => $post->post_type,
			'post_status'  => 'draft',
			'post_title'   => $label,
			'post_name'    => sanitize_title( $label ),
			'post_content' => $post->post_content,
		)
	);
	if ( ! $id || is_wp_error( $id ) ) {
		return 0;
	}
	foreach ( array( '_elementor_data', '_elementor_edit_mode', '_elementor_template_type', '_elementor_version', '_elementor_page_settings', '_wp_page_template' ) as $key ) {
		$value = get_post_meta( $post->ID, $key, true );
		if ( '' !== $value && null !== $value ) {
			update_post_meta( $id, $key, is_string( $value ) ? wp_slash( $value ) : $value );
		}
	}
	update_post_meta( $id, '_taabeer_archive_of', $post->ID );
	return $id;
}

function taabeer_london_rebuild( $post_id, $data, $label ) {
	$post = get_post( $post_id );
	if ( ! $post || TAABEER_LONDON_VERSION === get_post_meta( $post_id, '_taabeer_london', true ) ) {
		return;
	}
	taabeer_london_archive( $post, $label );
	taabeer_visual_save( $post_id, $data );
	update_post_meta( $post_id, '_taabeer_heritage', TAABEER_HERITAGE_VERSION );
	update_post_meta( $post_id, '_taabeer_london', TAABEER_LONDON_VERSION );
}

function taabeer_london_apply() {
	if ( TAABEER_LONDON_VERSION === get_option( 'taabeer_london' ) ) {
		return true;
	}
	if ( TAABEER_HERITAGE_VERSION !== get_option( 'taabeer_heritage' ) || ! did_action( 'elementor/loaded' ) || ! function_exists( 'taabeer_visual_save' ) ) {
		return false;
	}

	$home_id = (int) get_option( 'page_on_front' );
	if ( $home_id ) {
		taabeer_london_rebuild( $home_id, taabeer_heritage_home_data(), 'Home — Heritage 2.0 (archive)' );
	}

	foreach ( taabeer_heritage_arts() as $slug => $art ) {
		$page = get_page_by_path( $slug, OBJECT, 'page' );
		if ( $page ) {
			taabeer_london_rebuild( $page->ID, taabeer_heritage_art_page_data( $slug ), $art['title'] . ' — Heritage 2.0 (archive)' );
		}
		if ( $page && ( 'art-of-wear' === $slug || 'art-of-living' === $slug ) ) {
			update_post_meta( $page->ID, '_yoast_wpseo_metadesc', $art['intro'] );
		}
	}

	$about = get_page_by_path( 'about', OBJECT, 'page' );
	if ( $about ) {
		taabeer_london_rebuild( $about->ID, taabeer_london_about_data(), 'About — Previous Design (archive)' );
		update_post_meta( $about->ID, '_yoast_wpseo_metadesc', 'TAABEER is a London-based curated house of Pakistani heritage and contemporary design, honouring artisans and giving emerging Pakistani brands an international platform.' );
	}

	$contact = get_page_by_path( 'contact', OBJECT, 'page' );
	if ( $contact && TAABEER_LONDON_VERSION !== get_post_meta( $contact->ID, '_taabeer_london', true ) ) {
		$tree = json_decode( (string) get_post_meta( $contact->ID, '_elementor_data', true ), true );
		if ( is_array( $tree ) ) {
			taabeer_london_archive( $contact, 'Contact — Previous Design (archive)' );
			update_post_meta( $contact->ID, '_elementor_data', wp_slash( wp_json_encode( taabeer_london_patch_contact_tree( $tree ) ) ) );
			delete_post_meta( $contact->ID, '_elementor_element_cache' );
			delete_post_meta( $contact->ID, '_elementor_css' );
			update_post_meta( $contact->ID, '_taabeer_london', TAABEER_LONDON_VERSION );
		}
	}

	foreach ( array( 'header' => 'taabeer_heritage_header_data', 'footer' => 'taabeer_heritage_footer_data' ) as $location => $builder ) {
		$shared = get_posts( array( 'post_type' => 'elementor-hf', 'post_status' => 'publish', 'posts_per_page' => 1, 'meta_key' => '_taabeer_shared', 'meta_value' => $location ) );
		if ( $shared ) {
			taabeer_london_rebuild( $shared[0]->ID, call_user_func( $builder ), 'TAABEER — Heritage 2.0 ' . ucfirst( $location ) . ' (archive)' );
		}
	}

	taabeer_heritage_kit();
	if ( class_exists( '\\Elementor\\Plugin' ) ) {
		\Elementor\Plugin::instance()->files_manager->clear_cache();
	}
	update_option( 'taabeer_london', TAABEER_LONDON_VERSION );
	return true;
}

/** Runs for an administrator after the theme update, once the Heritage layer is in place. */
add_action(
	'admin_init',
	function () {
		if ( wp_doing_ajax() || ! current_user_can( 'manage_options' ) || TAABEER_LONDON_VERSION === get_option( 'taabeer_london' ) ) {
			return;
		}
		taabeer_london_apply();
	},
	60
);

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::add_command(
		'taabeer london',
		function () {
			WP_CLI::log( taabeer_london_apply() ? 'TAABEER 2.1 (From Pakistan to London) applied.' : 'Apply the Heritage design first and make sure Elementor is active.' );
		}
	);
}
