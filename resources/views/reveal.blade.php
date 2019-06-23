<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>reveal.js</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/reveal.css">
    <link href="css/output.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/theme/black.css"> -->

    <!-- Theme used for syntax highlighting of code -->
    <link rel="stylesheet" href="css/monokai.css">
    <script src="/js/jquery.js"></script>
</head>

<body>
    <div class="reveal">
        <div class="slides">
            <section>
                <div>
                    <input id="input" type="text" class="form-input" placeholder="Type Something">
                    <h1 class="font-black text-3xl mt-4" id="output"></h1>
                </div>

                <script type="text/javascript">
                    $('#input').on('input', function() {
                        $('#output').text($(this).val())
                    })
                </script>
            </section>

            <section>
                <div>
                    <button ic-get-from="https://cors-anywhere.herokuapp.com/https://github.com/_render_node/MDU6SXNzdWU0NDYzMjc4ODQ=/issues/transfer_form_possible_repositories?variables%5Bquery%5D=">hey</button>
                </div>
            </section>

            <section>
                <pre><code data-trim>
<script src="jquery.js"></script>
</code></pre>

                <pre><code data-trim class="text-left fragment">
<div>
    <input id="input" type="text">
    <h1 id="output"></h1>

</div>
</code></pre>

                <pre><code data-trim class="text-left fragment">

<script>
    $('#input').on('input', function() {
        $('#output').text($(this).val())
    })
</script>
</code></pre>
            </section>

            <section>
                <pre><code data-trim>
<script src="vue.js"></script>
</code></pre>

                <pre><code data-trim class="text-left fragment">
<div>
    <input v-model="words" type="text">
    <h1>@{{ words }}</h1>

</div>
</code></pre>

                <pre><code data-trim class="text-left fragment">

<script>
    new Vue({
        el: "div",

        data: {
            words: '',
        }

    })
</script>
</code></pre>
            </section>
            <section>
                <pre><code data-trim>
<script src="foo.js"></script>
</code></pre>
            </section>

            <section>
                <pre><code>npm install foo</code></pre>
            </section>

            <section>
                <h1 class="text-2xl font-bold">Dependancy Management</h1>
                <ul>
                    <li class="fragment">CDN</li>
                    <li class="fragment">Bower</li>
                    <li class="fragment">NPM</li>
                </ul>
                <ul>
                    <li>The Build</li>
                    <li class="fragment">Grunt</li>
                    <li class="fragment">Gulp</li>
                    <li class="fragment">Browserify</li>
                    <li class="fragment">WebPack</li>
                    <li class="fragment">Rollup</li>
                    <li class="fragment">Parcel</li>
                </ul>
                <ul>
                    <li>Frameworks</li>
                    <li class="fragment">jQuery</li>
                    <li class="fragment">MooTools</li>
                    <li class="fragment">Backbone</li>
                    <li class="fragment">Angular</li>
                    <li class="fragment">Ember</li>
                    <li class="fragment">Elm</li>
                    <li class="fragment">Polymer</li>
                    <li class="fragment">Meteor</li>
                    <li class="fragment">React</li>
                    <li class="fragment">Vue</li>
                    <li class="fragment">Svelte</li>
                </ul>
                <ul>
                    <li>Testing</li>
                    <li class="fragment">Mocha</li>
                    <li class="fragment">Chai</li>
                    <li class="fragment">Sinon</li>
                    <li class="fragment">PhantomJs</li>
                    <li class="fragment">Nightwatch</li>
                    <li class="fragment">Jest</li>
                    <li class="fragment">Puppeteer</li>
                    <li class="fragment">Jasmine</li>
                    <li class="fragment">Karma</li>
                    <li class="fragment">Cypress</li>
                </ul>

                <ul>
                    <li>Techniques</li>
                    <li class="fragment"></li>
                    <li class="fragment">Chai</li>
                    <li class="fragment">Sinon</li>
                    <li class="fragment">PhantomJs</li>
                    <li class="fragment">Nightwatch</li>
                    <li class="fragment">Jest</li>
                    <li class="fragment">Puppeteer</li>
                    <li class="fragment">Jasmine</li>
                    <li class="fragment">Karma</li>
                    <li class="fragment">Cypress</li>
                </ul>
            </section>
        </div>
    </div>

    <script src="js/reveal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intercooler-js/1.2.2/intercooler.min.js"></script>

    <script>
        // More info about config & dependencies:
        // - https://github.com/hakimel/reveal.js#configuration
        // - https://github.com/hakimel/reveal.js#dependencies
        Reveal.initialize({
            width: 500,
            height: 500,
            dependencies: [{
                    src: 'js/plugins/markdown/marked.js'
                },
                {
                    src: 'js/plugins/markdown/markdown.js'
                },
                {
                    src: 'js/plugins/notes/notes.js',
                    async: true
                },
                {
                    src: 'js/plugins/highlight/highlight.js',
                    async: true
                }
            ]
        });
    </script>
</body>

</html>
