/* eslint-disable */
const fs = require('fs');
const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Please enter a unique name for the new block: ', (blockName) => {
  createBlock(blockName);
  rl.close();
});

function createBlock(blockName) {
  const blockSlug = blockName.toLowerCase().replace(/\s+/g, '-'); // Convert to lowercase and replace spaces with hyphens
  const blockFolder = `parts/blocks/${blockSlug}`;
  const adminBlockScript = `assets/scripts/js/blocks/${blockSlug}-admin.js`;
  // const blockScript = `assets/scripts/js/blocks/${blockSlug}.js`;
  const blockStyles = `assets/styles/scss/blocks/_${blockSlug}-block.scss`; // Change CSS to SCSS
  const blockTemplate = `parts/blocks/${blockSlug}.php`;

  if (fs.existsSync(blockFolder)) {
    console.log(`A block with the name "${blockName}" already exists. Please enter a unique name.`);
    rl.question('Enter a new name for your block: ', (newBlockName) => {
      createBlock(newBlockName);
    });
    return; // Exit the function to prevent further execution
  }

  // fs.mkdirSync(blockFolder, { recursive: true });

  // Create block JS file
  const scriptContent = `
  (function () {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var __ = wp.i18n.__;
    var { RichText } = wp.editor;
  
    registerBlockType( 'dragon/${blockSlug}', {
        title: '${blockName}', // Block title
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
  `;
  fs.writeFileSync(adminBlockScript, scriptContent);

  // fs.writeFileSync(blockScript, '');

  // Create block SCSS file
  fs.writeFileSync(blockStyles, '');

  // Create block PHP template file
  const templateContent = `
  <?php
  // Template for ${blockName} block
  // You can customize this template as needed
  ?>
  `;
  fs.writeFileSync(blockTemplate, templateContent);

  // Enqueue block JS and SCSS files
  const themeFunctionsFile = 'functions/blocks.php';
  const enqueueScriptContent = `

function register_block_types() {
  acf_register_block_type( array(
    'name'              => '${blockSlug}',
    'title'             => __( '${blockName}', 'Dragon' ),
    'description'       => __( 'A custom ${blockName} block.', 'Dragon' ),
    'render_template'   => '/parts/blocks/${blockSlug}.php',
    'enqueue_style'     => get_template_directory_uri() . '/assets/styles/scss/blocks/_${blockSlug}-block.scss',
    'category'          => 'common',
    'icon'              => 'smiley',
    'keywords'          => array( 'block', 'Dragon' ),
  ) );
}

add_action('acf/init', 'register_block_types');
`;

  if (!fs.existsSync(themeFunctionsFile) || !fs.readFileSync(themeFunctionsFile).includes('register_block_types')) {
    // If register_block_types function doesn't exist, create it
    fs.appendFileSync(themeFunctionsFile, enqueueScriptContent, 'utf8');
  } else {
    // If register_block_types function exists, append the block registration to it
    const fileData = fs.readFileSync(themeFunctionsFile, 'utf8');
    const position = fileData.indexOf('function register_block_types()');
    const functionEnd = fileData.indexOf('}', position);
    const contentToAppend = enqueueScriptContent.slice(enqueueScriptContent.indexOf('{') + 1, enqueueScriptContent.lastIndexOf('}'));
    const updatedFunctionsContent = fileData.slice(0, functionEnd - 1) + contentToAppend + fileData.slice(functionEnd - 1);
    fs.writeFileSync(themeFunctionsFile, updatedFunctionsContent, 'utf8');
  }

  // Enqueue admin block JS file
  const adminEnqueueScriptContent = `
function enqueue_block_editor_assets() {
  wp_enqueue_script(
    '${blockSlug}-admin',
    get_template_directory_uri() . '/assets/scripts/js/blocks/${blockSlug}-admin.js',
    array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
    filemtime( get_template_directory() . '/assets/scripts/js/blocks/${blockSlug}-admin.js' )
  ); 
}
add_action( 'admin_enqueue_scripts', 'enqueue_block_editor_assets' );
`;
  if (!fs.existsSync(themeFunctionsFile) || !fs.readFileSync(themeFunctionsFile).includes('enqueue_block_editor_assets')) {
    // If enqueue_block_editor_assets function doesn't exist, create it
    fs.appendFileSync(themeFunctionsFile, adminEnqueueScriptContent, 'utf8');
  } else {
    // If enqueue_block_editor_assets function exists, append the block registration to it
    const fileData = fs.readFileSync(themeFunctionsFile, 'utf8');
    const position = fileData.indexOf('function enqueue_block_editor_assets()');
    const functionEnd = fileData.indexOf('}', position);
    const contentToAppend = adminEnqueueScriptContent.slice(adminEnqueueScriptContent.indexOf('{') + 1, adminEnqueueScriptContent.lastIndexOf('}'));
    const updatedFunctionsContent = fileData.slice(0, functionEnd - 1) + contentToAppend + fileData.slice(functionEnd - 1);
    fs.writeFileSync(themeFunctionsFile, updatedFunctionsContent, 'utf8');
  }

  console.log(`Block "${blockName}" created successfully, go make the website pleb`);
  console.log(`Remember to import the new SCSS to the app.scss file to be compiled.`);
}
