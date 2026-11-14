<?php
/**
 * TAABEER 2.0 "Heritage" direction: the Curated Arts structure, brand identity,
 * homepage, Art pages and shared header/footer. Every layout is built from native
 * Elementor containers and widgets so the client can edit each element. Nothing
 * that existed before is deleted: previous layouts are archived as drafts/meta.
 *
 * @package Taabeer
 */

defined( 'ABSPATH' ) || exit;

define( 'TAABEER_HERITAGE_VERSION', '2.0.0' );

function taabeer_art_image_url( $filename ) {
	return TAABEER_URI . '/assets/images/art/' . ltrim( $filename, '/' );
}

function taabeer_brand_url( $name ) {
	return TAABEER_URI . '/assets/brand/taabeer-' . $name . '.svg';
}

/**
 * The five Curated Arts, in the client's navigation order.
 * Each entry: title, short line, introduction, hero image, quote, feature, sub-areas.
 */
function taabeer_heritage_arts() {
	return array(
		'art-of-wear'      => array(
			'title'   => 'Art of Wear',
			'short'   => 'Contemporary silhouettes rooted in tradition',
			'tagline' => 'Heritage, woven into the way you dress.',
			'intro'   => 'A curated blend of luxury heritage and contemporary silhouettes, bringing together expressive textiles, considered details and distinctive personal style.',
			'image'   => 'london-wear.webp',
			'card'    => 'london-wear-card.webp',
			'quote'   => 'Every stitch is a sentence in a story that has been told for centuries — we simply give it a new voice.',
			'feature' => array( 'hand-stitch.webp', 'The hand behind the hem', 'Zardozi, tilla, chikankari and shadow work are slow arts, learned in the workshops of Lahore, Multan and Hyderabad. A single panel can hold weeks of patient work. We choose pieces that honour these techniques while cutting for the way we dress in London today — lighter fabrics, cleaner lines and pieces that move easily from occasion to everyday.' ),
			'areas'   => array(
				array( 'tile-embroidery.webp', 'Shawls', 'A considered selection of shawls celebrating rich patterns, beautiful textures and the enduring elegance of draped textiles.' ),
				array( 'art-wear.webp', 'Clothing & Statement Jackets', 'Shirts, kurtas, complete outfits and dressy jackets that bring heritage influences into contemporary dressing.' ),
				array( '', 'The Footwear Edit', 'Distinctive footwear selected for its design, character and ability to complement both traditional and contemporary wardrobes.' ),
				array( '', 'The Headwear Edit', 'Thoughtfully selected head coverings and accessories that bring a finishing touch to personal style.' ),
			),
		),
		'art-of-living'    => array(
			'title'   => 'Art of Living',
			'short'   => 'Elegant spaces, heritage at home',
			'tagline' => 'Pakistani craft, at home in London.',
			'intro'   => 'Considered pieces for a beautifully lived-in home, bringing Pakistani craftsmanship and contemporary design into everyday spaces.',
			'image'   => 'london-living.webp',
			'card'    => 'london-living-card.webp',
			'quote'   => 'A home is the most personal gallery we will ever curate.',
			'feature' => array( 'jali-corridor.webp', 'Light, pattern and stillness', 'In the havelis of Lahore, the carved jali screen filters harsh sunlight into soft pattern and the hand-knotted rug turns a floor into a landscape. The Art of Living brings that same quiet intelligence into a London home — beautiful, useful and rooted in centuries of making.' ),
			'areas'   => array(
				array( 'london-living-card.webp', 'Furniture', 'Distinctive furniture chosen for its craftsmanship, character and balance of beauty and function.' ),
				array( 'tile-rug.webp', 'Textiles & Soft Furnishings', 'Cushions, throws and decorative textiles that bring warmth, texture and artistic detail into the home.' ),
				array( 'tile-vessels.webp', 'Tableware', 'Carefully selected pieces for serving, dining and gathering, bringing artistry to the everyday table.' ),
				array( 'tile-jali.webp', 'Crafted Accessories', 'Decorative accents and useful objects that celebrate the maker’s touch and add individuality to a space.' ),
			),
		),
		'art-of-expression' => array(
			'title'   => 'Art of Expression',
			'short'   => 'Artisanal stationery, calligraphy & art',
			'tagline' => 'Distinctive art. Stories of Pakistan.',
			'intro'   => 'Art, objects and the written word, from Pakistan’s calligraphers, printmakers, metalworkers and textile artists to the contemporary voices reinterpreting them — chosen to bring character and meaning into a space.',
			'image'   => 'london-expression.webp',
			'card'    => 'london-expression-card.webp',
			'quote'   => 'In the stroke of a qalam lies the discipline of a lifetime and the freedom of a moment.',
			'feature' => array( 'print-blocks.webp', 'Pattern carved by hand', 'Before a single sheet is printed in Sindh, a block is carved in wood by hand. We present artists, calligraphers and printmakers whose work continues these traditions on paper, cloth and canvas — signed, limited and made to be kept.' ),
			'areas'   => array(
				array( 'calligraphy-board.webp', 'Art & Prints', 'A curated collection of artworks and prints exploring heritage, identity and contemporary expression.' ),
				array( '', 'Sculpture & Decorative Art', 'Distinctive sculptural pieces and decorative objects that bring character and artistry into a space.' ),
				array( 'tile-embroidery.webp', 'Textile Art', 'Creative expressions in thread, weave and embroidery, celebrating the richness of textile traditions.' ),
				array( 'tile-lion.webp', 'Metalwork', 'Artistic objects in metal, celebrating intricate detail, skilled craftsmanship and enduring design.' ),
				array( 'art-expression.webp', 'Fine Stationery & Calligraphy', 'Thoughtfully crafted stationery, writing tools and calligraphic pieces celebrating the beauty of the written word.' ),
			),
		),
		'art-of-adornment' => array(
			'title'   => 'Art of Adornment',
			'short'   => 'Heritage jewellery, contemporary hands',
			'tagline' => 'Distinctive jewellery. Individual expression.',
			'intro'   => 'Kundan, polki, jhumkas and hand-finished accessories. The Art of Adornment brings together heirloom techniques and contemporary design — jewellery made to be worn, remembered and inherited.',
			'image'   => 'london-adornment.webp',
			'card'    => 'london-adornment-card.webp',
			'quote'   => 'Adornment is how heritage is carried closest to the heart.',
			'feature' => array( 'bride-portrait.webp', 'Made to be inherited', 'Kundan setting, meenakari enamel and filigree are techniques passed from master to apprentice. We work with jewellers who keep these skills alive while designing pieces light enough for today and remarkable enough for the occasions that matter.' ),
			'areas'   => array(
				array( 'art-adornment.webp', 'Kundan & Polki', 'Statement necklaces and sets hand-set in the Mughal tradition.' ),
				array( 'tile-jhumka.webp', 'Jhumkas & Earrings', 'Bell-shaped classics and contemporary drops, finished by hand.' ),
				array( 'bride-portrait.webp', 'Bridal Heirlooms', 'Considered pieces for the most important days, made to be passed on.' ),
			),
		),
		'art-of-antiques'  => array(
			'title'   => 'Art of Antiques',
			'short'   => 'Museum-quality pieces with provenance',
			'tagline' => 'Objects with history. Stories to treasure.',
			'intro'   => 'Brass, carved wood, ceramics and architectural fragments, each with a story behind it. The Art of Antiques presents pieces chosen for craftsmanship, condition and character, with care taken over their history and provenance.',
			'image'   => 'london-antiques.webp',
			'card'    => 'london-antiques-card.webp',
			'quote'   => 'An antique is a conversation with the hands of another century.',
			'feature' => array( 'heritage-arch.webp', 'Provenance, patina and care', 'Every antique is examined, researched and described honestly — its age, its material and any restoration it has received. We prefer pieces that show the life they have lived, and we share what is known of their journey so they can be enjoyed with confidence.' ),
			'areas'   => array(
				array( 'art-antiques.webp', 'Brass & Metalwork', 'Inkwells, vessels and lamps with the warmth of age.' ),
				array( 'tile-lion.webp', 'Architectural Fragments', 'Door furniture, carved panels and details from historic buildings.' ),
				array( 'tile-vessels.webp', 'Vessels & Ceramics', 'Glazed and earthenware pieces from workshops of the past.' ),
			),
		),
	);
}

