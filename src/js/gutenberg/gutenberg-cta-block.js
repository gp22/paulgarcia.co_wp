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
const { RichText, InspectorControls, ColorPalette, MediaUpload } = wp.blockEditor;
const { PanelBody, IconButton } = wp.components;

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
    backgroundImage: {
      type: 'string',
      default: null
    }
  },
  edit: ({ attributes, setAttributes }) => {
    const { title, body, titleColor, backgroundImage } = attributes;

    function onChange(type, value) {
      setAttributes({ [type]: value });
    }

    function onTitleColorChange(newColor) {
      setAttributes({ titleColor: newColor });
    }

    function onSelectImage(newImage) {
      setAttributes({ backgroundImage: newImage.sizes.full.url });
    }

    return [
      <InspectorControls>
        <PanelBody title="Font Color Settings">
          <p>
            <strong>Select a Title color:</strong>
          </p>
          <ColorPalette value={titleColor} onChange={onTitleColorChange} />
        </PanelBody>
        <PanelBody title="Background Image Settings">
          <MediaUpload
            onSelect={onSelectImage}
            type="image"
            value={backgroundImage}
            render={({ open }) => (
              <IconButton onClick={open} icon="upload">
                Background Image
              </IconButton>
            )}
          />
        </PanelBody>
      </InspectorControls>,
      <div className="cta-container">
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
      </div>
    ];
  },
  save: ({ attributes }) => {
    const { title, body, titleColor } = attributes;

    return (
      <div className="cta-container">
        <p></p>
        <ul>
          <li>
            <p>lajskldfjlasfdlkas</p>
          </li>
        </ul>
        <RichText.Content tagName="h2" value={title} style={{ color: titleColor }} />
        <RichText.Content tagName="p" value={body} />
      </div>
    );
  }
});
