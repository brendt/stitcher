<html>
    <head>
        <title></title>
        {meta}
        {css src="css/main.css" inline=true}
    </head>
    <body>
        {block 'content'}{/block}

        {block 'scripts'}
            {js src="js/main.js" inline=true}
            {js src="js/async.js" async=true}
        {/block}
    </body>
</html>