function taabeer_heritage_journal_url() {
	$link = get_post_type_archive_link( 'heritage_story' );
	return $link ? $link : home_url( '/journal/' );
}

/** Primary navigation in the client's order. */
function taabeer_heritage_nav_items() {
	$items = array( array( 'Home', home_url( '/' ) ) );
	foreach ( taabeer_heritage_arts() as $slug => $art ) {
		$items[] = array( $art['title'], home_url( '/' . $slug . '/' ) );
	}
	$items[] = array( 'Journal', taabeer_heritage_journal_url() );
	$items[] = array( 'About', home_url( '/about/' ) );
	return $items;
}

/* ---------------------------------------------------------------------------
 * Native Elementor element helpers.
 * ------------------------------------------------------------------------- */

function taabeer_hx_link_box( $children, $class, $url ) {
	$box                     = taabeer_visual_container( $children, $class, 'a' );
	$box['settings']['link'] = array( 'url' => $url );
	return $box;
}

function taabeer_hx_image( $src, $class = '', $alt = '', $url = '' ) {
	$image = taabeer_visual_image( $src, $class );
	if ( $alt ) {
		$image['settings']['taabeer_alt'] = $alt;
	}
	if ( $url ) {
		$image['settings']['link_to'] = 'custom';
		$image['settings']['link']    = array( 'url' => $url );
	}
	return $image;
}

function taabeer_hx_eyebrow( $text, $class = '' ) {
	return taabeer_visual_text( '<p>' . esc_html( $text ) . '</p>', trim( 'eyebrow ' . $class ) );
}

function taabeer_hx_ornament() {
	return taabeer_hx_image( taabeer_brand_url( 'mark' ), 'tb-hx-ornament' );
}

/* ---------------------------------------------------------------------------
 * Shared header and footer.
 * ------------------------------------------------------------------------- */

