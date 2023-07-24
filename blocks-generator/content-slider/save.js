import { useBlockProps, InnerBlocks } from '@wordpress/block-editor'

export default function save({ attributes }) {
	const blockProps = useBlockProps.save()

	return <div
		{...blockProps}
		data-autoplay-speed={attributes.autoplay}
		data-nav={attributes.nav}
		data-dots={attributes.dots}
		data-loop={attributes.loop}
	>
		<InnerBlocks.Content />
	</div>
}
