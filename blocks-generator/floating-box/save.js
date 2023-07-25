import { useBlockProps, InnerBlocks } from '@wordpress/block-editor'

export default function save({ attributes }) {
	const blockProps = useBlockProps.save()

	const style = () => {

		let styleObj = {}

		// Left-Top
		if( attributes.orientation === '1' ) {
			styleObj.left = attributes.positionLeft + '%'
			styleObj.top = attributes.positionTop + '%'
		}

		// Top-Right
		if( attributes.orientation === '2' ) {
			styleObj.right = attributes.positionRight + '%'
			styleObj.top = attributes.positionTop + '%'
		}

		// Bottom-Right
		if( attributes.orientation === '3' ) {
			styleObj.right = attributes.positionRight + '%'
			styleObj.bottom = attributes.positionBottom + '%'
		}

		// Bottom-Left
		if( attributes.orientation === '4' ) {
			styleObj.left = attributes.positionLeft + '%'
			styleObj.bottom = attributes.positionBottom + '%'
		}

		return styleObj

	};

	return <div
		{...blockProps}
		style={style()}
		data-orientation={attributes.orientation}
		data-position-left={attributes.positionLeft}
		data-position-top={attributes.positionTop}
		data-position-right={attributes.positionRight}
		data-position-bottom={attributes.positionBottom}
	>
		<InnerBlocks.Content />
	</div>
}
