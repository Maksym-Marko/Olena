import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody, PanelRow, __experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from '@wordpress/components';
import { useEffect } from '@wordpress/element';
import './editor.scss';

export default function edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps()

	const makeUniqueClass = (length) => {
		let result = '';
		const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		const charactersLength = characters.length;
		let counter = 0;
		while (counter < length) {
			result += characters.charAt(Math.floor(Math.random() * charactersLength));
			counter += 1;
		}
		return result;
	}

	useEffect(() => {
		setAttributes({
			unique_class: 'mx-responsive-box-' + makeUniqueClass(12)
		})
	}, [])

	return [
		<InspectorControls key="mx-settings">

			<PanelBody title={__('Breakpoint', 'olena')} initialOpen={true}>

				<PanelRow>
					{__('This element will be shown on next devices:', 'olena')}
				</PanelRow>

				<PanelRow>

					<ToggleGroupControl
						__nextHasNoMarginBottom
						isBlock
						value={attributes.breakpoint}
						onChange={breakpoint => setAttributes({ breakpoint })}
					>
						<ToggleGroupControlOption
							label={__('All', 'olena')}
							value="all"
						/>
						<ToggleGroupControlOption
							label={__('Desktop', 'olena')}
							value="desktop"
						/>
						<ToggleGroupControlOption
							label={__('Tablets', 'olena')}
							value="tablets"
						/>
						<ToggleGroupControlOption
							label={__('Mobile', 'olena')}
							value="mobile"
						/>
					</ToggleGroupControl>
				</PanelRow>

			</PanelBody>

		</InspectorControls>,
		<div
			key="mx-content"
			className={'mx-responsive-box ' + attributes.unique_class}
			data-breakpoint={attributes.breakpoint}
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

				<InnerBlocks />

			</div>

		</div>
	];
}
