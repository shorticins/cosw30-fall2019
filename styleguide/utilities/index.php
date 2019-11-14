<?php include('../includes/header.php'); ?>

<main class="styleguide__main nine columns">
    <h1>Utilities</h1>
    <p>
        The following utility classes are available to make minor changes on page layouts, colors,
        fonts, etc. If you find yourself using more than 5 utility classes you probably should be
        making a new component or module instead of using that many utilities.
    </p>
    <p>Utility classes are recognizable by the <code>.u-</code> that prefixes the class names</p>

    <hr>
    <h2>Colors</h2>
    <p>These classes may be used to change the color of text:</p>
    <ul>
        <li>
            <code class="u-color--black">.u-color--black</code>
            <p class="u-color--black">Text - black</p>
        </li>
        <li>
            <code>.u-color--blue-light</code>
            <p class="u-color--blue-light">Text - blue-light</p>
        </li>
        <li>
            <code>.u-color--error</code>
            <p class="u-color--error">Text - error</p>
        </li>
        <li>
            <code>.u-color--grey-light</code>
            <p class="u-color--grey-light u-bg-color--black">Text - grey-light</p>
        </li>
        <li>
            <code>.u-color--green</code>
            <p class="u-color--green">Text - green</p>
        </li>
        <li>
            <code>.u-color--purple</code>
            <p class="u-color--purple">Text - purple</p>
        </li>
        <li>
            <code>.u-color--red-dark</code>
            <p class="u-color--red-dark">Text - red-dark</p>
        </li>
        <li>
            <code class="u-color--white u-bg-color--black">.u-color--white</code>
            <p class="u-color--white u-bg-color--black">Text - white</p>
        </li>
    </ul>
    <div id="paragraphText">
        <textarea cols="88" rows="20">
            <p class="u-color--black">Text - black</p>
            <p class="u-color--blue-light">Text - blue-light</p>
            <p class="u-color--error">Text - error</p>
            <p class="u-color--grey-light u-bg-color--black">Text - grey-light</p>
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
        <li>
            <code>.u-bg-color--black</code>
            <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--blue-light</code>
            <p class="u-bg-color--blue-light u-color--white">class="u-bg-color--blue-light u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--error</code>
            <p class="u-bg-color--error u-color--white">class="u-bg-color--error u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--grey-light</code>
            <p class="u-bg-color--grey-light u-color--black">class="u-bg-color--grey-light u-color--black"</p>
        </li>
        <li>
            <code>.u-bg-color--green</code>
            <p class="u-bg-color--green u-color--white">class="u-bg-color--green u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--purple</code>
            <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--red-dark</code>
            <p class="u-bg-color--red-dark u-color--white">class="u-bg-color--red-dark u-color--white"</p>
        </li>
        <li>
            <code>.u-bg-color--white</code>
            <p class="u-bg-color--white u-color--black">class="u-bg-color--white u-color--black"</p>
        </li>
    </ul>
    <div id="bgcolorSamples">
        <textarea cols="125" rows="10">
            <p class="u-bg-color--black u-color--white">class="u-bg-color--black u-color--white"</p>
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

<?php include('../includes/footer.php'); ?>
