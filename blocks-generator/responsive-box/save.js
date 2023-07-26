import { useBlockProps, InnerBlocks } from '@wordpress/block-editor'

export default function save({ attributes }) {
	const blockProps = useBlockProps.save()

	return <div
		data-breakpoint={attributes.breakpoint}
		className={'mx-responsive-box ' + attributes.unique_class}
	>
		<div
			{...blockProps}
		>
			<style>

				{/* Display only on Desktops */}
				{
					attributes.breakpoint == 'desktop' &&
					`@media (max-width: 992px) {
						body .mx-responsive-box.${attributes.unique_class} {
							display: none !important;
						}
						body .editor-styles-wrapper .mx-responsive-box.${attributes.unique_class} {
							display: block !important;
							opacity: 0.5;
						}
					}						
					`
				}

				{/* Display only on Tablets */}
				{
					attributes.breakpoint == 'tablets' &&
					`@media (max-width: 768px) {
						body .mx-responsive-box.${attributes.unique_class} {
							display: none !important;
						}
						body .editor-styles-wrapper .mx-responsive-box.${attributes.unique_class} {
							display: block !important;
							opacity: 0.5;
						}
					}
					@media (min-width: 992px) {
						body .mx-responsive-box.${attributes.unique_class} {
							display: none !important;
						}
						body .editor-styles-wrapper .mx-responsive-box.${attributes.unique_class} {
							display: block !important;
							opacity: 0.5;
						}
					}
					`
				}

				{/* Display only on Mobile */}
				{
					attributes.breakpoint == 'mobile' &&
					`@media (min-width: 768px) {
						body .mx-responsive-box.${attributes.unique_class} {
							display: none !important;
						}
						body .editor-styles-wrapper .mx-responsive-box.${attributes.unique_class} {
							display: block !important;
							opacity: 0.5;
						}
					}
					`
				}

			</style>

			<InnerBlocks.Content />

		</div>
	</div>
}