function taabeer_heritage_header_data() {
	$nav = array();
	foreach ( taabeer_heritage_nav_items() as $item ) {
		$nav[] = array( '_id' => taabeer_visual_id(), 'text' => $item[0], 'link' => array( 'url' => $item[1] ) );
	}
	$brand = taabeer_visual_container(
		array(
			taabeer_hx_image( taabeer_brand_url( 'mark' ), 'tb-brand-mark', 'TAABEER', home_url( '/' ) ),
			taabeer_hx_image( taabeer_brand_url( 'wordmark' ), 'tb-brand-wordmark', 'TAABEER home', home_url( '/' ) ),
		),
		'site-brand tb-hx-brand'
	);
	return array(
		taabeer_visual_text( '<p>Curating Expressions of Pakistan &nbsp;·&nbsp; London</p>', 'taabeer-announcement tb-hx-announcement' ),
		taabeer_visual_container(
			array(
				taabeer_visual_container(
					array(
						taabeer_visual_widget( 'taabeer-navigation', array( 'items' => $nav ), 'tb-nav tb-hx-nav' ),
						$brand,
						taabeer_visual_container(
							array(
								taabeer_visual_widget( 'taabeer-utility', array( 'kind' => 'search', 'label' => 'Search' ) ),
								taabeer_visual_widget( 'taabeer-utility', array( 'kind' => 'cart', 'label' => 'Shopping bag' ) ),
							),
							'site-header__actions tb-hx-actions'
						),
					),
					'site-header__inner tb-hx-header__inner'
				),
			),
			'site-header tb-hx-header',
			'header'
		),
	);
}

