<div class="upgrade-account-notice" data-remaining-credits="<?php echo $remaining_credits; ?>">
	<div class="introduction">
		<p><?php
		$strong = array(
			'strong' => array(),
		);
		/* translators: %s: number of remaining credits */
		printf( wp_kses( __(
			'You are on a <strong>free plan</strong> with <strong>%s compressions left</strong> this month.', // WPCS: Needed for proper translation.
			'tiny-compress-images'
		), $strong ), $remaining_credits );
		?></p>
		<p><?php
		echo esc_html__(
			'Upgrade your account now to compress your entire media library.',
			'tiny-compress-images'
		);
		?></p>
	</div>
	<a href="https://tinypng.com/dashboard/api?type=upgrade&mail=<?php echo urlencode( $email_address ); ?>" target="_blank" class="button button-primary button-hero upgrade-account">
		<?php echo esc_html__( 'Upgrade account', 'tiny-compress-images' ); ?>
	</a><?php
	if ( $remaining_credits > 0 ) { ?>
	<p>
		<a id="hide-warning" href="#">
			<?php echo esc_html__( 'No thanks, continue anyway', 'tiny-compress-images' ); ?>
		</a>
	</p><?php
	} ?>
</div>
