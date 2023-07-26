import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow, Button, RadioControl, __experimentalNumberControl as NumberControl } from '@wordpress/components';
import './editor.scss';

export default function edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps()

	// style
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

	}

	return [
		<InspectorControls key="mx-settings">

			<PanelBody title={__('Box Position', 'olena')} initialOpen={true}>

				<PanelRow>
					<RadioControl
						label={__('Box Orientation', 'olena')}
						help={__('Set Box Orientation', 'olena')}
						selected={attributes.orientation}
						options={[
							{ label: 'Left-Top', value: '1' },
							{ label: 'Top-Right', value: '2' },
							{ label: 'Bottom-Right', value: '3' },
							{ label: 'Left-Bottom', value: '4' }
						]}
						onChange={orientation => setAttributes({ orientation })}
					/>
				</PanelRow>

				{/* Left-Top */}
				{attributes.orientation === '1' &&
					<PanelRow>

						<div>
							<NumberControl
								label={__('Left (%)', 'olena')}
								value={attributes.positionLeft}
								min="-50"
								max="150"
								onChange={positionLeft => setAttributes({
									positionLeft
								})}
							/>
						</div>

						<div>
							<NumberControl
								label={__('Top (%)', 'olena')}
								value={attributes.positionTop}
								min="-50"
								max="150"
								onChange={positionTop => setAttributes({
									positionTop
								})}
							/>
						</div>

					</PanelRow>
				}

				{/* Top-Right */}
				{attributes.orientation === '2' &&
					<PanelRow>

						<div>
							<NumberControl
								label={__('Top (%)', 'olena')}
								value={attributes.positionTop}
								min="-50"
								max="150"
								onChange={positionTop => setAttributes({
									positionTop
								})}
							/>
						</div>

						<div>
							<NumberControl
								label={__('Right (%)', 'olena')}
								value={attributes.positionRight}
								min="-50"
								max="150"
								onChange={positionRight => setAttributes({
									positionRight
								})}
							/>
						</div>

					</PanelRow>
				}

				{/* Bottom-Right */}
				{attributes.orientation === '3' &&
					<PanelRow>

						<div>
							<NumberControl
								label={__('Bottom (%)', 'olena')}
								value={attributes.positionBottom}
								min="-50"
								max="150"
								onChange={positionBottom => setAttributes({
									positionBottom
								})}
							/>
						</div>

						<div>
							<NumberControl
								label={__('Right (%)', 'olena')}
								value={attributes.positionRight}
								min="-50"
								max="150"
								onChange={positionRight => setAttributes({
									positionRight
								})}
							/>
						</div>

					</PanelRow>
				}

				{/* Left-Bottom */}
				{attributes.orientation === '4' &&
					<PanelRow>

						<div>
							<NumberControl
								label={__('Left (%)', 'olena')}
								value={attributes.positionLeft}
								min="-50"
								max="150"
								onChange={positionLeft => setAttributes({
									positionLeft
								})}
							/>
						</div>

						<div>
							<NumberControl
								label={__('Bottom (%)', 'olena')}
								value={attributes.positionBottom}
								min="-50"
								max="150"
								onChange={positionBottom => setAttributes({
									positionBottom
								})}
							/>
						</div>

					</PanelRow>
				}

			</PanelBody>

		</InspectorControls>,
		<div
			key="mx-main-content"
			{...blockProps}
			style={style()}
			data-orientation={attributes.orientation}
			data-position-left={attributes.positionLeft}
			data-position-top={attributes.positionTop}
			data-position-right={attributes.positionRight}
			data-position-bottom={attributes.positionBottom}
		>
			<InnerBlocks />
		</div>
	];
}