function taabeer_heritage_footer_data() {
	$arts = '';
	foreach ( taabeer_heritage_arts() as $slug => $art ) {
		$arts .= '<li><a href="' . esc_url( home_url( '/' . $slug . '/' ) ) . '">' . esc_html( $art['title'] ) . '</a></li>';
	}
	$house = '';
	foreach ( array( 'About TAABEER' => home_url( '/about/' ), 'Journal' => taabeer_heritage_journal_url(), 'Discover Pakistan' => home_url( '/discover-pakistan/' ), 'Partnerships' => home_url( '/partnerships/' ), 'Contact' => home_url( '/contact/' ) ) as $label => $url ) {
		$house .= '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	$info = '<li><a href="' . esc_url( get_privacy_policy_url() ?: home_url( '/privacy-policy/' ) ) . '">Privacy Policy</a></li><li><a href="' . esc_url( home_url( '/cookie-policy/' ) ) . '">Cookie Policy</a></li>';
	return array(
		taabeer_visual_container(
			array(
				taabeer_visual_container(
					array(
						taabeer_hx_image( taabeer_brand_url( 'lockup' ), 'tb-hx-footer__logo', 'TAABEER — Curating Expressions of Pakistan', home_url( '/' ) ),
						taabeer_visual_text( '<p>A London house of Pakistani heritage and contemporary design — chosen with care, presented with respect for the hands that made it.</p>', 'tb-hx-footer__intro' ),
						taabeer_visual_button( 'Begin a conversation', home_url( '/contact/' ), 'text-link text-link--light' ),
					),
					'tb-hx-footer__brand'
				),
				taabeer_visual_container(
					array(
						taabeer_visual_container( array( taabeer_visual_heading( 'The Curated Arts', 'h3' ), taabeer_visual_text( '<ul>' . $arts . '</ul>', 'site-footer__menu' ) ), 'tb-hx-footer__col' ),
						taabeer_visual_container( array( taabeer_visual_heading( 'The House', 'h3' ), taabeer_visual_text( '<ul>' . $house . '</ul>', 'site-footer__menu' ) ), 'tb-hx-footer__col' ),
						taabeer_visual_container( array( taabeer_visual_heading( 'Contact', 'h3' ), taabeer_visual_text( taabeer_london_contact_html(), 'tb-hx-footer__contact' ) ), 'tb-hx-footer__col' ),
						taabeer_visual_container( array( taabeer_visual_heading( 'Information', 'h3' ), taabeer_visual_text( '<ul>' . $info . '</ul>', 'site-footer__menu' ), taabeer_visual_widget( 'taabeer-utility', array( 'kind' => 'cookies', 'label' => 'Cookie settings' ), 'site-footer__cookie-button' ) ), 'tb-hx-footer__col' ),
					),
					'tb-hx-footer__grid'
				),
				taabeer_visual_container(
					array(
						taabeer_visual_widget( 'taabeer-utility', array( 'kind' => 'copyright', 'label' => 'TAABEER. All rights reserved.' ) ),
						taabeer_visual_text( '<p>Curating Expressions of Pakistan</p>', 'tb-hx-footer__motto' ),
					),
					'site-footer__bottom tb-hx-footer__bottom'
				),
			),
			'site-footer tb-hx-footer',
			'footer'
		),
		taabeer_visual_widget( 'taabeer-cookie-notice', array() ),
	);
}

/* ---------------------------------------------------------------------------
 * Homepage.
 * ------------------------------------------------------------------------- */

function taabeer_heritage_home_data() {
	$arts  = taabeer_heritage_arts();
	$tiles = array(
		array( 'tile-embroidery.webp', 'Wear', 'art-of-wear' ),
		array( 'tile-lion.webp', 'Antiques', 'art-of-antiques' ),
		array( 'tile-jhumka.webp', 'Adornment', 'art-of-adornment' ),
		array( 'tile-rug.webp', 'Living', 'art-of-living' ),
		array( 'calligraphy-board.webp', 'Expression', 'art-of-expression' ),
		array( 'tile-jali.webp', 'Journal', '' ),
	);
	$mosaic = array();
	foreach ( $tiles as $tile ) {
		$url      = $tile[2] ? home_url( '/' . $tile[2] . '/' ) : taabeer_heritage_journal_url();
		$mosaic[] = taabeer_hx_link_box( array( taabeer_hx_image( taabeer_art_image_url( $tile[0] ), 'tb-hx-tile__image' ), taabeer_visual_heading( $tile[1], 'h3', 'tb-hx-tile__label' ) ), 'tb-hx-tile', $url );
	}

	$hero = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_image( taabeer_art_image_url( 'london-wear-card.webp' ), 'tb-hx-hero__image', 'A woman in an ivory kurta with a hand-printed Pakistani shawl, walking past a Georgian doorway in London' ),
					taabeer_visual_container(
						array(
							taabeer_hx_image( taabeer_brand_url( 'mark' ), 'tb-hx-hero__mark' ),
							taabeer_hx_eyebrow( 'A London house of Pakistani design', 'eyebrow--gold' ),
							taabeer_visual_heading( 'Weaving the Soul <em>of Heritage</em>', 'h1' ),
							taabeer_visual_text( '<p>Pakistani craftsmanship and contemporary design, curated in London. Pieces made by Pakistan’s artisans and emerging designers, chosen for homes and wardrobes across the UK.</p>', 'tb-hx-hero__intro' ),
							taabeer_visual_container(
								array(
									taabeer_visual_button( 'Discover the Arts', '#curated-arts', 'button button--gold' ),
									taabeer_visual_button( 'Our story', home_url( '/about/' ), 'text-link text-link--light' ),
								),
								'button-row'
							),
						),
						'tb-hx-hero__content'
					),
				),
				'tb-hx-hero__feature'
			),
			taabeer_visual_container( $mosaic, 'tb-hx-mosaic' ),
		),
		'tb-hx-hero',
		'section'
	);

	$intro = taabeer_visual_container(
		array(
			taabeer_hx_ornament(),
			taabeer_hx_eyebrow( 'The House of TAABEER', 'eyebrow--gold' ),
			taabeer_visual_heading( 'Where heritage is not preserved behind glass, but lived, worn and treasured', 'h2' ),
			taabeer_visual_text( '<p>TAABEER — <span lang="ur" dir="rtl">تعبیر</span> — means expression and interpretation. Rooted in Pakistan and based in London, we bring together the finest of Pakistan’s heritage crafts and the designers reimagining them — for the diaspora who grew up with these traditions, and for everyone discovering them for the first time.</p>', 'tb-hx-intro__copy' ),
		),
		'tb-hx-intro shell',
		'section'
	);

	$cards = array();
	$i     = 0;
	foreach ( $arts as $slug => $art ) {
		++$i;
		$cards[] = taabeer_hx_link_box(
			array(
				taabeer_hx_eyebrow( sprintf( '%02d', $i ), 'tb-hx-art__number' ),
				taabeer_visual_heading( $art['title'], 'h3', 'tb-hx-art__title' ),
				taabeer_visual_text( '<p>' . esc_html( $art['short'] ) . '</p>', 'tb-hx-art__short' ),
				taabeer_hx_image( taabeer_art_image_url( $art['card'] ), 'tb-hx-art__image tb-arch' ),
				taabeer_visual_text( '<p>Discover</p>', 'tb-hx-art__cta' ),
			),
			'tb-hx-art',
			home_url( '/' . $slug . '/' )
		);
	}
	$curated = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_eyebrow( 'Five areas of excellence', 'eyebrow--gold' ), taabeer_visual_heading( 'The Curated Arts', 'h2' ) ), 'tb-hx-heading' ),
			taabeer_visual_container( $cards, 'tb-hx-arts' ),
		),
		'tb-hx-curated shell',
		'section'
	);
	$curated['settings']['css_id'] = 'curated-arts';

	$story = taabeer_visual_container(
		array(
			taabeer_hx_image( taabeer_art_image_url( 'craft-story.webp' ), 'tb-hx-story__image', 'A craftsman’s hands carving wood with a chisel' ),
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'Featured Story', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Craftsmanship: Honouring the Hands that Shape TAABEER', 'h2' ),
					taabeer_visual_text( '<p>Behind every piece is a maker, a lineage and countless hours of patient work. Our journal travels to the ateliers and workshops where heritage is kept alive.</p>' ),
					taabeer_visual_button( 'Read the story', taabeer_heritage_journal_url(), 'button button--outline-light' ),
				),
				'tb-hx-story__content'
			),
		),
		'tb-hx-story',
		'section'
	);

	$heritage = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_image( taabeer_art_image_url( 'heritage-arch.webp' ), 'tb-hx-split__image tb-arch', 'A carved Mughal arch framing the Lahore Fort' ) ), 'tb-hx-split__media' ),
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'From Pakistan to London', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Stories from Pakistan, at home in London', 'h2' ),
					taabeer_visual_text( '<p>Every piece begins somewhere: the carved arches of Lahore, the block-printers of Sindh, the embroiderers of Swat and the quiet ateliers of Karachi and Multan. TAABEER brings that heritage to London with the restraint and finish of contemporary luxury — fewer pieces, better told, and always credited to the hands that made them.</p>' ),
					taabeer_visual_container(
						array(
							taabeer_visual_container( array( taabeer_visual_heading( 'Curated', 'h3' ), taabeer_visual_text( '<p>Every piece is selected in person, for quality and character.</p>' ) ), 'tb-hx-pillar' ),
							taabeer_visual_container( array( taabeer_visual_heading( 'Crafted', 'h3' ), taabeer_visual_text( '<p>Made by hand by master artisans, women makers and independent studios.</p>' ) ), 'tb-hx-pillar' ),
							taabeer_visual_container( array( taabeer_visual_heading( 'Cherished', 'h3' ), taabeer_visual_text( '<p>Presented with its story, to be kept and passed on.</p>' ) ), 'tb-hx-pillar' ),
						),
						'tb-hx-pillars'
					),
					taabeer_visual_button( 'Our story', home_url( '/about/' ), 'text-link' ),
				),
				'tb-hx-split__content'
			),
		),
		'tb-hx-split shell',
		'section'
	);

	$journal = taabeer_visual_container(
		array(
			taabeer_visual_widget(
				'taabeer-story-grid',
				array(
					'eyebrow'       => 'The Journal',
					'title'         => 'Stories of craft, culture and the people behind them',
					'count'         => 3,
					'empty_message' => 'Our first stories — from studio visits to the history behind each Art — are being written now.',
					'empty_image'   => array( 'url' => taabeer_art_image_url( 'jali-corridor.webp' ) ),
				),
				'tb-hx-journal'
			),
		),
		'tb-hx-journal-wrap'
	);

	$newsletter = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_ornament(),
					taabeer_hx_eyebrow( 'The TAABEER Circle', 'eyebrow--gold' ),
					taabeer_visual_heading( 'Be the first to discover new pieces, brands and stories', 'h2' ),
				),
				'tb-hx-newsletter__copy'
			),
			taabeer_visual_widget( 'taabeer-newsletter', array(), 'tb-hx-newsletter__form' ),
		),
		'tb-hx-newsletter',
		'section'
	);

	return array( $hero, $intro, $curated, taabeer_london_brands_section(), $story, $heritage, $journal, $newsletter );
}

