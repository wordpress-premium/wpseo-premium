<?php // phpcs:ignore Internal.NoCodeFound ?>
{{block name="yoast/job-salary" title="<?php esc_attr_e( 'Base salary', 'wordpress-seo-premium' ); ?>" category="common" parent=[ "yoast/job-posting" ] supports={"multiple": false} }}
<div class={{class-name}}>
	{{variation name="base-salary" title="<?php esc_attr_e( 'Base salary', 'wordpress-seo-premium' ); ?>" description="<?php esc_attr_e( 'The base salary of the job', 'wordpress-seo-premium' ); ?>" scope=[ "block" ] icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='36' height='36'><path d='M3.25 12a8.75 8.75 0 1117.5 0 8.75 8.75 0 01-17.5 0zM12 4.75a7.25 7.25 0 100 14.5 7.25 7.25 0 000-14.5zm-1.338 4.877c-.314.22-.412.452-.412.623 0 .171.098.403.412.623.312.218.783.377 1.338.377.825 0 1.605.233 2.198.648.59.414 1.052 1.057 1.052 1.852 0 .795-.461 1.438-1.052 1.852-.41.286-.907.486-1.448.582v.316a.75.75 0 01-1.5 0v-.316a3.64 3.64 0 01-1.448-.582c-.59-.414-1.052-1.057-1.052-1.852a.75.75 0 011.5 0c0 .171.098.403.412.623.312.218.783.377 1.338.377s1.026-.159 1.338-.377c.314-.22.412-.452.412-.623 0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377-.825 0-1.605-.233-2.198-.648-.59-.414-1.052-1.057-1.052-1.852 0-.795.461-1.438 1.052-1.852a3.64 3.64 0 011.448-.582V7.5a.75.75 0 011.5 0v.316c.54.096 1.039.296 1.448.582.59.414 1.052 1.057 1.052 1.852a.75.75 0 01-1.5 0c0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377s-1.026.159-1.338.377z'></path></svg>" innerBlocks=[ { "name": "yoast/job-base-salary" }] }}
	{{variation name="salary-range" title="<?php esc_attr_e( 'Salary range', 'wordpress-seo-premium' ); ?>" description="<?php esc_attr_e( 'The salary range of the job, depending on a variety of factors (e.g. a candidate\'s education level or level of experience)', 'wordpress-seo-premium' ); ?>" scope=[ "block" ] icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='-0.5 0 24 24' width='36' height='36'><path d='M20.8 10.7l-4.3-4.3-1.1 1.1 4.3 4.3c.1.1.1.3 0 .4l-4.3 4.3 1.1 1.1 4.3-4.3c.7-.8.7-1.9 0-2.6zM4.2 11.8l4.3-4.3-1-1-4.3 4.3c-.7.7-.7 1.8 0 2.5l4.3 4.3 1.1-1.1-4.3-4.3c-.2-.1-.2-.3-.1-.4z'></path></svg>" innerBlocks=[ { "name": "yoast/job-salary-range" } ]}}
	{{inner-blocks appender=false}}
	{{variation-picker}}
</div>
{{inherit-sidebar parents=[ "yoast/job-posting" ] }}
