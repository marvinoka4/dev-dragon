
  (function () {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var __ = wp.i18n.__;
    var { RichText } = wp.editor;
  
    registerBlockType( 'dragon/test', {
        title: 'test', // Block title
        icon: 'smiley', // Block icon
        category: 'common', // Block category
        attributes: {
          content: {
            type: 'string',
            source: 'html',
            selector: 'p',
          },
        },
        edit: function( props ) {
          var content = props.attributes.content;
          function onChangeContent( newContent ) {
            props.setAttributes( { content: newContent } );
          }
          return el(
            RichText,
            {
              tagName: 'p',
              className: props.className,
              onChange: onChangeContent,
              value: content,
            }
          );
        },
        save: function( props ) {
          return el( RichText.Content, {
            tagName: 'p',
            value: props.attributes.content,
          } );
        },
    } );
  } )();
  