/* ---------------------------------------------------------------------------
 * Art pages.
 * ------------------------------------------------------------------------- */

function taabeer_heritage_art_page_data( $slug ) {
	$arts  = taabeer_heritage_arts();
	$art   = $arts[ $slug ];
	$index = array_search( $slug, array_keys( $arts ), true ) + 1;

	$hero = taabeer_visual_container(
		array(
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( sprintf( 'The Curated Arts · %02d', $index ), 'eyebrow--gold' ),
					taabeer_visual_heading( $art['title'], 'h1' ),
					taabeer_visual_text( '<p class="tb-hx-lede">' . esc_html( $art['tagline'] ) . '</p><p>' . esc_html( $art['intro'] ) . '</p>', 'tb-hx-art-hero__intro' ),
					taabeer_visual_container(
						array(
							taabeer_visual_button( 'Enquire about a piece', home_url( '/contact/?enquiry=collection' ), 'button button--gold' ),
							taabeer_visual_button( 'Contact TAABEER', home_url( '/contact/' ), 'text-link text-link--light' ),
						),
						'button-row'
					),
				),
				'tb-hx-art-hero__content'
			),
			taabeer_visual_container( array( taabeer_hx_image( taabeer_art_image_url( $art['card'] ), 'tb-hx-art-hero__image tb-arch', 'The ' . $art['title'] . ' by TAABEER: Pakistani craftsmanship in a London setting' ) ), 'tb-hx-art-hero__media' ),
		),
		'tb-hx-art-hero',
		'section'
	);

	$areas = array();
	foreach ( $art['areas'] as $area ) {
		$image   = $area[0]
			? taabeer_hx_image( taabeer_art_image_url( $area[0] ), 'tb-hx-area__image', $area[1] )
			: taabeer_hx_image( taabeer_brand_url( 'mark' ), 'tb-hx-area__image tb-hx-area__image--pending', '' );
		$areas[] = taabeer_visual_container(
			array(
				$image,
				taabeer_visual_heading( $area[1], 'h3' ),
				taabeer_visual_text( '<p>' . esc_html( $area[2] ) . '</p>' ),
			),
			'tb-hx-area'
		);
	}
	$within = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_eyebrow( 'Within the ' . $art['title'], 'eyebrow--gold' ), taabeer_visual_heading( 'Explore the collection', 'h2' ) ), 'tb-hx-heading' ),
			taabeer_visual_container( $areas, 'tb-hx-areas tb-hx-areas--' . count( $areas ) ),
		),
		'tb-hx-within shell',
		'section'
	);

	$quote = taabeer_visual_container(
		array(
			taabeer_hx_ornament(),
			taabeer_visual_text( '<blockquote><p>“' . esc_html( $art['quote'] ) . '”</p></blockquote>', 'tb-hx-quote__text' ),
			taabeer_hx_eyebrow( 'TAABEER · ' . $art['title'], 'eyebrow--gold' ),
		),
		'tb-hx-quote',
		'section'
	);

	$feature = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_image( taabeer_art_image_url( $art['feature'][0] ), 'tb-hx-split__image tb-arch' ) ), 'tb-hx-split__media' ),
			taabeer_visual_container(
				array(
					taabeer_hx_eyebrow( 'The story from Pakistan', 'eyebrow--gold' ),
					taabeer_visual_heading( $art['feature'][1], 'h2' ),
					taabeer_visual_text( '<p>' . esc_html( $art['feature'][2] ) . '</p>' ),
					taabeer_visual_button( 'Read the Journal', taabeer_heritage_journal_url(), 'text-link' ),
				),
				'tb-hx-split__content'
			),
		),
		'tb-hx-split tb-hx-split--reverse shell',
		'section'
	);

	$enquire = taabeer_visual_container(
		array(
			taabeer_hx_eyebrow( 'From Pakistan to London', 'eyebrow--gold' ),
			taabeer_visual_heading( 'Pieces are released in limited editions', 'h2' ),
			taabeer_visual_text( '<p>Register your interest to hear first when new pieces arrive, or contact us with any question about a piece, its maker or its story.</p>' ),
			taabeer_visual_button( 'Register your interest', home_url( '/contact/?enquiry=collection' ), 'button button--gold' ),
		),
		'tb-hx-appointment',
		'section'
	);

	// All five Arts, so a visitor always sees the full set; the current one is marked.
	$others = array();
	foreach ( $arts as $other_slug => $other ) {
		$current  = $other_slug === $slug;
		$children = array(
			taabeer_hx_image( taabeer_art_image_url( $other['card'] ), 'tb-hx-art__image tb-arch' ),
			taabeer_visual_heading( $other['title'], 'h3', 'tb-hx-art__title' ),
			taabeer_visual_text( '<p>' . esc_html( $current ? 'You are here' : $other['short'] ) . '</p>', 'tb-hx-art__short' ),
		);
		$others[] = taabeer_hx_link_box( $children, 'tb-hx-art tb-hx-art--compact' . ( $current ? ' tb-hx-art--current' : '' ), home_url( '/' . $other_slug . '/' ) );
	}
	$more = taabeer_visual_container(
		array(
			taabeer_visual_container( array( taabeer_hx_eyebrow( 'Continue exploring', 'eyebrow--gold' ), taabeer_visual_heading( 'The Curated Arts', 'h2' ) ), 'tb-hx-heading' ),
			taabeer_visual_container( $others, 'tb-hx-arts tb-hx-arts--all' ),
		),
		'tb-hx-curated tb-hx-curated--more shell',
		'section'
	);

	$sections = array( $hero, $within );
	if ( 'art-of-wear' === $slug ) {
		$sections[] = taabeer_london_shawl_edit();
	}
	return array_merge( $sections, array( $quote, $feature, $enquire, $more ) );
}

