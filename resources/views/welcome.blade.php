<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>reveal.js</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/reveal.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

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
                    <input id="input" type="text" class="">
                    <span id="output"></span>
                </div>

                <script type="text/javascript">
                    $('#input').on('input', function() {
                        $('#output').text($(this).val())
                    })
                </script>
            </section>
            <section>Slide 2</section>
        </div>
    </div>

    <script src="js/reveal.js"></script>

    <script>
        // More info about config & dependencies:
        // - https://github.com/hakimel/reveal.js#configuration
        // - https://github.com/hakimel/reveal.js#dependencies
        Reveal.initialize({
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
