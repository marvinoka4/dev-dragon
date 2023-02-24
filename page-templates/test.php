<?php // Template Name: Test


get_header(); ?>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1>Welcome to Foundation</h1>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <h3>We&rsquo;re stoked you want to try Foundation!!!! </h3>
                <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
                <p>Once you've exhausted the fun in this document, you should check out:</p>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 medium-push-2 cell">
                        <p><a href="https://get.foundation/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
                    </div>
                    <div class="large-4 medium-4 medium-push-2 cell">
                        <p><a href="https://github.com/foundation/foundation-emails/discussions">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowledge.</p>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 medium-push-2 cell">
                        <p><a href="https://github.com/foundation/foundation-sites">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
                    </div>
                    <div class="large-4 medium-4 medium-pull-2 cell">
                        <p><a href="https://twitter.com/FoundationCSS">@FoundationCSS</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="reveal" id="exampleModal1" data-reveal>
                <h1>Awesome. I Have It.</h1>
                <p class="lead">Your couch. It is mine.</p>
                <p>I'm a cool paragraph that lives inside an even cooler modal. Wins!</p>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>

            <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Tab 2</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                </div>
                <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                </div>
            </div>
        </div>
    </div>



    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <h5>Here&rsquo;s your basic grid example:</h5>
            <!-- Grid Example -->

            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <div class="primary callout">
                        <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p>Six cell</p>
                    </div>
                </div>
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p>Six cell</p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
            </div>

            <hr />

            <h5>We bet you&rsquo;ll need a form somewhere:</h5>
            <form>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-12.cell" />
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.cell" />
                    </div>
                    <div class="large-4 medium-4 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.cell" />
                    </div>
                    <div class="large-4 medium-4 cell">
                        <div class="grid-x">
                            <label>Input Label</label>
                            <div class="input-group">
                                <input type="text" placeholder="small-9.cell" class="input-group-field" />
                                <span class="input-group-label">.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Select Box</label>
                        <select>
                            <option value="husker">Husker</option>
                            <option value="starbuck">Starbuck</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                        </select>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-6 medium-6 cell">
                        <label>Choose Your Favorite</label>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <label>Check these out</label>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Textarea Label</label>
                        <textarea placeholder="small-12.cell"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <div class="large-4 medium-4 cell">
            <h5>Try one of these buttons:</h5>
            <p><a href="#" class="button">Simple Button</a><br/>
                <a href="#" class="success button">Success Btn</a><br/>
                <a href="#" class="alert button">Alert Btn</a><br/>
                <a href="#" class="secondary button">Secondary Btn</a></p>
            <div class="callout">
                <h5>So many components, girl!</h5>
                <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
                <a href="https://get.foundation/sites/docs/" class="small button">Go to Foundation Docs</a>
            </div>
        </div>
    </div>
</div>


<main class="grid-container margin-top-2">
    <div class="grid-x grid-margin-x align-middle">
        <div class="large-12 cell">
            <h1>Heading 1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <h2>Heading 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h3>Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h4>Heading 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h5>Heading 5</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h6>Heading 6</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div>
</main>



<?php get_footer(); ?>