/* ---------------------------------------------------------------------------
 * Migration: apply the Heritage direction once, archiving what it replaces.
 * ------------------------------------------------------------------------- */

/** Copy a page's current Elementor layout to a draft so sections can be reused. */
function taabeer_heritage_archive_page( $post, $label ) {
	$existing = get_posts( array( 'post_type' => $post->post_type, 'post_status' => 'any', 'posts_per_page' => 1, 'meta_key' => '_taabeer_archive_of', 'meta_value' => $post->ID ) );
	if ( $existing ) {
		return $existing[0]->ID;
	}
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

function taabeer_heritage_replace_layout( $post_id, $data ) {
	add_post_meta( $post_id, '_taabeer_before_heritage', wp_slash( array( 'content' => get_post_field( 'post_content', $post_id ), 'elementor' => get_post_meta( $post_id, '_elementor_data', true ) ) ), true );
	taabeer_visual_save( $post_id, $data );
	update_post_meta( $post_id, '_taabeer_heritage', TAABEER_HERITAGE_VERSION );
}

function taabeer_heritage_menu( $name, $location, $items ) {
	$menu = wp_get_nav_menu_object( $name );
	$id   = $menu ? $menu->term_id : wp_create_nav_menu( $name );
	if ( is_wp_error( $id ) ) {
		return;
	}
	if ( ! $menu ) {
		foreach ( $items as $item ) {
			wp_update_nav_menu_item( $id, 0, array( 'menu-item-title' => $item[0], 'menu-item-url' => $item[1], 'menu-item-type' => 'custom', 'menu-item-status' => 'publish' ) );
		}
	}
	$locations              = get_theme_mod( 'nav_menu_locations', array() );
	$locations[ $location ] = $id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

function taabeer_heritage_kit() {
	if ( ! function_exists( 'taabeer_ensure_elementor_kit' ) ) {
		return;
	}
	$id = taabeer_ensure_elementor_kit();
	if ( ! $id ) {
		return;
	}
	$settings = get_post_meta( $id, '_elementor_page_settings', true );
	$settings = is_array( $settings ) ? $settings : array();
	$settings['system_colors'] = array(
		array( '_id' => 'primary', 'title' => 'Heritage Green', 'color' => '#0F3A2D' ),
		array( '_id' => 'secondary', 'title' => 'Deep Bottle Green', 'color' => '#0A231B' ),
		array( '_id' => 'text', 'title' => 'Ink', 'color' => '#1F2420' ),
		array( '_id' => 'accent', 'title' => 'Antique Gold', 'color' => '#C49A3A' ),
	);
	$settings['custom_colors'] = array(
		array( '_id' => 'tbivory', 'title' => 'Warm Ivory', 'color' => '#F7F2E8' ),
		array( '_id' => 'tbgoldl', 'title' => 'Light Gold', 'color' => '#E7C66C' ),
		array( '_id' => 'tbsand', 'title' => 'Sandstone', 'color' => '#E9DFCC' ),
	);
	$settings['system_typography'] = array();
	foreach ( array( 'primary' => array( 'Cormorant Garamond', '500' ), 'secondary' => array( 'Cormorant Garamond', '400' ), 'text' => array( 'Jost', '400' ), 'accent' => array( 'Jost', '500' ) ) as $key => $font ) {
		$settings['system_typography'][] = array( '_id' => $key, 'title' => ucfirst( $key ), 'typography_typography' => 'custom', 'typography_font_family' => $font[0], 'typography_font_weight' => $font[1] );
	}
	update_post_meta( $id, '_elementor_page_settings', $settings );
	delete_post_meta( $id, '_elementor_css' );
}

/** Older pages keep their copy; only the superseded concept photographs are replaced. */
function taabeer_heritage_image_map() {
	return array(
		'hero-weaver.webp'           => 'craft-story.webp',
		'collection-wear.webp'       => 'tile-embroidery.webp',
		'collection-adornment.webp'  => 'tile-jhumka.webp',
		'collection-living.webp'     => 'art-living.webp',
		'collection-expression.webp' => 'calligraphy-board.webp',
		'collection-leather.webp'    => 'print-blocks.webp',
		'about-material.webp'        => 'hand-stitch.webp',
		'story-textile.webp'         => 'jali-corridor.webp',
		'story-studio.webp'          => 'art-expression.webp',
		'story-object.webp'          => 'tile-vessels.webp',
		'discover-pakistan.webp'     => 'heritage-arch.webp',
		'region-punjab.webp'         => 'heritage-arch.webp',
		'region-sindh.webp'          => 'print-blocks.webp',
		'region-north.webp'          => 'tile-rug.webp',
	);
}

function taabeer_heritage_refresh_images() {
	$posts = get_posts( array( 'post_type' => array( 'page', 'taabeer_layout', 'heritage_story', 'creative_profile' ), 'post_status' => array( 'publish', 'draft', 'private' ), 'numberposts' => -1, 'meta_key' => '_elementor_data' ) );
	foreach ( $posts as $post ) {
		if ( get_post_meta( $post->ID, '_taabeer_archive_of', true ) ) {
			continue;
		}
		$data = get_post_meta( $post->ID, '_elementor_data', true );
		if ( ! is_string( $data ) || ( false === strpos( $data, 'images\/demo\/' ) && false === strpos( $data, 'images/demo/' ) ) ) {
			continue;
		}
		$new = $data;
		foreach ( taabeer_heritage_image_map() as $old => $replacement ) {
			$new = str_replace( array( 'images\/demo\/' . $old, 'images/demo/' . $old ), array( 'images\/art\/' . $replacement, 'images/art/' . $replacement ), $new );
		}
		if ( $new !== $data ) {
			update_post_meta( $post->ID, '_elementor_data', wp_slash( $new ) );
			delete_post_meta( $post->ID, '_elementor_element_cache' );
			delete_post_meta( $post->ID, '_elementor_css' );
		}
	}
}

function taabeer_heritage_apply() {
	if ( TAABEER_HERITAGE_VERSION === get_option( 'taabeer_heritage' ) ) {
		return true;
	}
	if ( ! did_action( 'elementor/loaded' ) || ! post_type_exists( 'elementor-hf' ) || ! function_exists( 'taabeer_visual_save' ) ) {
		return false;
	}

	// Collection taxonomy gains the new Art of Antiques; existing terms are kept.
	if ( taxonomy_exists( 'taabeer_collection' ) && ! term_exists( 'the-art-of-antiques', 'taabeer_collection' ) ) {
		wp_insert_term( 'The Art of Antiques', 'taabeer_collection', array( 'slug' => 'the-art-of-antiques', 'description' => 'Museum-quality antique pieces with provenance.' ) );
	}

	// Homepage: archive the previous design as an editable draft, then apply the new layout.
	$home_id = (int) get_option( 'page_on_front' );
	$home    = $home_id ? get_post( $home_id ) : null;
	if ( $home && TAABEER_HERITAGE_VERSION !== get_post_meta( $home_id, '_taabeer_heritage', true ) ) {
		taabeer_heritage_archive_page( $home, 'Home — Previous Design (archive)' );
		taabeer_heritage_replace_layout( $home_id, taabeer_heritage_home_data() );
	}

	// The five Art pages.
	$seo = array();
	foreach ( taabeer_heritage_arts() as $slug => $art ) {
		$page = get_page_by_path( $slug, OBJECT, 'page' );
		if ( ! $page ) {
			$page_id = wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $art['title'], 'post_name' => $slug, 'post_excerpt' => $art['short'] ) );
			if ( is_wp_error( $page_id ) || ! $page_id ) {
				continue;
			}
			taabeer_visual_save( $page_id, taabeer_heritage_art_page_data( $slug ) );
			update_post_meta( $page_id, '_taabeer_heritage', TAABEER_HERITAGE_VERSION );
		} else {
			$page_id = $page->ID;
		}
		$seo[ $page_id ] = array( $art['title'] . ' | ' . $art['short'] . ' | TAABEER', wp_trim_words( $art['intro'], 26, '' ), strtolower( $art['title'] ) );
	}
	foreach ( $seo as $page_id => $entry ) {
		if ( ! get_post_meta( $page_id, '_yoast_wpseo_title', true ) ) {
			update_post_meta( $page_id, '_yoast_wpseo_title', $entry[0] );
		}
		if ( ! get_post_meta( $page_id, '_yoast_wpseo_metadesc', true ) ) {
			update_post_meta( $page_id, '_yoast_wpseo_metadesc', $entry[1] );
		}
		add_post_meta( $page_id, '_yoast_wpseo_focuskw', $entry[2], true );
	}
	if ( $home_id ) {
		update_post_meta( $home_id, '_yoast_wpseo_title', 'TAABEER | Curating Expressions of Pakistan — Heritage & Contemporary Design' );
		update_post_meta( $home_id, '_yoast_wpseo_metadesc', 'TAABEER curates the finest of Pakistani heritage and contemporary design across five Arts: Wear, Living, Expression, Adornment and Antiques.' );
	}

	// Navigation: new menus are assigned; the previous menu remains available in Appearance > Menus.
	taabeer_heritage_menu( 'TAABEER Main Navigation', 'primary', taabeer_heritage_nav_items() );
	$footer_items = array();
	foreach ( taabeer_heritage_arts() as $slug => $art ) {
		$footer_items[] = array( $art['title'], home_url( '/' . $slug . '/' ) );
	}
	$footer_items = array_merge( $footer_items, array( array( 'Journal', taabeer_heritage_journal_url() ), array( 'Discover Pakistan', home_url( '/discover-pakistan/' ) ), array( 'About', home_url( '/about/' ) ), array( 'Contact', home_url( '/contact/' ) ) ) );
	taabeer_heritage_menu( 'TAABEER Footer Navigation', 'footer', $footer_items );

	// Shared header and footer: archive previous versions as drafts, then rebuild.
	foreach ( array( 'header' => 'taabeer_heritage_header_data', 'footer' => 'taabeer_heritage_footer_data' ) as $location => $builder ) {
		$shared = get_posts( array( 'post_type' => 'elementor-hf', 'post_status' => 'publish', 'posts_per_page' => 1, 'meta_key' => '_taabeer_shared', 'meta_value' => $location ) );
		if ( ! $shared || TAABEER_HERITAGE_VERSION === get_post_meta( $shared[0]->ID, '_taabeer_heritage', true ) ) {
			continue;
		}
		$archive = taabeer_heritage_archive_page( $shared[0], 'TAABEER — Previous ' . ucfirst( $location ) . ' (archive)' );
		if ( $archive ) {
			delete_post_meta( $archive, 'ehf_target_include_locations' );
		}
		taabeer_heritage_replace_layout( $shared[0]->ID, call_user_func( $builder ) );
	}

	taabeer_heritage_refresh_images();
	taabeer_heritage_kit();
	if ( class_exists( '\\Elementor\\Plugin' ) ) {
		\Elementor\Plugin::instance()->files_manager->clear_cache();
	}
	flush_rewrite_rules( false );
	update_option( 'taabeer_heritage', TAABEER_HERITAGE_VERSION );
	return true;
}

