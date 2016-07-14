<div class="tiny-account-status wide" id="tiny-account-status" data-state="missing">
	<div class="create">
		<h4><?php
			echo esc_html_e( 'Register new account', 'tiny-compress-images' );
		?></h4>

		<p class="introduction" class="description"><?php
			echo esc_html__(
				'Provide your name and email address to start optimizing images.',
				'tiny-compress-images'
			);
		?></p>

		<input type="text" id="tinypng_api_key_name" name="tinypng_api_key_name"
			placeholder="Your full name" value="<?php echo esc_attr( $name ); ?>">

		<input type="text" id="tinypng_api_key_email" name="tinypng_api_key_email"
			placeholder="Your email address" value="<?php echo esc_attr( $email ); ?>">

		<p class="message"></p>

		<button class="button button-primary" data-tiny-action="create-key">
			<?php echo esc_html__( 'Register account', 'tiny-compress-images' ) ?>
		</button>
	</div>

	<div class="update">
		<h4><?php
			echo esc_html__( 'Already have an account?', 'tiny-compress-images' );
		?></h4>

		<p class="introduction"><?php
			$link = sprintf( '<a href="https://tinypng.com/developers" target="_blank">%s</a>',
				esc_html__( 'TinyPNG developer section', 'tiny-compress-images' )
			);

			echo esc_html__( 'Enter your API key.', 'tiny-compress-images' );
			echo ' ';

			printf( esc_html__(
				'Go to the %s to retrieve it.',
				'tiny-compress-images'
			), $link );
		?></p>

		<input type="text" id="<?php echo esc_attr( self::get_prefixed_name( 'api_key' ) ); ?>"
			name="<?php echo esc_attr( self::get_prefixed_name( 'api_key' ) ); ?>">

		<p class="message"></p>

		<button class="button button-primary" data-tiny-action="update-key">
			<?php echo esc_html__( 'Save', 'tiny-compress-images' ); ?>
		</button>
	</div>
</div>
