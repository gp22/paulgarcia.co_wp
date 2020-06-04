/**
 * Custom Gutenberg CTA Block
 * JavaScript dependencies defined in /inc/gutenberg.php
 *
 * @package      ClientName
 * @author       Paul Garcia
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, MediaUpload, InnerBlocks, BlockControls, AlignmentToolbar } = wp.blockEditor;
const { PanelBody, IconButton, RangeControl } = wp.components;
const ALLOWED_BLOCKS = ['core/button'];

registerBlockType('pgarcia/custom-cta', {
  title: 'Call to Action',
  description: 'Generate CTA',
  icon: 'format-image',
  category: 'layout',
  attributes: {
    title: {
      type: 'string',
      source: 'html',
      selector: 'h2'
    },
    titleColor: {
      type: 'string',
      default: 'black'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    },
    alignment: {
      type: 'string',
      default: ''
    },
    backgroundImage: {
      type: 'string',
      default: ''
    },
    overlayColor: {
      type: 'string',
      default: 'black'
    },
    overlayOpacity: {
      type: 'number',
      default: 1
    }
  },
  edit: ({ attributes, setAttributes }) => {
    const { title, body, alignment, titleColor, backgroundImage, overlayColor, overlayOpacity } = attributes;

    function onChange(type, value) {
      if (type === 'backgroundImage') value = value.sizes.full.url;

      setAttributes({ [type]: value });
    }

    return [
      <InspectorControls>
        <PanelBody title="Font Color Settings">
          <p>
            <strong>Select a Title color:</strong>
          </p>
          <ColorPalette value={titleColor} onChange={e => onChange('titleColor', e)} />
        </PanelBody>
        <PanelBody title="Background Image Settings">
          <MediaUpload
            onSelect={e => onChange('backgroundImage', e)}
            type="image"
            value={backgroundImage}
            render={({ open }) => (
              <IconButton onClick={open} icon="upload">
                Background Image
              </IconButton>
            )}
          />
          <div style={{ margin: '20px 0 40px' }}>
            <p>
              <strong>Overlay color:</strong>
            </p>
            <ColorPalette value={overlayColor} onChange={e => onChange('overlayColor', e)} />
          </div>
          <RangeControl
            label="Overlay Opacity"
            value={overlayOpacity}
            onChange={e => onChange('overlayOpacity', e)}
            min={0}
            max={1}
            step={0.05}
          />
        </PanelBody>
      </InspectorControls>,
      <div
        className="cta-container"
        style={{
          backgroundImage: `url(${backgroundImage})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          backgroundRepeat: 'no-repeat'
        }}
      >
        <div className="cta-overlay" style={{ background: overlayColor, opacity: overlayOpacity }}></div>
        <RichText
          key="editable"
          tagName="h2"
          placeholder="Your CTA Title"
          value={title}
          onChange={e => onChange('title', e)}
          style={{ color: titleColor }}
        />
        <RichText
          key="editable"
          tagName="p"
          placeholder="Your CTA Description"
          value={body}
          onChange={e => onChange('body', e)}
        />
        <InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
      </div>
    ];
  },
  save: ({ attributes }) => {
    const { title, body, titleColor, backgroundImage, overlayColor, overlayOpacity } = attributes;
    console.log(backgroundImage);
    return (
      <div
        className="cta-container"
        // style={{
        //   backgroundImage: `url(${backgroundImage})`,
        //   backgroundSize: 'cover',
        //   backgroundPosition: 'center',
        //   backgroundRepeat: 'no-repeat'
        // }}
      >
        <div className="cta-overlay" style={{ background: overlayColor, opacity: overlayOpacity }}></div>
        <RichText.Content tagName="h2" value={title} style={{ color: titleColor }} />
        <RichText.Content tagName="p" value={body} />
        <img src={backgroundImage} alt="" />
      </div>
    );
  }
});