/** Runs for an administrator after the theme update, once Elementor and its header plugin are available. */
add_action(
	'admin_init',
	function () {
		if ( wp_doing_ajax() || ! current_user_can( 'manage_options' ) || TAABEER_HERITAGE_VERSION === get_option( 'taabeer_heritage' ) ) {
			return;
		}
		if ( get_option( 'taabeer_visual_foundation' ) !== '1.1.0' ) {
			return;
		}
		taabeer_heritage_apply();
	},
	50
);

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::add_command(
		'taabeer heritage',
		function () {
			WP_CLI::log( taabeer_heritage_apply() ? 'TAABEER Heritage design applied.' : 'Elementor and Header Footer Elementor must be active.' );
		}
	);
}

/* ---------------------------------------------------------------------------
 * Front-end assets and identity.
 * ------------------------------------------------------------------------- */

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'taabeer-heritage', TAABEER_URI . '/assets/css/heritage.css', array( 'taabeer-visual-editor' ), TAABEER_VERSION );
		wp_enqueue_style( 'taabeer-london', TAABEER_URI . '/assets/css/london.css', array( 'taabeer-heritage' ), TAABEER_VERSION );
	},
	6
);

add_action(
	'wp_head',
	function () {
		foreach ( array( 'cormorant-garamond-latin-500-normal', 'jost-latin-400-normal' ) as $font ) {
			echo '<link rel="preload" href="' . esc_url( TAABEER_URI . '/assets/fonts/' . $font . '.woff2' ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
		}
		if ( ! has_site_icon() ) {
			echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( taabeer_brand_url( 'mark' ) ) . '">' . "\n";
		}
		echo '<meta name="theme-color" content="#0A231B">' . "\n";
	},
	2
);

add_filter(
	'body_class',
	function ( $classes ) {
		if ( is_singular( 'page' ) && get_post_meta( get_queried_object_id(), '_taabeer_heritage', true ) ) {
			$classes[] = 'tb-hx-page';
		}
		return $classes;
	}
);

/** Editor preview of the Elementor canvas uses the same identity. */
add_action(
	'elementor/preview/enqueue_styles',
	function () {
		wp_enqueue_style( 'taabeer-heritage-preview', TAABEER_URI . '/assets/css/heritage.css', array(), TAABEER_VERSION );
		wp_enqueue_style( 'taabeer-london-preview', TAABEER_URI . '/assets/css/london.css', array( 'taabeer-heritage-preview' ), TAABEER_VERSION );
	}
);
