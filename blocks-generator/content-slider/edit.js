import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { CheckboxControl, PanelBody, PanelRow, __experimentalNumberControl as NumberControl } from '@wordpress/components';
import './editor.scss';

export default function edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps()

	return [
		<InspectorControls key="mx-settings">

			<PanelBody title={__('Slider Options', 'olena')} initialOpen={false}>

				<PanelRow>

					<NumberControl
						label={__('Autoplay speed in seconds', 'olena')}
						value={attributes.autoplay}
						min="0"
						onChange={(speed) => setAttributes({
							autoplay: speed
						})}
					/>

				</PanelRow>

				<PanelRow>

					<CheckboxControl
						label={__('Show Navigation', 'olena')}
						help={__('Do you want to show navigation?', 'olena')}
						checked={ attributes.nav === '1' }
						onChange={tick => {
							const turnOn = tick ? '1' : '0'
							setAttributes({
								nav: turnOn
							})
						} }
					/>

				</PanelRow>

				<PanelRow>

					<CheckboxControl
						label={__('Show Dots', 'olena')}
						help={__('Do you want to show dots?', 'olena')}
						checked={ attributes.dots === '1' }
						onChange={tick => {
							const turnOn = tick ? '1' : '0'
							setAttributes({
								dots: turnOn
							})
						} }
					/>

				</PanelRow>

				<PanelRow>

					<CheckboxControl
						label={__('Loop', 'olena')}
						help={__('Do you want to enable an infinite loop?', 'olena')}
						checked={ attributes.loop === '1' }
						onChange={tick => {
							const turnOn = tick ? '1' : '0'
							setAttributes({
								loop: turnOn
							})
						} }
					/>

				</PanelRow>

			</PanelBody>

		</InspectorControls>,
		<div
			{...blockProps}
			key="mx-main-content"
			data-autoplay-speed={attributes.autoplay}
			data-nav={attributes.nav}
			data-dots={attributes.dots}
			data-loop={attributes.loop}
		>
			<InnerBlocks />
		</div>
	];
}
