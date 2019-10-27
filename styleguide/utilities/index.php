<?php include 'styleguide_header.php';
      include 'styleguide_navigation.php';
?>
        <main class="container">
            <h1>Utilities</h1>
            <p>
                The following utility classes are available to make minor changes on page layouts, colors,
                fonts, etc. If you find yourself using more than 5 utility classes you probably should be
                making a new component or module instead of using that many utilities.
            </p>
            <p>Utility classes are recognizable by the <code>.u-</code> that prefixes the class names</p>

            <hr>
            <h2>Colors</h2>
            <style>
             
                .u-color--black {
                    color: #000;
                }
                .u-color--blue-light {
                    color: #9cd0f0 ;
                }
                .u-color--grey-light {
                    color: #d3d3d3;
                }
                .u-color--green {
                    color: #2E9E47;
                }
                .u-color--purple {
                    color: #7b4b94;
                }
                .u-color--red-dark, .u-color--error{
                    color: #b81f24;
                }
                .u-color--white {
                    color: #FFF;
                }
                .u-bg-color--black{
                    background-color: #000;
                }
                .u-bg-color--blue-light{
                    background-color: #9cd0f0;
                }
                .u-bg-color--grey-light{
                    background-color: #d3d3d3;
                }
                .u-bg-color--green{
                    background-color: #2E9E47;
                }
                .u-bg-color--purple{
                    background-color: #7b4b94;
                }
                .u-bg-color--red-dark, .u-bg-color--error{
                    background-color: #b81f24;
                }
                .u-bg-color--white{
                    background-color: #FFF;
                }
            </ul>*/
            
            </style>
            <p>These classes may be used to change the color of text:</p>
            <ul>
                <li><code class="u-color--black">.u-color--black</code><br />
                <p class="u-color--black">Text - black</p></li>
                <li><code>.u-color--blue-light</code><br />
                <p class="u-color--blue-light">Text - blue-light</p></li>
                <li><code>.u-color--error</code><br />
                <p class="u-color--error">Text - error</p></li>
                <li><code>.u-color--grey-light</code><br />
                <p class="u-color--grey-light">Text - grey-light</p></li>
                <li><code>.u-color--green</code><br />
                <p class="u-color--green">Text - green</p></li>
                <li><code>.u-color--purple</code><br />
                <p class="u-color--purple">Text - purple</p></li>
                <li><code>.u-color--red-dark</code><br />
                <p class="u-color--red-dark">Text - red-dark</p></li>
                <li><code class="u-color--white u-bg-color--black">.u-color--white</code><br />
                <p class="u-color--white u-bg-color--black">Text - white</p></li>
            </ul>
            <div id="paragraphText"><textarea cols="88" rows="10">
                <p class="u-color--black">Text - black</p>
                <p class="u-color--blue-light">Text - blue-light</p>
                <p class="u-color--error">Text - error</p>
                <p class="u-color--grey-light">Text - grey-light</p>
                <p class="u-color--green">Text - green</p>
                <p class="u-color--purple">Text - purple</p>
                <p class="u-color--red-dark">Text - red-dark</p>
                <p class="u-color--white u-bg-color--black">Text - white</p>
                </textarea>
            </div>
            <hr>

            <h2>Background Colors</h2>
            <p>These classes may be used to change the background color of an element:</p>
            <ul>
                <li><code>.u-bg-color--black</code><br />
                <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p></li>
                <li><code>.u-bg-color--blue-light</code><br />
                <p class="u-bg-color--blue-light u-color--white">class="u-bg-color--blue-light u-color--white"</p></li>
                <li><code>.u-bg-color--error</code><br />
                <p class="u-bg-color--error u-color--white">class="u-bg-color--error u-color--white"</p></li>
                <li><code>.u-bg-color--grey-light</code><br />
                <p class="u-bg-color--grey-light u-color--black">class="u-bg-color--grey-light u-color--black"</p></li>
                <li><code>.u-bg-color--green</code><br />
                <p class="u-bg-color--green u-color--white">class="u-bg-color--green u-color--white"</p></li>
                <li><code>.u-bg-color--purple</code><br />
                <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p></li>
                <li><code>.u-bg-color--red-dark</code><br />
                <p class="u-bg-color--red-dark u-color--white">class="u-bg-color--red-dark u-color--white"</p></li>
                <li><code>.u-bg-color--white</code><br />
                <p class="u-bg-color--white u-color--black">class="u-bg-color--white u-color--black"</p></li>
            </ul>
            <div id="bgcolorSamples">
                <textarea cols="100" rows="10"><p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p>
                    <p class="u-bg-color--blue-light u-color--white">class="u-bg-color--blue-light u-color--white"</p>
                    <p class="u-bg-color--error u-color--white">class="u-bg-color--error u-color--white"</p>
                    <p class="u-bg-color--grey-light u-color--black">class="u-bg-color--grey-light u-color--black"</p>
                    <p class="u-bg-color--green u-color--white">class="u-bg-color--green u-color--white"</p>
                    <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p>
                    <p class="u-bg-color--red-dark u-color--white">class="u-bg-color--red-dark u-color--white"</p>
                    <p class="u-bg-color--white u-color--black">class="u-bg-color--white u-color--black"</p>
                </textarea>
            </div>
        </main>
<?php include 'styleguide_footer.php'; ?>
