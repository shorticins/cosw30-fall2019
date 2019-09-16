<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Styleguide - Layout</title>
        <link href="/styleguide/styles.css" rel="stylesheet">
    </head>
    <body>
        <main class="container">
            <h1>Layout</h1>
            <p>The following styles and components are related to page layouts</p>
            
            <hr>
            <h2>Grid</h2>
            <p>The grid is a 12-column fluid grid with a max width of 960px, that shrinks with the browser/device at smaller sizes. 
            The max width can be changed with one line of CSS and all columns will resize accordingly. 
            The syntax is simple and it makes coding responsive much easier. Go ahead, resize the browser.</p>
            <p>To use this grid, wrap columns in each row in the ".row" class. To define the width of each column add the number of columns
            you want it to be (ex. ".one", ".two", up to ".eleven") and add the ".column" or ".columns" class.</p>
            <div class="example-grid docs-example">
                <div class="row">
                  <div class="one column bg-color--grey margin-b--md">One</div>
                  <div class="eleven columns bg-color--grey margin-b--md">Eleven</div>
                </div>
                <div class="row">
                  <div class="two columns bg-color--grey margin-b--md">Two</div>
                  <div class="ten columns bg-color--grey margin-b--md">Ten</div>
                </div>
                <div class="row">
                  <div class="three columns bg-color--grey margin-b--md">Three</div>
                  <div class="nine columns bg-color--grey margin-b--md">Nine</div>
                </div>
                <div class="row">
                  <div class="four columns bg-color--grey margin-b--md">Four</div>
                  <div class="eight columns bg-color--grey margin-b--md">Eight</div>
                </div>
                <div class="row">
                  <div class="five columns bg-color--grey margin-b--md">Five</div>
                  <div class="seven columns bg-color--grey margin-b--md">Seven</div>
                </div>
                <div class="row">
                  <div class="six columns bg-color--grey margin-b--md">Six</div>
                  <div class="six columns bg-color--grey margin-b--md">Six</div>
                </div>
                <div class="row">
                  <div class="seven columns bg-color--grey margin-b--md">Seven</div>
                  <div class="five columns bg-color--grey margin-b--md">Five</div>
                </div>
                <div class="row">
                  <div class="eight columns bg-color--grey margin-b--md">Eight</div>
                  <div class="four  columns bg-color--grey margin-b--md">Four</div>
                </div>
                <div class="row">
                  <div class="nine columns bg-color--grey margin-b--md">Nine</div>
                  <div class="three columns bg-color--grey margin-b--md">Three</div>
                </div>
                <div class="row">
                  <div class="ten columns bg-color--grey margin-b--md">Ten</div>
                  <div class="two columns bg-color--grey margin-b--md">Two</div>
                </div>
                <div class="row">
                  <div class="eleven columns bg-color--grey margin-b--md">Eleven</div>
                  <div class="one column bg-color--grey margin-b--md">One</div>
                </div>
             </div>
        </main>
    </body>
</html>